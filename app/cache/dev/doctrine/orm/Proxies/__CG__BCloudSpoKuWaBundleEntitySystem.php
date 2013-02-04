<?php

namespace Proxies\__CG__\BCloud\SpoKuWaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class System extends \BCloud\SpoKuWaBundle\Entity\System implements \Doctrine\ORM\Proxy\Proxy
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

    public function setState($state)
    {
        $this->__load();
        return parent::setState($state);
    }

    public function getState()
    {
        $this->__load();
        return parent::getState();
    }

    public function setSelectionStart($selectionStart)
    {
        $this->__load();
        return parent::setSelectionStart($selectionStart);
    }

    public function getSelectionStart()
    {
        $this->__load();
        return parent::getSelectionStart();
    }

    public function setSelectionEnd($selectionEnd)
    {
        $this->__load();
        return parent::setSelectionEnd($selectionEnd);
    }

    public function getSelectionEnd()
    {
        $this->__load();
        return parent::getSelectionEnd();
    }

    public function setLastChange($lastChange)
    {
        $this->__load();
        return parent::setLastChange($lastChange);
    }

    public function getLastChange()
    {
        $this->__load();
        return parent::getLastChange();
    }

    public function setNumTerms($numTerms)
    {
        $this->__load();
        return parent::setNumTerms($numTerms);
    }

    public function getNumTerms()
    {
        $this->__load();
        return parent::getNumTerms();
    }

    public function addCourse(\BCloud\SpoKuWaBundle\Entity\Course $courses)
    {
        $this->__load();
        return parent::addCourse($courses);
    }

    public function removeCourse(\BCloud\SpoKuWaBundle\Entity\Course $courses)
    {
        $this->__load();
        return parent::removeCourse($courses);
    }

    public function getCourses()
    {
        $this->__load();
        return parent::getCourses();
    }

    public function setCurrentSemester($currentSemester)
    {
        $this->__load();
        return parent::setCurrentSemester($currentSemester);
    }

    public function getCurrentSemester()
    {
        $this->__load();
        return parent::getCurrentSemester();
    }

    public function addStudent(\BCloud\SpoKuWaBundle\Entity\Student $students)
    {
        $this->__load();
        return parent::addStudent($students);
    }

    public function removeStudent(\BCloud\SpoKuWaBundle\Entity\Student $students)
    {
        $this->__load();
        return parent::removeStudent($students);
    }

    public function getStudents()
    {
        $this->__load();
        return parent::getStudents();
    }

    public function setClient(\BCloud\SpoKuWaBundle\Entity\Client $client = NULL)
    {
        $this->__load();
        return parent::setClient($client);
    }

    public function getClient()
    {
        $this->__load();
        return parent::getClient();
    }

    public function setDeactivateStudents($deactivateStudents)
    {
        $this->__load();
        return parent::setDeactivateStudents($deactivateStudents);
    }

    public function getDeactivateStudents()
    {
        $this->__load();
        return parent::getDeactivateStudents();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'state', 'selectionStart', 'selectionEnd', 'lastChange', 'numTerms', 'currentSemester', 'deactivateStudents', 'courses', 'students', 'client');
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