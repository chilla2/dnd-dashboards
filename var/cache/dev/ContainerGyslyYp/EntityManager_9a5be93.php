<?php

namespace ContainerGyslyYp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd4f41 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd923 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9028a = [
        
    ];

    public function getConnection()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getConnection', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getMetadataFactory', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getExpressionBuilder', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'beginTransaction', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getCache', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'transactional', array('func' => $func), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->transactional($func);
    }

    public function commit()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'commit', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->commit();
    }

    public function rollback()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'rollback', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getClassMetadata', array('className' => $className), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'createQuery', array('dql' => $dql), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'createNamedQuery', array('name' => $name), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'createQueryBuilder', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'flush', array('entity' => $entity), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'clear', array('entityName' => $entityName), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->clear($entityName);
    }

    public function close()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'close', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->close();
    }

    public function persist($entity)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'persist', array('entity' => $entity), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'remove', array('entity' => $entity), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'refresh', array('entity' => $entity), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'detach', array('entity' => $entity), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'merge', array('entity' => $entity), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'contains', array('entity' => $entity), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getEventManager', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getConfiguration', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'isOpen', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getUnitOfWork', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getProxyFactory', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'initializeObject', array('obj' => $obj), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'getFilters', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'isFiltersStateClean', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'hasFilters', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return $this->valueHolderd4f41->hasFilters();
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

        $instance->initializerdd923 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd4f41) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd4f41 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd4f41->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, '__get', ['name' => $name], $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        if (isset(self::$publicProperties9028a[$name])) {
            return $this->valueHolderd4f41->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4f41;

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

        $targetObject = $this->valueHolderd4f41;
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
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4f41;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd4f41;
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
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, '__isset', array('name' => $name), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4f41;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd4f41;
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
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, '__unset', array('name' => $name), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4f41;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd4f41;
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
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, '__clone', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        $this->valueHolderd4f41 = clone $this->valueHolderd4f41;
    }

    public function __sleep()
    {
        $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, '__sleep', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;

        return array('valueHolderd4f41');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdd923 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdd923;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdd923 && ($this->initializerdd923->__invoke($valueHolderd4f41, $this, 'initializeProxy', array(), $this->initializerdd923) || 1) && $this->valueHolderd4f41 = $valueHolderd4f41;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd4f41;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd4f41;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
