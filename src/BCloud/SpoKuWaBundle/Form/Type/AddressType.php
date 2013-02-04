<?php

namespace BCloud\SpoKuWaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('sex', 'choice', array(
			'choices'   => array('0' => 'Herr', '1' => 'Frau'),
			'required'  => false,
			'empty_value' => false,
		));
		$builder->add('f_name', 'text', array(
			'max_length' => 255,
			'required' => true,
			'trim' => true,
		));
		$builder->add('l_name', 'text', array(
			'max_length' => 255,
			'required' => true,
			'trim' => true,
		));
		$builder->add('mail', 'email', array(
			'max_length' => 255,
			'required' => true,
			'trim' => true,
		));
		$builder->add('street', 'text', array(
			'max_length' => 255,
			'required' => true,
			'trim' => true,
		));
		$builder->add('zip', 'text', array(
			'max_length' => 6,
			'required' => true,
			'trim' => true,
		));
		$builder->add('city', 'text', array(
			'max_length' => 255,
			'required' => true,
			'trim' => true,
		));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BCloud\SpoKuWaBundle\Entity\Address'
        ));
    }

    public function getName()
    {
        return 'address';
    }
}