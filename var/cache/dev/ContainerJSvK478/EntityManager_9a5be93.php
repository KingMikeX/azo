<?php

namespace ContainerJSvK478;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf7d73 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6f9f5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdd67c = [
        
    ];

    public function getConnection()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getConnection', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getMetadataFactory', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getExpressionBuilder', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'beginTransaction', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getCache', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'transactional', array('func' => $func), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'commit', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->commit();
    }

    public function rollback()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'rollback', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getClassMetadata', array('className' => $className), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'createQuery', array('dql' => $dql), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'createNamedQuery', array('name' => $name), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'createQueryBuilder', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'flush', array('entity' => $entity), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'clear', array('entityName' => $entityName), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->clear($entityName);
    }

    public function close()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'close', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->close();
    }

    public function persist($entity)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'persist', array('entity' => $entity), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'remove', array('entity' => $entity), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'refresh', array('entity' => $entity), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'detach', array('entity' => $entity), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'merge', array('entity' => $entity), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'contains', array('entity' => $entity), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getEventManager', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getConfiguration', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'isOpen', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getUnitOfWork', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getProxyFactory', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'initializeObject', array('obj' => $obj), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'getFilters', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'isFiltersStateClean', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'hasFilters', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return $this->valueHolderf7d73->hasFilters();
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

        $instance->initializer6f9f5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf7d73) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf7d73 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf7d73->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, '__get', ['name' => $name], $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        if (isset(self::$publicPropertiesdd67c[$name])) {
            return $this->valueHolderf7d73->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7d73;

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

        $targetObject = $this->valueHolderf7d73;
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
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7d73;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf7d73;
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
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, '__isset', array('name' => $name), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7d73;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf7d73;
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
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, '__unset', array('name' => $name), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7d73;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf7d73;
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
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, '__clone', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        $this->valueHolderf7d73 = clone $this->valueHolderf7d73;
    }

    public function __sleep()
    {
        $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, '__sleep', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;

        return array('valueHolderf7d73');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6f9f5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6f9f5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6f9f5 && ($this->initializer6f9f5->__invoke($valueHolderf7d73, $this, 'initializeProxy', array(), $this->initializer6f9f5) || 1) && $this->valueHolderf7d73 = $valueHolderf7d73;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf7d73;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf7d73;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
