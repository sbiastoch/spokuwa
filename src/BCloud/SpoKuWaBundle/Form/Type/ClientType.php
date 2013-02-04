<?php

namespace BCloud\SpoKuWaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('fees', 'choice', array(
			'choices'   => array(
				'100' => 'Jährliche',
				'500' => 'Dauerhaft',
			),
			'required'  => true,
			'empty_value' => false,
		));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BCloud\SpoKuWaBundle\Entity\Client'
        ));
    }

    public function getName()
    {
        return 'client';
    }
}