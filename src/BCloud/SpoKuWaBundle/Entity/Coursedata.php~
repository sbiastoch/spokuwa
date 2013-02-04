<?php

namespace BCloud\SpoKuWaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BCloud\SpoKuWaBundle\Entity\Student;

/**
 * BCloud\SpoKuWaBundle\Entity\Coursedata
 *
 * @ORM\Table(name="coursedata")
 * @ORM\Entity
 */
class Coursedata
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
     * @var string $teacher
     *
     * @ORM\Column(name="teacher", type="string", length=255, nullable=true)
     */
    private $teacher;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer $lessonStart
     *
     * @ORM\Column(name="lesson_start", type="smallint", nullable=true)
     */
    private $lessonStart;

    /**
     * @var integer $lessonEnd
     *
     * @ORM\Column(name="lesson_end", type="smallint", nullable=true)
     */
    private $lessonEnd;

    /**
     * @var integer $memberMax
     *
     * @ORM\Column(name="member_max", type="smallint", nullable=false)
     */
    private $memberMax;

    /**
     * @var integer $memberMin
     *
     * @ORM\Column(name="member_min", type="smallint", nullable=true)
     */
    private $memberMin;

    /**
     * @var boolean $selectable
     *
     * @ORM\Column(name="selectable", type="boolean", nullable=false)
     */
    private $selectable;

    /**
     * @var \DateTime $year
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year;

    /**
     * @var integer $term
     *
     * @ORM\Column(name="term", type="smallint", nullable=false)
     */
    private $term;

    /**
     * @var Course
     *
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="coursedatas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     * })
     */
    private $course;
	
	/**
     * @ORM\ManyToMany(targetEntity="Student", inversedBy="coursedata")
     * @ORM\JoinTable(name="member")
     **/
	private $members;

    public function __construct() {
        $this->members = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set teacher
     *
     * @param string $teacher
     * @return Coursedata
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    
        return $this;
    }

    /**
     * Get teacher
     *
     * @return string 
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Coursedata
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set lessonStart
     *
     * @param integer $lessonStart
     * @return Coursedata
     */
    public function setLessonStart($lessonStart)
    {
        $this->lessonStart = $lessonStart;
    
        return $this;
    }

    /**
     * Get lessonStart
     *
     * @return integer 
     */
    public function getLessonStart()
    {
        return $this->lessonStart;
    }

    /**
     * Set lessonEnd
     *
     * @param integer $lessonEnd
     * @return Coursedata
     */
    public function setLessonEnd($lessonEnd)
    {
        $this->lessonEnd = $lessonEnd;
    
        return $this;
    }

    /**
     * Get lessonEnd
     *
     * @return integer 
     */
    public function getLessonEnd()
    {
        return $this->lessonEnd;
    }

    /**
     * Set memberMax
     *
     * @param integer $memberMax
     * @return Coursedata
     */
    public function setMemberMax($memberMax)
    {
        $this->memberMax = $memberMax;
    
        return $this;
    }

    /**
     * Get memberMax
     *
     * @return integer 
     */
    public function getMemberMax()
    {
        return $this->memberMax;
    }

    /**
     * Set memberMin
     *
     * @param integer $memberMin
     * @return Coursedata
     */
    public function setMemberMin($memberMin)
    {
        $this->memberMin = $memberMin;
    
        return $this;
    }

    /**
     * Get memberMin
     *
     * @return integer 
     */
    public function getMemberMin()
    {
        return $this->memberMin;
    }

    /**
     * Set selectable
     *
     * @param boolean $selectable
     * @return Coursedata
     */
    public function setSelectable($selectable)
    {
        $this->selectable = $selectable;
    
        return $this;
    }

    /**
     * Get selectable
     *
     * @return boolean 
     */
    public function getSelectable()
    {
        return $this->selectable;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     * @return Coursedata
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set term
     *
     * @param integer $term
     * @return Coursedata
     */
    public function setTerm($term)
    {
        $this->term = $term;
    
        return $this;
    }

    /**
     * Get term
     *
     * @return integer 
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set course
     *
     * @param BCloud\SpoKuWaBundle\Entity\Course $course
     * @return Coursedata
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
     * Add members
     *
     * @param BCloud\SpoKuWaBundle\Entity\Student $members
     * @return Coursedata
     */
    public function addMember(\BCloud\SpoKuWaBundle\Entity\Student $members)
    {
        $this->members[] = $members;
    
        return $this;
    }

    /**
     * Remove members
     *
     * @param BCloud\SpoKuWaBundle\Entity\Student $members
     */
    public function removeMember(\BCloud\SpoKuWaBundle\Entity\Student $members)
    {
        $this->members->removeElement($members);
    }

    /**
     * Get members
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMembers()
    {
        return $this->members;
    }
}