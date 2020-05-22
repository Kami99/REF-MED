<?php

namespace App\Form;

use App\Entity\CategoryLaboratory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RangeType;

class SearchLabotaryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('profession', EntityType::class,[
            'class'=> CategoryLaboratory::class,
            'attr' =>[
                'class' =>'form-control',
                ],
             'label'=> "Spécialité",
            
        ])
        ->add('distance', RangeType::class, [
            'attr' => [
                'min' => 5,
                'max' => 50
            ]
        ])
        ->add('lat')
        ->add('lon')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
