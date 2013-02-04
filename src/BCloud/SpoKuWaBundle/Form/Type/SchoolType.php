<?php

namespace BCloud\SpoKuWaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SchoolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('name', 'text', array(
			'max_length' => 255,
			'required' => true,
			'trim' => true,
		));
		$builder->add('type', 'text', array(
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
		$builder->add('province', 'choice', array(
			'choices'   => array(
				'0' => 'Baden-Württemberg',
				'1' => 'Bayer',
				'2' => 'Berlin',
				'3' => 'Brandenburg',
				'4' => 'Bremen',
				'5' => 'Hamburg',
				'6' => 'Hessen',
				'7' => 'Mecklemburg-Vorpommern',
				'8' => 'Niedersachsen',
				'9' => 'Nordrhein-Westfalen',
				'10' => 'Rheinland-Pfalz',
				'11' => 'Saarland',
				'12' => 'Sachsen',
				'13' => 'Sachsen-Anhalt',
				'14' => 'Schleswig-Holstein',
				'15' => 'Thüringen',
			),
			'required'  => true,
			'empty_value' => false,
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
            'data_class' => 'BCloud\SpoKuWaBundle\Entity\School'
        ));
    }

    public function getName()
    {
        return 'school';
    }
}