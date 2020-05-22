<?php

namespace App\Form;

use App\Entity\DoctorSocialNetworks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocialType² extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('links', UrlType::class,[
            'label'=> "Votre réseau social",
            'attr' =>[
                'class' =>'form-control',
                ],
        ])
        ->add('socialNetworks', EntityType::class,[
            'class'=> SocialNetworks::class,
            'multiple'=> true,
            'attr' =>[
                'class' =>'form-control',
                ],
        ])
    ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DoctorSocialNetworks::class,
        ]);
    }
}
