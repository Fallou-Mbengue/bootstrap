<?php

namespace ContainerVI2lSZm;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderea21c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer24d64 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4cea0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getConnection', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getMetadataFactory', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getExpressionBuilder', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'beginTransaction', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getCache', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'transactional', array('func' => $func), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->transactional($func);
    }

    public function commit()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'commit', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->commit();
    }

    public function rollback()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'rollback', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getClassMetadata', array('className' => $className), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'createQuery', array('dql' => $dql), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'createNamedQuery', array('name' => $name), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'createQueryBuilder', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'flush', array('entity' => $entity), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'clear', array('entityName' => $entityName), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->clear($entityName);
    }

    public function close()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'close', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->close();
    }

    public function persist($entity)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'persist', array('entity' => $entity), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'remove', array('entity' => $entity), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'refresh', array('entity' => $entity), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'detach', array('entity' => $entity), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'merge', array('entity' => $entity), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'contains', array('entity' => $entity), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getEventManager', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getConfiguration', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'isOpen', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getUnitOfWork', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getProxyFactory', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'initializeObject', array('obj' => $obj), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'getFilters', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'isFiltersStateClean', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'hasFilters', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return $this->valueHolderea21c->hasFilters();
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

        $instance->initializer24d64 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderea21c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderea21c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderea21c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, '__get', ['name' => $name], $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        if (isset(self::$publicProperties4cea0[$name])) {
            return $this->valueHolderea21c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea21c;

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

        $targetObject = $this->valueHolderea21c;
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
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea21c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderea21c;
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
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, '__isset', array('name' => $name), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea21c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderea21c;
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
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, '__unset', array('name' => $name), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea21c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderea21c;
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
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, '__clone', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        $this->valueHolderea21c = clone $this->valueHolderea21c;
    }

    public function __sleep()
    {
        $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, '__sleep', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;

        return array('valueHolderea21c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer24d64 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer24d64;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer24d64 && ($this->initializer24d64->__invoke($valueHolderea21c, $this, 'initializeProxy', array(), $this->initializer24d64) || 1) && $this->valueHolderea21c = $valueHolderea21c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderea21c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderea21c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
