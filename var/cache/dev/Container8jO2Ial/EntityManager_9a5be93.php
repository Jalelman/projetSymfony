<?php

namespace Container8jO2Ial;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder23aee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd94fc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf3483 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getConnection', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getMetadataFactory', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getExpressionBuilder', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'beginTransaction', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getCache', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'transactional', array('func' => $func), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'commit', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->commit();
    }

    public function rollback()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'rollback', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getClassMetadata', array('className' => $className), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'createQuery', array('dql' => $dql), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'createNamedQuery', array('name' => $name), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'createQueryBuilder', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'flush', array('entity' => $entity), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'clear', array('entityName' => $entityName), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->clear($entityName);
    }

    public function close()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'close', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->close();
    }

    public function persist($entity)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'persist', array('entity' => $entity), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'remove', array('entity' => $entity), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'detach', array('entity' => $entity), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'merge', array('entity' => $entity), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'contains', array('entity' => $entity), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getEventManager', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getConfiguration', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'isOpen', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getUnitOfWork', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getProxyFactory', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'initializeObject', array('obj' => $obj), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'getFilters', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'isFiltersStateClean', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'hasFilters', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return $this->valueHolder23aee->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd94fc = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder23aee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder23aee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder23aee->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, '__get', ['name' => $name], $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        if (isset(self::$publicPropertiesf3483[$name])) {
            return $this->valueHolder23aee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23aee;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder23aee;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23aee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder23aee;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, '__isset', array('name' => $name), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23aee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder23aee;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, '__unset', array('name' => $name), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23aee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder23aee;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, '__clone', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        $this->valueHolder23aee = clone $this->valueHolder23aee;
    }

    public function __sleep()
    {
        $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, '__sleep', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;

        return array('valueHolder23aee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializerd94fc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd94fc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd94fc && ($this->initializerd94fc->__invoke($valueHolder23aee, $this, 'initializeProxy', array(), $this->initializerd94fc) || 1) && $this->valueHolder23aee = $valueHolder23aee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder23aee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder23aee;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
