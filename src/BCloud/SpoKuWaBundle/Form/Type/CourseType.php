<?php
namespace BCloud\SpoKuWaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use BCloud\SpoKuWaBundle\Form\EventListener\CourseSubscriber;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $subscriber = new CourseSubscriber($builder->getFormFactory());
        $builder->addEventSubscriber($subscriber);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BCloud\SpoKuWaBundle\Entity\Course'
        ));
    }

    public function getName()
    {
        return 'course';
    }
}