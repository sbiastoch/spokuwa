<?php
namespace BCloud\SpoKuWaBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CourseSubscriber implements EventSubscriberInterface
{
    private $factory;

    public function __construct(FormFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public static function getSubscribedEvents()
    {
        return array(FormEvents::POST_SET_DATA => 'postSetData');
    }

    public function postSetData(FormEvent $event)	
    {
        $data = $event->getData();
        $form = $event->getForm();
		
        if (null === $data) {
        /*    return;
        }
		
        if (!$data->getId()) {
      */  
			$form->add($this->factory->createNamed('name', 'text', null, array(
				'max_length' => 255,
				'required' => true,
				'trim' => true,
			)));
			$form->add($this->factory->createNamed('scope', 'choice', null, array(
				'choices'   => array('0' => 'A', '1' => 'B'),
				'required'  => true,
			)));
        }
    }
}