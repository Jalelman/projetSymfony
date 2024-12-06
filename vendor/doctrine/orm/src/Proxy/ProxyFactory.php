<?php

declare(strict_types=1);

namespace Doctrine\ORM\Proxy;

use Closure;
use Doctrine\Common\Proxy\AbstractProxyFactory;
use Doctrine\Common\Proxy\Proxy as CommonProxy;
use Doctrine\Common\Proxy\ProxyDefinition;
use Doctrine\Common\Proxy\ProxyGenerator;
use Doctrine\Deprecations\Deprecation;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\ORMInvalidArgumentException;
use Doctrine\ORM\Persisters\Entity\EntityPersister;
use Doctrine\ORM\Proxy\Proxy as LegacyProxy;
use Doctrine\ORM\UnitOfWork;
use Doctrine\ORM\Utility\IdentifierFlattener;
use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\Proxy;
use ReflectionProperty;
use Symfony\Component\VarExporter\ProxyHelper;
use Throwable;

use function array_combine;
use function array_flip;
use function array_intersect_key;
use function bin2hex;
use function chmod;
use function class_exists;
use function dirname;
use function file_exists;
use function file_put_contents;
use function filemtime;
use function is_bool;
use function is_dir;
use function is_int;
use function is_writable;
use function ltrim;
use function mkdir;
use function preg_match_all;
use function random_bytes;
use function rename;
use function rtrim;
use function str_replace;
use function strpos;
use function strrpos;
use function strtr;
use function substr;
use function ucfirst;

use const DIRECTORY_SEPARATOR;
use const PHP_VERSION_ID;

/**
 * This factory is used to create proxy objects for entities at runtime.
 */
class ProxyFactory extends AbstractProxyFactory
{
    /**
     * Never autogenerate a proxy and rely that it was generated by some
     * process before deployment.
     */
    public const AUTOGENERATE_NEVER = 0;

    /**
     * Always generates a new proxy in every request.
     *
     * This is only sane during development.
     */
    public const AUTOGENERATE_ALWAYS = 1;

    /**
     * Autogenerate the proxy class when the proxy file does not exist.
     *
     * This strategy causes a file_exists() call whenever any proxy is used the
     * first time in a request.
     */
    public const AUTOGENERATE_FILE_NOT_EXISTS = 2;

    /**
     * Generate the proxy classes using eval().
     *
     * This strategy is only sane for development, and even then it gives me
     * the creeps a little.
     */
    public const AUTOGENERATE_EVAL = 3;

    /**
     * Autogenerate the proxy class when the proxy file does not exist or
     * when the proxied file changed.
     *
     * This strategy causes a file_exists() call whenever any proxy is used the
     * first time in a request. When the proxied file is changed, the proxy will
     * be updated.
     */
    public const AUTOGENERATE_FILE_NOT_EXISTS_OR_CHANGED = 4;

    private const PROXY_CLASS_TEMPLATE = <<<'EOPHP'
<?php

namespace <namespace>;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class <proxyShortClassName> extends \<className> implements \<baseProxyInterface>
{
    <useLazyGhostTrait>

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        <serializeImpl>
    }
}

EOPHP;

    /** @var EntityManagerInterface The EntityManager this factory is bound to. */
    private $em;

    /** @var UnitOfWork The UnitOfWork this factory uses to retrieve persisters */
    private $uow;

    /** @var string */
    private $proxyDir;

    /** @var string */
    private $proxyNs;

    /** @var self::AUTOGENERATE_* */
    private $autoGenerate;

    /**
     * The IdentifierFlattener used for manipulating identifiers
     *
     * @var IdentifierFlattener
     */
    private $identifierFlattener;

    /** @var array<class-string, Closure> */
    private $proxyFactories = [];

    /** @var bool */
    private $isLazyGhostObjectEnabled = true;

    /**
     * Initializes a new instance of the <tt>ProxyFactory</tt> class that is
     * connected to the given <tt>EntityManager</tt>.
     *
     * @param EntityManagerInterface    $em           The EntityManager the new factory works for.
     * @param string                    $proxyDir     The directory to use for the proxy classes. It must exist.
     * @param string                    $proxyNs      The namespace to use for the proxy classes.
     * @param bool|self::AUTOGENERATE_* $autoGenerate The strategy for automatically generating proxy classes.
     */
    public function __construct(EntityManagerInterface $em, $proxyDir, $proxyNs, $autoGenerate = self::AUTOGENERATE_NEVER)
    {
        if (! $em->getConfiguration()->isLazyGhostObjectEnabled()) {
            if (PHP_VERSION_ID >= 80100) {
                Deprecation::trigger(
                    'doctrine/orm',
                    'https://github.com/doctrine/orm/pull/10837/',
                    'Not enabling lazy ghost objects is deprecated and will not be supported in Doctrine ORM 3.0. Ensure Doctrine\ORM\Configuration::setLazyGhostObjectEnabled(true) is called to enable them.'
                );
            }

            $this->isLazyGhostObjectEnabled = false;

            $proxyGenerator = new ProxyGenerator($proxyDir, $proxyNs);
            // @phpstan-ignore classConstant.deprecatedInterface
            $proxyGenerator->setPlaceholder('baseProxyInterface', LegacyProxy::class);

            parent::__construct($proxyGenerator, $em->getMetadataFactory(), $autoGenerate);
        }

        if (! $proxyDir) {
            throw ORMInvalidArgumentException::proxyDirectoryRequired();
        }

        if (! $proxyNs) {
            throw ORMInvalidArgumentException::proxyNamespaceRequired();
        }

        if (is_int($autoGenerate) ? $autoGenerate < 0 || $autoGenerate > 4 : ! is_bool($autoGenerate)) {
            throw ORMInvalidArgumentException::invalidAutoGenerateMode($autoGenerate);
        }

        $this->em                  = $em;
        $this->uow                 = $em->getUnitOfWork();
        $this->proxyDir            = $proxyDir;
        $this->proxyNs             = $proxyNs;
        $this->autoGenerate        = (int) $autoGenerate;
        $this->identifierFlattener = new IdentifierFlattener($this->uow, $em->getMetadataFactory());
    }

    /**
     * {@inheritDoc}
     */
    public function getProxy($className, array $identifier)
    {
        if (! $this->isLazyGhostObjectEnabled) {
            return parent::getProxy($className, $identifier);
        }

        $proxyFactory = $this->proxyFactories[$className] ?? $this->getProxyFactory($className);

        return $proxyFactory($identifier);
    }

    /**
     * Generates proxy classes for all given classes.
     *
     * @param ClassMetadata[] $classes  The classes (ClassMetadata instances) for which to generate proxies.
     * @param string|null     $proxyDir The target directory of the proxy classes. If not specified, the
     *                                  directory configured on the Configuration of the EntityManager used
     *                                  by this factory is used.
     *
     * @return int Number of generated proxies.
     */
    public function generateProxyClasses(array $classes, $proxyDir = null)
    {
        if (! $this->isLazyGhostObjectEnabled) {
            return parent::generateProxyClasses($classes, $proxyDir);
        }

        $generated = 0;

        foreach ($classes as $class) {
            if ($this->skipClass($class)) {
                continue;
            }

            $proxyFileName  = $this->getProxyFileName($class->getName(), $proxyDir ?: $this->proxyDir);
            $proxyClassName = self::generateProxyClassName($class->getName(), $this->proxyNs);

            $this->generateProxyClass($class, $proxyFileName, $proxyClassName);

            ++$generated;
        }

        return $generated;
    }

    /**
     * {@inheritDoc}
     *
     * @deprecated ProxyFactory::resetUninitializedProxy() is deprecated and will be removed in version 3.0 of doctrine/orm.
     */
    public function resetUninitializedProxy(CommonProxy $proxy)
    {
        return parent::resetUninitializedProxy($proxy);
    }

    /**
     * {@inheritDoc}
     */
    protected function skipClass(ClassMetadata $metadata)
    {
        return $metadata->isMappedSuperclass
            || $metadata->isEmbeddedClass
            || $metadata->getReflectionClass()->isAbstract();
    }

    /**
     * {@inheritDoc}
     *
     * @deprecated ProxyFactory::createProxyDefinition() is deprecated and will be removed in version 3.0 of doctrine/orm.
     */
    protected function createProxyDefinition($className)
    {
        $classMetadata   = $this->em->getClassMetadata($className);
        $entityPersister = $this->uow->getEntityPersister($className);

        $initializer = $this->createInitializer($classMetadata, $entityPersister);
        $cloner      = $this->createCloner($classMetadata, $entityPersister);

        return new ProxyDefinition(
            self::generateProxyClassName($className, $this->proxyNs),
            $classMetadata->getIdentifierFieldNames(),
            $classMetadata->getReflectionProperties(),
            $initializer,
            $cloner
        );
    }

    /**
     * Creates a closure capable of initializing a proxy
     *
     * @deprecated ProxyFactory::createInitializer() is deprecated and will be removed in version 3.0 of doctrine/orm.
     *
     * @psalm-return Closure(CommonProxy):void
     *
     * @throws EntityNotFoundException
     */
    private function createInitializer(ClassMetadata $classMetadata, EntityPersister $entityPersister): Closure
    {
        $wakeupProxy = $classMetadata->getReflectionClass()->hasMethod('__wakeup');

        return function (CommonProxy $proxy) use ($entityPersister, $classMetadata, $wakeupProxy): void {
            $initializer = $proxy->__getInitializer();
            $cloner      = $proxy->__getCloner();

            $proxy->__setInitializer(null);
            $proxy->__setCloner(null);

            if ($proxy->__isInitialized()) {
                return;
            }

            $properties = $proxy->__getLazyProperties();

            foreach ($properties as $propertyName => $property) {
                if (! isset($proxy->$propertyName)) {
                    $proxy->$propertyName = $properties[$propertyName];
                }
            }

            $proxy->__setInitialized(true);

            if ($wakeupProxy) {
                $proxy->__wakeup();
            }

            $identifier = $classMetadata->getIdentifierValues($proxy);

            try {
                $entity = $entityPersister->loadById($identifier, $proxy);
            } catch (Throwable $exception) {
                $proxy->__setInitializer($initializer);
                $proxy->__setCloner($cloner);
                $proxy->__setInitialized(false);

                throw $exception;
            }

            if ($entity === null) {
                $proxy->__setInitializer($initializer);
                $proxy->__setCloner($cloner);
                $proxy->__setInitialized(false);

                throw EntityNotFoundException::fromClassNameAndIdentifier(
                    $classMetadata->getName(),
                    $this->identifierFlattener->flattenIdentifier($classMetadata, $identifier)
                );
            }
        };
    }

    /**
     * Creates a closure capable of initializing a proxy
     *
     * @return Closure(InternalProxy, array):void
     *
     * @throws EntityNotFoundException
     */
    private function createLazyInitializer(ClassMetadata $classMetadata, EntityPersister $entityPersister, IdentifierFlattener $identifierFlattener): Closure
    {
        return static function (InternalProxy $proxy, array $identifier) use ($entityPersister, $classMetadata, $identifierFlattener): void {
            $original = $entityPersister->loadById($identifier);

            if ($original === null) {
                throw EntityNotFoundException::fromClassNameAndIdentifier(
                    $classMetadata->getName(),
                    $identifierFlattener->flattenIdentifier($classMetadata, $identifier)
                );
            }

            if ($proxy === $original) {
                return;
            }

            $class = $entityPersister->getClassMetadata();

            foreach ($class->getReflectionProperties() as $property) {
                if (isset($identifier[$property->name]) || ! $class->hasField($property->name) && ! $class->hasAssociation($property->name)) {
                    continue;
                }

                $property->setValue($proxy, $property->getValue($original));
            }
        };
    }

    /**
     * Creates a closure capable of finalizing state a cloned proxy
     *
     * @deprecated ProxyFactory::createCloner() is deprecated and will be removed in version 3.0 of doctrine/orm.
     *
     * @psalm-return Closure(CommonProxy):void
     *
     * @throws EntityNotFoundException
     */
    private function createCloner(ClassMetadata $classMetadata, EntityPersister $entityPersister): Closure
    {
        return function (CommonProxy $proxy) use ($entityPersister, $classMetadata): void {
            if ($proxy->__isInitialized()) {
                return;
            }

            $proxy->__setInitialized(true);
            $proxy->__setInitializer(null);

            $class      = $entityPersister->getClassMetadata();
            $identifier = $classMetadata->getIdentifierValues($proxy);
            $original   = $entityPersister->loadById($identifier);

            if ($original === null) {
                throw EntityNotFoundException::fromClassNameAndIdentifier(
                    $classMetadata->getName(),
                    $this->identifierFlattener->flattenIdentifier($classMetadata, $identifier)
                );
            }

            foreach ($class->getReflectionProperties() as $property) {
                if (! $class->hasField($property->name) && ! $class->hasAssociation($property->name)) {
                    continue;
                }

                $property->setAccessible(true);
                $property->setValue($proxy, $property->getValue($original));
            }
        };
    }

    private function getProxyFileName(string $className, string $baseDirectory): string
    {
        $baseDirectory = $baseDirectory ?: $this->proxyDir;

        return rtrim($baseDirectory, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . InternalProxy::MARKER
            . str_replace('\\', '', $className) . '.php';
    }

    private function getProxyFactory(string $className): Closure
    {
        $skippedProperties = [];
        $class             = $this->em->getClassMetadata($className);
        $identifiers       = array_flip($class->getIdentifierFieldNames());
        $filter            = ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED | ReflectionProperty::IS_PRIVATE;
        $reflector         = $class->getReflectionClass();

        while ($reflector) {
            foreach ($reflector->getProperties($filter) as $property) {
                $name = $property->name;

                if ($property->isStatic() || (($class->hasField($name) || $class->hasAssociation($name)) && ! isset($identifiers[$name]))) {
                    continue;
                }

                $prefix = $property->isPrivate() ? "\0" . $property->class . "\0" : ($property->isProtected() ? "\0*\0" : '');

                $skippedProperties[$prefix . $name] = true;
            }

            $filter    = ReflectionProperty::IS_PRIVATE;
            $reflector = $reflector->getParentClass();
        }

        $className        = $class->getName(); // aliases and case sensitivity
        $entityPersister  = $this->uow->getEntityPersister($className);
        $initializer      = $this->createLazyInitializer($class, $entityPersister, $this->identifierFlattener);
        $proxyClassName   = $this->loadProxyClass($class);
        $identifierFields = array_intersect_key($class->getReflectionProperties(), $identifiers);

        $proxyFactory = Closure::bind(static function (array $identifier) use ($initializer, $skippedProperties, $identifierFields, $className): InternalProxy {
            $proxy = self::createLazyGhost(static function (InternalProxy $object) use ($initializer, $identifier): void {
                $initializer($object, $identifier);
            }, $skippedProperties);

            foreach ($identifierFields as $idField => $reflector) {
                if (! isset($identifier[$idField])) {
                    throw ORMInvalidArgumentException::missingPrimaryKeyValue($className, $idField);
                }

                $reflector->setValue($proxy, $identifier[$idField]);
            }

            return $proxy;
        }, null, $proxyClassName);

        return $this->proxyFactories[$className] = $proxyFactory;
    }

    private function loadProxyClass(ClassMetadata $class): string
    {
        $proxyClassName = self::generateProxyClassName($class->getName(), $this->proxyNs);

        if (class_exists($proxyClassName, false)) {
            return $proxyClassName;
        }

        if ($this->autoGenerate === self::AUTOGENERATE_EVAL) {
            $this->generateProxyClass($class, null, $proxyClassName);

            return $proxyClassName;
        }

        $fileName = $this->getProxyFileName($class->getName(), $this->proxyDir);

        switch ($this->autoGenerate) {
            case self::AUTOGENERATE_FILE_NOT_EXISTS_OR_CHANGED:
                if (file_exists($fileName) && filemtime($fileName) >= filemtime($class->getReflectionClass()->getFileName())) {
                    break;
                }
                // no break
            case self::AUTOGENERATE_FILE_NOT_EXISTS:
                if (file_exists($fileName)) {
                    break;
                }
                // no break
            case self::AUTOGENERATE_ALWAYS:
                $this->generateProxyClass($class, $fileName, $proxyClassName);
                break;
        }

        require $fileName;

        return $proxyClassName;
    }

    private function generateProxyClass(ClassMetadata $class, ?string $fileName, string $proxyClassName): void
    {
        $i            = strrpos($proxyClassName, '\\');
        $placeholders = [
            '<className>' => $class->getName(),
            '<namespace>' => substr($proxyClassName, 0, $i),
            '<proxyShortClassName>' => substr($proxyClassName, 1 + $i),
            '<baseProxyInterface>' => InternalProxy::class,
        ];

        preg_match_all('(<([a-zA-Z]+)>)', self::PROXY_CLASS_TEMPLATE, $placeholderMatches);

        foreach (array_combine($placeholderMatches[0], $placeholderMatches[1]) as $placeholder => $name) {
            $placeholders[$placeholder] ?? $placeholders[$placeholder] = $this->{'generate' . ucfirst($name)}($class);
        }

        $proxyCode = strtr(self::PROXY_CLASS_TEMPLATE, $placeholders);

        if (! $fileName) {
            if (! class_exists($proxyClassName)) {
                eval(substr($proxyCode, 5));
            }

            return;
        }

        $parentDirectory = dirname($fileName);

        if (! is_dir($parentDirectory) && ! @mkdir($parentDirectory, 0775, true)) {
            throw ORMInvalidArgumentException::proxyDirectoryNotWritable($this->proxyDir);
        }

        if (! is_writable($parentDirectory)) {
            throw ORMInvalidArgumentException::proxyDirectoryNotWritable($this->proxyDir);
        }

        $tmpFileName = $fileName . '.' . bin2hex(random_bytes(12));

        file_put_contents($tmpFileName, $proxyCode);
        @chmod($tmpFileName, 0664);
        rename($tmpFileName, $fileName);
    }

    private function generateUseLazyGhostTrait(ClassMetadata $class): string
    {
        $code = ProxyHelper::generateLazyGhost($class->getReflectionClass());
        $code = substr($code, 7 + (int) strpos($code, "\n{"));
        $code = substr($code, 0, (int) strpos($code, "\n}"));
        $code = str_replace('LazyGhostTrait;', str_replace("\n    ", "\n", 'LazyGhostTrait {
            initializeLazyObject as __load;
            setLazyObjectAsInitialized as public __setInitialized;
            isLazyObjectInitialized as private;
            createLazyGhost as private;
            resetLazyObject as private;
        }'), $code);

        return $code;
    }

    private function generateSerializeImpl(ClassMetadata $class): string
    {
        $reflector  = $class->getReflectionClass();
        $properties = $reflector->hasMethod('__serialize') ? 'parent::__serialize()' : '(array) $this';

        $code = '$properties = ' . $properties . ';
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        ';

        if ($reflector->hasMethod('__serialize') || ! $reflector->hasMethod('__sleep')) {
            return $code . 'return $properties;';
        }

        return $code . '$data = [];

        foreach (parent::__sleep() as $name) {
            $value = $properties[$k = $name] ?? $properties[$k = "\0*\0$name"] ?? $properties[$k = "\0' . $reflector->name . '\0$name"] ?? $k = null;

            if (null === $k) {
                trigger_error(sprintf(\'serialize(): "%s" returned as member variable from __sleep() but does not exist\', $name), \E_USER_NOTICE);
            } else {
                $data[$k] = $value;
            }
        }

        return $data;';
    }

    private static function generateProxyClassName(string $className, string $proxyNamespace): string
    {
        return rtrim($proxyNamespace, '\\') . '\\' . Proxy::MARKER . '\\' . ltrim($className, '\\');
    }
}
