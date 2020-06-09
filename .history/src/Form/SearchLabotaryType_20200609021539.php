<?php

namespace App\Form;

use App\Entity\CategoryLaboratory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RangeType;

class SearchLabotaryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('categorie', EntityType::class,[
            'class'=> CategoryLaboratory::class,
            'attr' =>[
                'class' =>'form-control',
                ],
             'label'=> "Type du laboratoire",
            
        ])
        ->add('distance', RangeType::class, [
            'attr' => [
                'min' => 0,
                'max' => 8,
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
            'method'=> 'GET', 
            'crsf_protection'=> false, 
        ]);
    }
}
