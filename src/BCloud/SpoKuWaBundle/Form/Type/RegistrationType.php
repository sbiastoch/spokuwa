<?php

namespace BCloud\SpoKuWaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('client', new ClientType());
        $builder->add('address', new AddressType());
        $builder->add('school', new SchoolType());
		$builder->add('user', new UserType());
        $builder->add('terms', 'checkbox', array(
			'property_path' => false,
			'label' => 'AGBs gelesen und akzeptiert?'
		));
    }

    public function getName()
    {
        return 'registration';
    }
}