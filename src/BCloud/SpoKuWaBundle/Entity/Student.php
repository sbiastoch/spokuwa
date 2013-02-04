<?php

namespace BCloud\SpoKuWaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BCloud\SpoKuWaBundle\Entity\Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity
 */
class Student
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
     * @var string $fName
     *
     * @ORM\Column(name="f_name", type="string", length=200, nullable=false)
     */
    private $fName;

    /**
     * @var string $lName
     *
     * @ORM\Column(name="l_name", type="string", length=45, nullable=false)
     */
    private $lName;

    /**
     * @var string $tutor
     *
     * @ORM\Column(name="tutor", type="string", length=255, nullable=true)
     */
    private $tutor;

    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime $lastChanged
     *
     * @ORM\Column(name="last_changed", type="datetime", nullable=false)
     */
    private $lastChanged;

    /**
     * @var System
     *
     * @ORM\ManyToOne(targetEntity="System", inversedBy="students")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_id", referencedColumnName="id")
     * })
     */
    private $system;

    /**
     * @var User
     *
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="Coursedata", mappedBy="members")
     **/
    private $courses;

    /**
     * @ORM\OneToMany(targetEntity="Choice", mappedBy="student")
     **/
    private $choices;

    public function __construct() {
        $this->choices = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fName
     *
     * @param string $fName
     * @return Student
     */
    public function setFName($fName)
    {
        $this->fName = $fName;
    
        return $this;
    }

    /**
     * Get fName
     *
     * @return string 
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * Set lName
     *
     * @param string $lName
     * @return Student
     */
    public function setLName($lName)
    {
        $this->lName = $lName;
    
        return $this;
    }

    /**
     * Get lName
     *
     * @return string 
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Student
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set lastChanged
     *
     * @param \DateTime $lastChanged
     * @return Student
     */
    public function setLastChanged($lastChanged)
    {
        $this->lastChanged = $lastChanged;
    
        return $this;
    }

    /**
     * Get lastChanged
     *
     * @return \DateTime 
     */
    public function getLastChanged()
    {
        return $this->lastChanged;
    }

    /**
     * Set tutor
     *
     * @param string $tutor
     * @return Student
     */
    public function setTutor($tutor)
    {
        $this->tutor = $tutor;
    
        return $this;
    }

    /**
     * Get tutor
     *
     * @return string
     */
    public function getTutor()
    {
        return $this->tutor;
    }

    /**
     * Set system
     *
     * @param BCloud\SpoKuWaBundle\Entity\System $system
     * @return Student
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
     * Set user
     *
     * @param BCloud\SpoKuWaBundle\Entity\User $user
     * @return Student
     */
    public function setUser(\BCloud\SpoKuWaBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return BCloud\SpoKuWaBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add courses
     *
     * @param BCloud\SpoKuWaBundle\Entity\Coursedata $courses
     * @return Student
     */
    public function addCourse(\BCloud\SpoKuWaBundle\Entity\Coursedata $courses)
    {
        $this->courses[] = $courses;
    
        return $this;
    }

    /**
     * Remove courses
     *
     * @param BCloud\SpoKuWaBundle\Entity\Coursedata $courses
     */
    public function removeCourse(\BCloud\SpoKuWaBundle\Entity\Coursedata $courses)
    {
        $this->courses->removeElement($courses);
    }

    /**
     * Get courses
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * Add choices
     *
     * @param BCloud\SpoKuWaBundle\Entity\Choice $choices
     * @return Student
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