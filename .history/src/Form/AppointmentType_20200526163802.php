<?php

namespace App\Form;

use App\Entity\Appointment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('beginAt')
            ->add('endAt')
            ->add('daysOfWeek')
            ->add('title')
            ->add('isConfirmed')
            ->add('name')
            ->add('tel')
            ->add('appointmentType')
            ->add('doctors', EntityType::class,[
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
