<?php

namespace App\Form;

use App\Entity\Profession;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class SearchDoctorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('profession', EntityType::class,[
                'class'=> Profession::class,
                'attr' =>[
                    'class' =>'form-control',
                    ],
                 'label'=> "Spécialité",
                
            ])
            ->add('name', TextType::class)
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
