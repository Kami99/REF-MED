<?php

namespace App\Form;

use App\Entity\Appointment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('beginAt')
            ->add('endAt')
            ->add('title', TextType::class)
            ->add('name', TextType::class)
            ->add('tel', TelType::class)
            ->add('appointmentType', EntityType::class,[
                'class'=> AppointmentType::class,
                'label'=>'Type de rendez vous',
                'attr'=>[
                    'class'
                ]
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
