<?php

namespace App\Form;

use App\Entity\Appointment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use App\Entity\AppointmentType as EntityAppointmentType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('beginAt',DateTimeType::class,[
                'label'=>'Date du rendez vous',
                'attr'=>[
            
                ]
        ])
            ->add('endAt',DateTimeType::class,[
                'label'=>'fin du rendez vous',
                'attr'=>[
                  
                ]
        ])
            ->add('name', TextType::class,[
                'label'=>'Votre nom et Prenom',
                'attr'=>[
                    'class'=>'form-control-appoint',
                ]
        ])
            ->add('tel', TelType::class,[
                'label'=>'Votre numero de tel',
                'attr'=>[
                    'class'=>'form-control-appoint',
                ]
        ])
            ->add('appointmentType', EntityType::class,[
                'class'=> EntityAppointmentType::class,
                'label'=>'Type de rendez vous',
                'attr'=>[
                    'class'=>'form',
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
