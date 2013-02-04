<?php

namespace BCloud\SpoKuWaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('tutor', 'text', array(
			'max_length' => 255,
		));
		$builder->add('f_name', 'text', array(
			'max_length' => 255,
			'required' => true,
		));
		$builder->add('l_name', 'text', array(
			'max_length' => 255,
			'required' => true,
		));
        
		$builder->add('user', new UserType());
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BCloud\SpoKuWaBundle\Entity\Student'
        ));
    }

    public function getName()
    {
        return 'student';
    }
}