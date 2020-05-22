<?php

namespace App\Form;

use App\Entity\SocialNetworks;
use App\Entity\DoctorSocialNetworks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class SocialNetworksDoctorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('links', UrlType::class,[
                'label'=> "Le lien vers le réseau",
            'attr' =>[
                'class' =>'form-control form-edit',
                ],
        ])
        ->add('socialNetworks', EntityType::class,[
            'class'=> SocialNetworks::class,
            'attr' =>[
                'class' =>'form-control js-form-selected',
                ],
             'label'=> "Choisissez votre réseau social",
            
        ])
    ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DoctorSocialNetworks::class,
        ]);
    }
}
