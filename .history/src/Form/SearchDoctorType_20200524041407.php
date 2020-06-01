<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class SearchDoctorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('profession', TextType::class,[
                'attr' =>[
                    'class' =>'form-control',
                    "placeholder"=>"Entrez le nom de la spécialité",

                    ],
                 'label'=> "Spécialité",
                
            ])
            ->add('distance', RangeType::class, [
                'attr' => [
                    'min' => 0.2,
                    'max' => 10,
                    'class' =>'form-control',
                ]
            ])
            ->add('lat', HiddenType::class, [
                'attr' => [
                    'class' =>'locationLat',
                ]
            ])
            ->add('lon', HiddenType::class, [
                'attr' => [
                    'class' =>'locationLon',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'method'=> 'GET', 
            'crsf_protection'=> false, 
        ]);
    }
}
