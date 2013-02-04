<?php
namespace BCloud\SpoKuWaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use BCloud\SpoKuWaBundle\Entity\System;

class SystemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('name', 'text', array(
			'max_length' => 255,
			'required' => true,
			'trim' => true,
		));
        $builder->add('state', 'choice', array(
			'choices'   => array(
                System::STATE_DEACTIVATED => 'Für alle Gesperrt',
                System::STATE_PREPARATION => 'Wahlen werden vorbereitet',
                System::STATE_SELECTION => 'Schüler wählen',
                System::STATE_COMPLETED => 'Wahlen abgeschlossen',
            ),
			'empty_value' => false,
		));
		$builder->add('selection_start', 'datetime', array(
			'required' => true,
			'with_seconds' => false,
		));
		$builder->add('selection_end', 'datetime', array(
			'required' => true,
			'with_seconds' => false,
		));
		$builder->add('current_year', 'number', array(
			'required' => true,
		));
		$builder->add('current_term', 'choice', array(
			'choices' => array(
                '1' => '1. Semester',
                '2' => '2. Semester',
            ),
            'empty_value' => false,
		));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BCloud\SpoKuWaBundle\Entity\System'
        ));
    }

    public function getName()
    {
        return 'system';
    }
}