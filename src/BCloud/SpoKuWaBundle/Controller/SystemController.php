<?php

namespace BCloud\SpoKuWaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BCloud\SpoKuWaBundle\Form\Type\SystemType;

class SystemController extends Controller
{
    public function summaryAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
        
        $totalUsers = $em   ->getRepository('BCloudSpoKuWaBundle:User')
                            ->createQueryBuilder('user')
                            ->select('COUNT(user)')
                            ->getQuery()
                            ->getSingleScalarResult();
        
        $totalCourses = $em ->getRepository('BCloudSpoKuWaBundle:Course')
                            ->createQueryBuilder('course')
                            ->select('COUNT(course)')
                            ->getQuery()
                            ->getSingleScalarResult();
        
        $studentsWithoutCourses = "#";
                
        return $this->render('BCloudSpoKuWaBundle:System:summary.html.twig', array(
            'totalUsers' => $totalUsers,
            'totalCourses' => $totalCourses,
            'studentsWithoutCourses' => $studentsWithoutCourses,
        ));
    }
	
    public function configAction()
    {	
        $em = $this->getDoctrine()->getEntityManager();
		
		$user = $this->get('security.context')->getToken()->getUser();
		$client = $em->getRepository('BCloudSpoKuWaBundle:Client')->findOneByUser($user);
        $system = $client->getSystem();
        
		$form = $this->createForm(
            new SystemType(),
            $system
        );
		
		if ($this->getRequest()->getMethod() == 'POST') {
		
			$form->bind($this->getRequest());

			if ($form->isValid()) {
                
				$em->persist($system);
				$em->flush();
				
				return $this->redirect($this->generateURL('system_config'));
			}
		}
		return $this->render('BCloudSpoKuWaBundle:System:config.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
