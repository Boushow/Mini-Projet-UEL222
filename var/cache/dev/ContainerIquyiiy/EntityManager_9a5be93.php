<?php

namespace ContainerIquyiiy;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderca933 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4fa0f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0c832 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getConnection', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getMetadataFactory', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getExpressionBuilder', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'beginTransaction', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getCache', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'transactional', array('func' => $func), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'commit', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->commit();
    }

    public function rollback()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'rollback', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getClassMetadata', array('className' => $className), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'createQuery', array('dql' => $dql), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'createNamedQuery', array('name' => $name), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'createQueryBuilder', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'flush', array('entity' => $entity), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'clear', array('entityName' => $entityName), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->clear($entityName);
    }

    public function close()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'close', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->close();
    }

    public function persist($entity)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'persist', array('entity' => $entity), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'remove', array('entity' => $entity), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'detach', array('entity' => $entity), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'merge', array('entity' => $entity), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'contains', array('entity' => $entity), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getEventManager', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getConfiguration', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'isOpen', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getUnitOfWork', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getProxyFactory', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'initializeObject', array('obj' => $obj), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'getFilters', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'isFiltersStateClean', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'hasFilters', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return $this->valueHolderca933->hasFilters();
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

        $instance->initializer4fa0f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderca933) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderca933 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderca933->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, '__get', ['name' => $name], $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        if (isset(self::$publicProperties0c832[$name])) {
            return $this->valueHolderca933->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca933;

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

        $targetObject = $this->valueHolderca933;
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
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca933;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderca933;
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
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, '__isset', array('name' => $name), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca933;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderca933;
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
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, '__unset', array('name' => $name), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca933;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderca933;
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
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, '__clone', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        $this->valueHolderca933 = clone $this->valueHolderca933;
    }

    public function __sleep()
    {
        $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, '__sleep', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;

        return array('valueHolderca933');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4fa0f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4fa0f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4fa0f && ($this->initializer4fa0f->__invoke($valueHolderca933, $this, 'initializeProxy', array(), $this->initializer4fa0f) || 1) && $this->valueHolderca933 = $valueHolderca933;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderca933;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderca933;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
