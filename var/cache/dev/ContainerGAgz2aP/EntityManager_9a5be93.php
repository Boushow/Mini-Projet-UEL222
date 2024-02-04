<?php

namespace ContainerGAgz2aP;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9727e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8e65b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6d559 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getConnection', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getMetadataFactory', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getExpressionBuilder', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'beginTransaction', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getCache', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'transactional', array('func' => $func), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'commit', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->commit();
    }

    public function rollback()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'rollback', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getClassMetadata', array('className' => $className), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'createQuery', array('dql' => $dql), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'createNamedQuery', array('name' => $name), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'createQueryBuilder', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'flush', array('entity' => $entity), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'clear', array('entityName' => $entityName), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->clear($entityName);
    }

    public function close()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'close', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->close();
    }

    public function persist($entity)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'persist', array('entity' => $entity), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'remove', array('entity' => $entity), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'detach', array('entity' => $entity), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'merge', array('entity' => $entity), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'contains', array('entity' => $entity), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getEventManager', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getConfiguration', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'isOpen', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getUnitOfWork', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getProxyFactory', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'initializeObject', array('obj' => $obj), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'getFilters', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'isFiltersStateClean', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'hasFilters', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return $this->valueHolder9727e->hasFilters();
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

        $instance->initializer8e65b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder9727e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9727e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9727e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, '__get', ['name' => $name], $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        if (isset(self::$publicProperties6d559[$name])) {
            return $this->valueHolder9727e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9727e;

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

        $targetObject = $this->valueHolder9727e;
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
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9727e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9727e;
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
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, '__isset', array('name' => $name), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9727e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9727e;
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
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, '__unset', array('name' => $name), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9727e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9727e;
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
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, '__clone', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        $this->valueHolder9727e = clone $this->valueHolder9727e;
    }

    public function __sleep()
    {
        $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, '__sleep', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;

        return array('valueHolder9727e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8e65b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8e65b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8e65b && ($this->initializer8e65b->__invoke($valueHolder9727e, $this, 'initializeProxy', array(), $this->initializer8e65b) || 1) && $this->valueHolder9727e = $valueHolder9727e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9727e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9727e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
