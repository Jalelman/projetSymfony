<?php

namespace ContainerSKVxvfl;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7d01f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8826c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5fa7f = [
        
    ];

    public function getConnection()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getConnection', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getMetadataFactory', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getExpressionBuilder', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'beginTransaction', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getCache', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'transactional', array('func' => $func), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'commit', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->commit();
    }

    public function rollback()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'rollback', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getClassMetadata', array('className' => $className), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'createQuery', array('dql' => $dql), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'createNamedQuery', array('name' => $name), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'createQueryBuilder', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'flush', array('entity' => $entity), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'clear', array('entityName' => $entityName), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->clear($entityName);
    }

    public function close()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'close', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->close();
    }

    public function persist($entity)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'persist', array('entity' => $entity), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'remove', array('entity' => $entity), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'detach', array('entity' => $entity), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'merge', array('entity' => $entity), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'contains', array('entity' => $entity), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getEventManager', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getConfiguration', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'isOpen', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getUnitOfWork', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getProxyFactory', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'initializeObject', array('obj' => $obj), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'getFilters', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'isFiltersStateClean', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'hasFilters', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return $this->valueHolder7d01f->hasFilters();
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

        $instance->initializer8826c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder7d01f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7d01f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7d01f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, '__get', ['name' => $name], $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        if (isset(self::$publicProperties5fa7f[$name])) {
            return $this->valueHolder7d01f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d01f;

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

        $targetObject = $this->valueHolder7d01f;
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
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d01f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d01f;
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
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, '__isset', array('name' => $name), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d01f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7d01f;
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
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, '__unset', array('name' => $name), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d01f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7d01f;
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
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, '__clone', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        $this->valueHolder7d01f = clone $this->valueHolder7d01f;
    }

    public function __sleep()
    {
        $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, '__sleep', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;

        return array('valueHolder7d01f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer8826c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8826c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8826c && ($this->initializer8826c->__invoke($valueHolder7d01f, $this, 'initializeProxy', array(), $this->initializer8826c) || 1) && $this->valueHolder7d01f = $valueHolder7d01f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7d01f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7d01f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
