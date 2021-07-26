<?php

namespace ContainerF7A7PFD;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder28e08 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera38cc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9eb0f = [
        
    ];

    public function getConnection()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getConnection', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getMetadataFactory', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getExpressionBuilder', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'beginTransaction', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getCache', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getCache();
    }

    public function transactional($func)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'transactional', array('func' => $func), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->transactional($func);
    }

    public function commit()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'commit', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->commit();
    }

    public function rollback()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'rollback', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getClassMetadata', array('className' => $className), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'createQuery', array('dql' => $dql), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'createNamedQuery', array('name' => $name), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'createQueryBuilder', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'flush', array('entity' => $entity), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'clear', array('entityName' => $entityName), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->clear($entityName);
    }

    public function close()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'close', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->close();
    }

    public function persist($entity)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'persist', array('entity' => $entity), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'remove', array('entity' => $entity), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'refresh', array('entity' => $entity), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'detach', array('entity' => $entity), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'merge', array('entity' => $entity), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getRepository', array('entityName' => $entityName), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'contains', array('entity' => $entity), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getEventManager', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getConfiguration', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'isOpen', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getUnitOfWork', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getProxyFactory', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'initializeObject', array('obj' => $obj), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'getFilters', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'isFiltersStateClean', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'hasFilters', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return $this->valueHolder28e08->hasFilters();
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

        $instance->initializera38cc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder28e08) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder28e08 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder28e08->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, '__get', ['name' => $name], $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        if (isset(self::$publicProperties9eb0f[$name])) {
            return $this->valueHolder28e08->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28e08;

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

        $targetObject = $this->valueHolder28e08;
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
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28e08;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder28e08;
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
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, '__isset', array('name' => $name), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28e08;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder28e08;
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
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, '__unset', array('name' => $name), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28e08;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder28e08;
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
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, '__clone', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        $this->valueHolder28e08 = clone $this->valueHolder28e08;
    }

    public function __sleep()
    {
        $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, '__sleep', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;

        return array('valueHolder28e08');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera38cc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera38cc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera38cc && ($this->initializera38cc->__invoke($valueHolder28e08, $this, 'initializeProxy', array(), $this->initializera38cc) || 1) && $this->valueHolder28e08 = $valueHolder28e08;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder28e08;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder28e08;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
