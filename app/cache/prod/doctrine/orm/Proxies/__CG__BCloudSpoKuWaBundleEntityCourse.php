<?php

namespace Proxies\__CG__\BCloud\SpoKuWaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Course extends \BCloud\SpoKuWaBundle\Entity\Course implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setScope($scope)
    {
        $this->__load();
        return parent::setScope($scope);
    }

    public function getScope()
    {
        $this->__load();
        return parent::getScope();
    }

    public function setSystem(\BCloud\SpoKuWaBundle\Entity\System $system = NULL)
    {
        $this->__load();
        return parent::setSystem($system);
    }

    public function getSystem()
    {
        $this->__load();
        return parent::getSystem();
    }

    public function addCoursedata(\BCloud\SpoKuWaBundle\Entity\Coursedata $coursedatas)
    {
        $this->__load();
        return parent::addCoursedata($coursedatas);
    }

    public function removeCoursedata(\BCloud\SpoKuWaBundle\Entity\Coursedata $coursedatas)
    {
        $this->__load();
        return parent::removeCoursedata($coursedatas);
    }

    public function getCoursedatas()
    {
        $this->__load();
        return parent::getCoursedatas();
    }

    public function addChoice(\BCloud\SpoKuWaBundle\Entity\Choice $choices)
    {
        $this->__load();
        return parent::addChoice($choices);
    }

    public function removeChoice(\BCloud\SpoKuWaBundle\Entity\Choice $choices)
    {
        $this->__load();
        return parent::removeChoice($choices);
    }

    public function getChoices()
    {
        $this->__load();
        return parent::getChoices();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'scope', 'system', 'coursedatas', 'choices');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}