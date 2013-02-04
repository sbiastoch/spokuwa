<?php

namespace BCloud\SpoKuWaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BCloud\SpoKuWaBundle\Entity\Course;
use BCloud\SpoKuWaBundle\Entity\Coursedata;
use BCloud\SpoKuWaBundle\Form\Type\CoursedataType;
use BCloud\SpoKuWaBundle\Form\Type\CourseAndDataType;
use BCloud\SpoKuWaBundle\Form\Type\CourseType;
use BCloud\SpoKuWaBundle\Form\Model\CourseAndData;

class CourseController extends Controller
{
    public function listAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$user = $this->get('security.context')->getToken()->getUser();
		$client = $em->getRepository('BCloudSpoKuWaBundle:Client')->findOneByUser($user);

		$system = $client->getSystem();
		
		$repository = $this->getDoctrine()->getRepository('BCloudSpoKuWaBundle:Course');
		$courses = $repository->findBySystem($system);
		
        return $this->render('BCloudSpoKuWaBundle:Course:list.html.twig', array(
			'courses' => $courses
		));
    }
	
	public function viewAction($idcourse, $year = 0, $term = 0)
	{
	
		$em = $this->getDoctrine()->getEntityManager();
		$course = $em->getRepository('BCloudSpoKuWaBundle:Course')->find($idcourse);
		
		$coursedatas = $em->getRepository('BCloudSpoKuWaBundle:Coursedata')->findByCourse($course);
		
		foreach($coursedatas as $data) {
			$semesters[] = array(
				'year' => $data->getYear(), 
				'term' => $data->getTerm()
			);
		}
		
		if($year == 0) {
			$year = $semesters[0]['year'];
		}
		if($term == 0) {
			$term = $semesters[0]['term'];
		}

		$data = $em->getRepository('BCloudSpoKuWaBundle:Coursedata')->findOneBy(array(
			'course' => $course,
			'year' => $year,
			'term' => $term
		));
				
        return $this->render('BCloudSpoKuWaBundle:Course:view.html.twig',
			array(
				'course' => $course,
				'semesters' => $semesters,
				'data' => $data));
	}
	
	public function viewChangeAction($idcourse)
	{
		$req = $this->getRequest();
		$str = explode('-', $req->get('semester'));
		$year = $str[0];
		$term = $str[1];
	
		return $response = $this->redirect($this->generateURL('course_view', array(
			'idcourse'  => $idcourse,
			'year' => $year,
			'term' => $term,
		)));
	}
	
	public function createAction()
	{
		$em = $this->getDoctrine()->getEntityManager();

        $form = $this->createForm(
            new CourseAndDataType(),
            new CourseAndData()
        );
		if ($this->getRequest()->getMethod() == 'POST') {
		
			$form->bind($this->getRequest());

			if ($form->isValid()) {
				
				$course = $form->getData()->getCourse();
				$coursedata = $form->getData()->getCoursedata();
				
				$user = $this->get('security.context')->getToken()->getUser();
				$client = $em->getRepository('BCloudSpoKuWaBundle:Client')->findOneByUser($user);

				$system = $client->getSystem();
				
				$course ->setSystem($system);
				
				$coursedata->setCourse($course);
				
				$em->persist($course);
				$em->persist($coursedata);
				
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('notice', 'Your changes were saved!');
				
				return $this->redirect($this->generateUrl('course_list'));
			}
		}
			
        return $this->render(
            'BCloudSpoKuWaBundle:Course:create.html.twig',
            array('form' => $form->createView())
        );
	}
	
	public function editAction($idcourse, $year, $term)
	{
		$em = $this->getDoctrine()->getEntityManager();
		
		$course = $em->getRepository('BCloudSpoKuWaBundle:Course')->find($idcourse);
		$data = $em->getRepository('BCloudSpoKuWaBundle:Coursedata')->findOneBy(array(
			'course' => $course,
			'year' => $year,
			'term' => $term
		));
		
		$form = $this->createForm(
            new CoursedataType(),
            $data
        );
		
		if ($this->getRequest()->getMethod() == 'POST') {
		
			$form->bind($this->getRequest());

			if ($form->isValid()) {
				$em->persist($data);
				$em->flush();
				
				return $this->redirect($this->generateURL('course_view', array(
					'idcourse'  => $idcourse,
					'year' => $data->getYear(),
					'term' => $data->getTerm(),
				)));
			}
		}
			return $this->render(
			'BCloudSpoKuWaBundle:Course:edit.html.twig', array(
				'form' => $form->createView(),
				'course' => $course,
				'data' => $data,
				'action' => 'edit'
		));
	}
	
	public function addSemesterAction($idcourse, $year, $term)
	{
		$em = $this->getDoctrine()->getEntityManager();
		
		$course = $em->getRepository('BCloudSpoKuWaBundle:Course')->find($idcourse);
		$olddata = $em->getRepository('BCloudSpoKuWaBundle:Coursedata')->findOneBy(array(
			'course' => $course,
			'year' => $year,
			'term' => $term
		));
		
		$data = new Coursedata();
		$data	->setTeacher($olddata->getTeacher())
				->setCourse($olddata->getCourse())
				->setDescription($olddata->getDescription())
				->setLessonStart($olddata->getLessonStart())
				->setLessonEnd($olddata->getLessonEnd())
				->setMemberMin($olddata->getMemberMin())
				->setMemberMax($olddata->getMemberMax())
				->setSelectable($olddata->getSelectable())
				->setYear($olddata->getYear())
				->setTerm($olddata->getTerm());
		
//		if($data === null); { return $this->redirect($this->generateURL('course_list')); }
		
		$form = $this->createForm(
            new CoursedataType(),
            $data
        );
		
		if ($this->getRequest()->getMethod() == 'POST') {
		
			$form->bind($this->getRequest());

			if ($form->isValid()) {
				$em->persist($data);
				$em->flush();
				
				return $this->redirect($this->generateURL('course_view', array(
					'idcourse'  => $idcourse,
					'year' => $data->getYear(),
					'term' => $data->getTerm(),
				)));
			}
		}
		return $this->render(
			'BCloudSpoKuWaBundle:Course:edit.html.twig', array(
				'form' => $form->createView(),
				'course' => $course,
				'data' => $data,
				'action' => 'add_semester'
		));
	}
    
    public function searchAction()
    {
        return $this->render('BCloudSpoKuWaBundle:Course:search.html.twig');
    }
}