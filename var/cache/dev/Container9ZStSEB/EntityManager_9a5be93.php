<?php

namespace Container9ZStSEB;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4d4dc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3c61c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties59b47 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getConnection', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getMetadataFactory', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getExpressionBuilder', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'beginTransaction', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getCache', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'transactional', array('func' => $func), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->transactional($func);
    }

    public function commit()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'commit', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->commit();
    }

    public function rollback()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'rollback', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getClassMetadata', array('className' => $className), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'createQuery', array('dql' => $dql), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'createNamedQuery', array('name' => $name), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'createQueryBuilder', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'flush', array('entity' => $entity), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'clear', array('entityName' => $entityName), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->clear($entityName);
    }

    public function close()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'close', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->close();
    }

    public function persist($entity)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'persist', array('entity' => $entity), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'remove', array('entity' => $entity), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'refresh', array('entity' => $entity), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'detach', array('entity' => $entity), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'merge', array('entity' => $entity), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'contains', array('entity' => $entity), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getEventManager', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getConfiguration', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'isOpen', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getUnitOfWork', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getProxyFactory', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'initializeObject', array('obj' => $obj), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'getFilters', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'isFiltersStateClean', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'hasFilters', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return $this->valueHolder4d4dc->hasFilters();
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

        $instance->initializer3c61c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4d4dc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4d4dc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4d4dc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, '__get', ['name' => $name], $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        if (isset(self::$publicProperties59b47[$name])) {
            return $this->valueHolder4d4dc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d4dc;

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

        $targetObject = $this->valueHolder4d4dc;
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
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d4dc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4d4dc;
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
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, '__isset', array('name' => $name), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d4dc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4d4dc;
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
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, '__unset', array('name' => $name), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d4dc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4d4dc;
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
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, '__clone', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        $this->valueHolder4d4dc = clone $this->valueHolder4d4dc;
    }

    public function __sleep()
    {
        $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, '__sleep', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;

        return array('valueHolder4d4dc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3c61c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3c61c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3c61c && ($this->initializer3c61c->__invoke($valueHolder4d4dc, $this, 'initializeProxy', array(), $this->initializer3c61c) || 1) && $this->valueHolder4d4dc = $valueHolder4d4dc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4d4dc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4d4dc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
