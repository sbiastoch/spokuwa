<?php

namespace BCloud\SpoKuWaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BCloud\SpoKuWaBundle\Entity\Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="BCloud\SpoKuWaBundle\Repository\Course")
 */
class Course
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var boolean $scope
     *
     * @ORM\Column(name="scope", type="boolean", nullable=false)
     */
    private $scope;

    /**
     * @var System
     *
     * @ORM\ManyToOne(targetEntity="System", inversedBy="courses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_id", referencedColumnName="id")
     * })
     */
    private $system;


    /**
     * @ORM\OneToMany(targetEntity="Coursedata", mappedBy="course")
     */
    protected $coursedatas;

    /**
     * @ORM\OneToMany(targetEntity="Choice", mappedBy="course")
     */
    protected $choices;

    public function __construct()
    {
        $this->coursedatas = new ArrayCollection();
        $this->choices = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Course
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set scope
     *
     * @param boolean $scope
     * @return Course
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    
        return $this;
    }

    /**
     * Get scope
     *
     * @return boolean 
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set system
     *
     * @param BCloud\SpoKuWaBundle\Entity\System $system
     * @return Course
     */
    public function setSystem(\BCloud\SpoKuWaBundle\Entity\System $system = null)
    {
        $this->system = $system;
    
        return $this;
    }

    /**
     * Get system
     *
     * @return BCloud\SpoKuWaBundle\Entity\System 
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Add coursedatas
     *
     * @param BCloud\SpoKuWaBundle\Entity\Coursedata $coursedatas
     * @return Course
     */
    public function addCoursedata(\BCloud\SpoKuWaBundle\Entity\Coursedata $coursedatas)
    {
        $this->coursedatas[] = $coursedatas;
    
        return $this;
    }

    /**
     * Remove coursedatas
     *
     * @param BCloud\SpoKuWaBundle\Entity\Coursedata $coursedatas
     */
    public function removeCoursedata(\BCloud\SpoKuWaBundle\Entity\Coursedata $coursedatas)
    {
        $this->coursedatas->removeElement($coursedatas);
    }

    /**
     * Get coursedatas
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCoursedatas()
    {
        return $this->coursedatas;
    }

    /**
     * Add choices
     *
     * @param BCloud\SpoKuWaBundle\Entity\Choice $choices
     * @return Course
     */
    public function addChoice(\BCloud\SpoKuWaBundle\Entity\Choice $choices)
    {
        $this->choices[] = $choices;
    
        return $this;
    }

    /**
     * Remove choices
     *
     * @param BCloud\SpoKuWaBundle\Entity\Choice $choices
     */
    public function removeChoice(\BCloud\SpoKuWaBundle\Entity\Choice $choices)
    {
        $this->choices->removeElement($choices);
    }

    /**
     * Get choices
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getChoices()
    {
        return $this->choices;
    }
}