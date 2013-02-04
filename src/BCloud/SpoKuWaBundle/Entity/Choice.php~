<?php

namespace BCloud\SpoKuWaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BCloud\SpoKuWaBundle\Entity\Choice
 *
 * @ORM\Table(name="choice")
 * @ORM\Entity
 */
class Choice
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
     * @var integer $priority
     *
     * @ORM\Column(name="priority", type="smallint", nullable=false)
     */
    private $priority;

    /**
     * @var \DateTime $lastChanged
     *
     * @ORM\Column(name="last_changed", type="datetime", nullable=false)
     */
    private $lastChanged;

    /**
     * @var Course
     *
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="choices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     * })
     */
    private $course;

    /**
     * @var Student
     *
     * @ORM\ManyToOne(targetEntity="Student", inversedBy="choices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="student_id", referencedColumnName="id")
     * })
     */
    private $student;



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
     * Set priority
     *
     * @param integer $priority
     * @return Choice
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    
        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set lastChanged
     *
     * @param \DateTime $lastChanged
     * @return Choice
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
     * Set course
     *
     * @param BCloud\SpoKuWaBundle\Entity\Course $course
     * @return Choice
     */
    public function setCourse(\BCloud\SpoKuWaBundle\Entity\Course $course = null)
    {
        $this->course = $course;
    
        return $this;
    }

    /**
     * Get course
     *
     * @return BCloud\SpoKuWaBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set student
     *
     * @param BCloud\SpoKuWaBundle\Entity\Student $student
     * @return Choice
     */
    public function setStudent(\BCloud\SpoKuWaBundle\Entity\Student $student = null)
    {
        $this->student = $student;
    
        return $this;
    }

    /**
     * Get student
     *
     * @return BCloud\SpoKuWaBundle\Entity\Student 
     */
    public function getStudent()
    {
        return $this->student;
    }
}