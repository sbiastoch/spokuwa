<?php

namespace BCloud\SpoKuWaBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use BCloud\SpoKuWaBundle\Entity\Course;
use BCloud\SpoKuWaBundle\Entity\Coursedata;
use BCloud\SpoKuWaBundle\Entity\Semester;

class CourseAndData
{
    /**
     * @Assert\Type(type="BCloud\SpoKuWaBundle\Entity\Course")
     */
    protected $course;
    /**
     * @Assert\Type(type="BCloud\SpoKuWaBundle\Entity\Coursedata")
     */
    protected $coursedata;

	
    public function setCourse(Course $course)
    {
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }
	
    public function setCoursedata(Coursedata $coursedata)
    {
        $this->coursedata = $coursedata;
    }

    public function getCoursedata()
    {
        return $this->coursedata;
    }
}