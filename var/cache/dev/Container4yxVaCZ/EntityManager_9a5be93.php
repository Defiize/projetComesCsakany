<?php

namespace Container4yxVaCZ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb28dc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercd92a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd2969 = [
        
    ];

    public function getConnection()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getConnection', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getMetadataFactory', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getExpressionBuilder', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'beginTransaction', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getCache', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getCache();
    }

    public function transactional($func)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'transactional', array('func' => $func), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'wrapInTransaction', array('func' => $func), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'commit', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->commit();
    }

    public function rollback()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'rollback', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getClassMetadata', array('className' => $className), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'createQuery', array('dql' => $dql), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'createNamedQuery', array('name' => $name), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'createQueryBuilder', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'flush', array('entity' => $entity), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'clear', array('entityName' => $entityName), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->clear($entityName);
    }

    public function close()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'close', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->close();
    }

    public function persist($entity)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'persist', array('entity' => $entity), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'remove', array('entity' => $entity), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'refresh', array('entity' => $entity), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'detach', array('entity' => $entity), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'merge', array('entity' => $entity), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getRepository', array('entityName' => $entityName), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'contains', array('entity' => $entity), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getEventManager', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getConfiguration', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'isOpen', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getUnitOfWork', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getProxyFactory', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'initializeObject', array('obj' => $obj), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'getFilters', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'isFiltersStateClean', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'hasFilters', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return $this->valueHolderb28dc->hasFilters();
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

        $instance->initializercd92a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb28dc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb28dc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb28dc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, '__get', ['name' => $name], $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        if (isset(self::$publicPropertiesd2969[$name])) {
            return $this->valueHolderb28dc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb28dc;

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

        $targetObject = $this->valueHolderb28dc;
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
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb28dc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb28dc;
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
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, '__isset', array('name' => $name), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb28dc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb28dc;
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
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, '__unset', array('name' => $name), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb28dc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb28dc;
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
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, '__clone', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        $this->valueHolderb28dc = clone $this->valueHolderb28dc;
    }

    public function __sleep()
    {
        $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, '__sleep', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;

        return array('valueHolderb28dc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercd92a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercd92a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercd92a && ($this->initializercd92a->__invoke($valueHolderb28dc, $this, 'initializeProxy', array(), $this->initializercd92a) || 1) && $this->valueHolderb28dc = $valueHolderb28dc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb28dc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb28dc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
