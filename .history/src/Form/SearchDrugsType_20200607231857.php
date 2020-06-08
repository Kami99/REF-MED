<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class SearchDrugsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' =>'form-control',
                    "placeholder"=>"Entrez le nom du médicament",

                ],
                'label'=> "Nom du médicament",
            ])
            ->add('distance', RangeType::class, [
                'attr' => [
                    'min' => 0,
                    'max' => 5,
                    'class' =>'form-control',
                ]
            ])
            ->add('lat', HiddenType::class, [
                'attr' => [
                    'class' =>'location_lat_pharmacy',
                ]
            ])
            ->add('lon', HiddenType::class, [
                'attr' => [
                    'class' =>'location_lon_pharmacy',
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
