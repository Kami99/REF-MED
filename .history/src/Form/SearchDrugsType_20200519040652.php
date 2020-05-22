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
                    'placholder' =>'Entrez le nom d\'un médicament',

                ],
                'label'=> "Type du laboratoire",
            ])
            ->add('distance', RangeType::class, [
                'attr' => [
                    'min' => 5,
                    'max' => 50,
                    'class' =>'form-control',
                ]
            ])
            ->add('lat', HiddenType::class)
            ->add('lon', HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
