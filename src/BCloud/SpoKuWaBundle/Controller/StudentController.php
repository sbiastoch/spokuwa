<?php

namespace BCloud\SpoKuWaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BCloud\SpoKuWaBundle\Form\Type\StudentType;
use BCloud\SpoKuWaBundle\Entity\Student;
use BCloud\SpoKuWaBundle\Entity\User;

class StudentController extends Controller
{
    public function listAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$user = $this->get('security.context')->getToken()->getUser();
		$client = $em->getRepository('BCloudSpoKuWaBundle:Client')->findOneByUser($user);
		$system = $client->getSystem();
		
		$repository = $this->getDoctrine()->getRepository('BCloudSpoKuWaBundle:Student');
		$students = $repository->findBySystem($system);
				
        return $this->render('BCloudSpoKuWaBundle:Student:list.html.twig',
			array(
				'students' => $students));
    }
	
	public function viewAction($idstudent)
	{
		$student = $this->getDoctrine()->getRepository('BCloudSpoKuWaBundle:Student')->find($idstudent);
		
        return $this->render('BCloudSpoKuWaBundle:Student:view.html.twig',
			array(
				'student' => $student));
	}
	
	public function createAction()
	{		
        $em = $this->getDoctrine()->getEntityManager();
		$user = $this->get('security.context')->getToken()->getUser();
		$client = $em->getRepository('BCloudSpoKuWaBundle:Client')->findOneByUser($user);
		$system = $client->getSystem();
        
		$form = $this->createForm(new StudentType(), new Student());
        
        if ($this->getRequest()->getMethod() == 'POST') {
        
            $form->bind($this->getRequest());

            if ($form->isValid()) {

                $student = $form->getData();
                $student->setSystem($system);
                $user = $student->getUser();
                $user->setType(User::ROLE_STUDENT);
                $em->persist($student);
                $em->persist($user);
  
                $factory = $this->get('security.encoder_factory');

                $encoder = $factory->getEncoder($user);
                $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
                $user->setPassword($password);

                $em->flush();

                return $this->redirect($this->generateUrl('student_view', array('idstudent' => $student->getId())));
            }
        }
		return $this->render(
			'BCloudSpoKuWaBundle:Student:create.html.twig',
			array('form' => $form->createView())
		);
	}
    
    public function choicesAction()
    {
		return $this->render('BCloudSpoKuWaBundle:Student:choices.html.twig');
    }
    
    public function byebyeAction()
    {
		return $this->render('BCloudSpoKuWaBundle:Student:byebye.html.twig');
    }
}
