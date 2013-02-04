<?php

namespace BCloud\SpoKuWaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use BCloud\SpoKuWaBundle\Form\Type\AddressType;
use BCloud\SpoKuWaBundle\Entity\Address;

class AddressController extends Controller
{	
	public function createAction()
	{
		$em = $this->getDoctrine()->getEntityManager();

		$form = $this->createForm(new AddressType(), new Address());

		$form->bind($this->getRequest());

		if ($form->isValid()) {
			$formData = $form->getData();

			$em->persist($formData);
			$em->flush();

			return $this->redirect($this->generateUrl('home'));
		}

		return $this->render(
			'BCloudSpoKuWaBundle:Address:create.html.twig',
			array('form' => $form->createView())
		);
	}
}