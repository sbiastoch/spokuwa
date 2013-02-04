<?php

namespace BCloud\SpoKuWaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use BCloud\SpoKuWaBundle\Form\Type\RegistrationType;
use BCloud\SpoKuWaBundle\Form\Model\Registration;

use BCloud\SpoKuWaBundle\Entity\Client;
use BCloud\SpoKuWaBundle\Entity\School;
use BCloud\SpoKuWaBundle\Entity\Address;
use BCloud\SpoKuWaBundle\Entity\System;
use BCloud\SpoKuWaBundle\Entity\User;

class ClientController extends Controller
{
    public function registerAction()
    {
        $form = $this->createForm(
            new RegistrationType(),
            new Registration()
        );
		
        return $this->render(
            'BCloudSpoKuWaBundle:Client:register.html.twig',
            array('form' => $form->createView())
        );
    }
	
	public function createAction()
	{
		$em = $this->getDoctrine()->getEntityManager();

		$form = $this->createForm(new RegistrationType(), new Registration());

		$form->bind($this->getRequest());

		if ($form->isValid()) {
			
			$system = new System();
			$address = $form->getData()->getAddress();
			$school = $form->getData()->getSchool();
			$client = $form->getData()->getClient();
			$user = $form->getData()->getUser();
			
			$em->persist($address);
			$em->persist($school);
			$em->persist($system);
			$em->persist($user);
			$em->persist($client);
			
			$factory = $this->get('security.encoder_factory');

			$encoder = $factory->getEncoder($user);
			$password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
			$user->setPassword($password);
            $user->setType(User::ROLE_CLIENT);
			
			$system	->setName('Sportkurswahlen des '.$school->getName())
					->setCurrentSemester(date('yyyy'));
			
			
			$client ->setSystem($system)
					->setAddress($address)
					->setSchool($school)
					->setUser($user);
			
			$em->flush();
			
			$this->get('session')->getFlashBag()->add('notice', 'Your changes were saved!');
			
			return $this->redirect($this->generateUrl('register'));
		} else {
			
		}
		
		return $this->render(
			'BCloudSpoKuWaBundle:Client:register.html.twig',
			array('form' => $form->createView())
		);
	}
	
    public function listAction()
    {
		$repository = $this->getDoctrine()->getRepository('BCloudSpoKuWaBundle:Client');
		$clients = $repository->findAll();
		
		if (!$clients) {
			throw $this->createNotFoundException('Keine Kunden gefunden!');
		}
		/*
		foreach($clients as &$client) {
			$client->setSchoolschool($client->getSchoolschool());
		}
		*/
        return $this->render('BCloudSpoKuWaBundle:client:list.html.twig',
			array(
				'clients' => $clients));
    }
}