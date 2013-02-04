<?php

namespace BCloud\SpoKuWaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoursedataType extends AbstractType
{
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('year', 'integer', array(
			'required'  => true,
//			'data' => date('Y')
        ));
		
		$numTerms = 2;
		$terms = array_combine(range(1, $numTerms), range(1, $numTerms));
		foreach($terms as $k => &$v) $v .= ". Semester";
		
		$builder->add('term', 'choice', array(
			'choices'   => $terms,
			'required'  => true,
			'empty_value' => false,
		));
		$builder->add('teacher', 'text', array(
			'max_length' => 255,
			'required' => true,
			'trim' => true,
		));
		$builder->add('description', 'textarea', array(
			'max_length' => 255,
			'required' => true,
			'trim' => true,
		));
		$builder->add('lesson_start', 'choice', array(
			'choices'   => array(
				'1' => '1. Stunde',
				'2' => '2. Stunde',
				'3' => '3. Stunde',
				'4' => '4. Stunde',
				'5' => '5. Stunde',
				'6' => '6. Stunde',
				'7' => '7. Stunde',
				'8' => '8. Stunde',
				'9' => '9. Stunde',
				'10' => '10. Stunde',
				'11' => '11. Stunde',
				'12' => '12. Stunde',
				'13' => '13. Stunde',
				'14' => '14. Stunde',
				'15' => '15. Stunde',
				'16' => '16. Stunde',
				'17' => '17. Stunde',
				'18' => '18. Stunde',
				'19' => '19. Stunde',
				'20' => '20. Stunde',
				'21' => '21. Stunde',
				'22' => '22. Stunde',
				'23' => '23. Stunde',
			),
			'required'  => true,
		));
		$builder->add('lesson_end', 'choice', array(
			'choices'   => array(
				'1' => '1. Stunde',
				'2' => '2. Stunde',
				'3' => '3. Stunde',
				'4' => '4. Stunde',
				'5' => '5. Stunde',
				'6' => '6. Stunde',
				'7' => '7. Stunde',
				'8' => '8. Stunde',
				'9' => '9. Stunde',
				'10' => '10. Stunde',
				'11' => '11. Stunde',
				'12' => '12. Stunde',
				'13' => '13. Stunde',
				'14' => '14. Stunde',
				'15' => '15. Stunde',
				'16' => '16. Stunde',
				'17' => '17. Stunde',
				'18' => '18. Stunde',
				'19' => '19. Stunde',
				'20' => '20. Stunde',
				'21' => '21. Stunde',
				'22' => '22. Stunde',
				'23' => '23. Stunde',
			),
			'required'  => true,
		));
		$builder->add('member_min', 'integer', array(
			'required' => false,
		));
		$builder->add('member_max', 'integer', array(
			'required' => true,
		));
        $builder->add('selectable', 'checkbox', array(
			'label' => 'Wählbar?',
			'required' => false,
		));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BCloud\SpoKuWaBundle\Entity\Coursedata'
        ));
    }

    public function getName()
    {
        return 'coursedata';
    }
}