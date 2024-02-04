<?php

namespace ContainerUGaYAYn;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3bb93 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer95404 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties85df0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getConnection', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getMetadataFactory', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getExpressionBuilder', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'beginTransaction', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getCache', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getCache();
    }

    public function transactional($func)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'transactional', array('func' => $func), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'wrapInTransaction', array('func' => $func), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'commit', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->commit();
    }

    public function rollback()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'rollback', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getClassMetadata', array('className' => $className), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'createQuery', array('dql' => $dql), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'createNamedQuery', array('name' => $name), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'createQueryBuilder', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'flush', array('entity' => $entity), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'clear', array('entityName' => $entityName), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->clear($entityName);
    }

    public function close()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'close', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->close();
    }

    public function persist($entity)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'persist', array('entity' => $entity), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'remove', array('entity' => $entity), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'detach', array('entity' => $entity), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'merge', array('entity' => $entity), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getRepository', array('entityName' => $entityName), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'contains', array('entity' => $entity), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getEventManager', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getConfiguration', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'isOpen', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getUnitOfWork', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getProxyFactory', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'initializeObject', array('obj' => $obj), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'getFilters', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'isFiltersStateClean', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'hasFilters', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return $this->valueHolder3bb93->hasFilters();
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

        $instance->initializer95404 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder3bb93) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3bb93 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3bb93->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, '__get', ['name' => $name], $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        if (isset(self::$publicProperties85df0[$name])) {
            return $this->valueHolder3bb93->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bb93;

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

        $targetObject = $this->valueHolder3bb93;
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
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bb93;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3bb93;
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
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, '__isset', array('name' => $name), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bb93;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3bb93;
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
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, '__unset', array('name' => $name), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bb93;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3bb93;
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
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, '__clone', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        $this->valueHolder3bb93 = clone $this->valueHolder3bb93;
    }

    public function __sleep()
    {
        $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, '__sleep', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;

        return array('valueHolder3bb93');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer95404 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer95404;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer95404 && ($this->initializer95404->__invoke($valueHolder3bb93, $this, 'initializeProxy', array(), $this->initializer95404) || 1) && $this->valueHolder3bb93 = $valueHolder3bb93;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3bb93;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3bb93;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
