<?php

namespace App\Form;

use App\Entity\Appointment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ManageAppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('beginAt', DateTimeType::class,[
                'label'=>'Date du rendez vous',
                "widget"=>"single_text",

        ])
            ->add('daysOfWeek', ChoiceType::class,[
                'choices'=> $this->getDaysOfWeek(),
                'multiple' =>  true,
            ])
            ->add('isConfirmed', ChoiceType::class, [
                'choices' => [
                    'Actif' => '1',
                    'Inactif' => '0',
                ],
                'required' => false
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
    public function getDaysOfWeek()
    {
        # code...
        $days=Appointment::DaysOfWeek;
        $outpout=[];
        foreach ($days as $k => $v) {
            $outpout[$v]=$k;
        }
        return $outpout;
    }
}
