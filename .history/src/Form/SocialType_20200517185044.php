<?php

namespace App\Form;

use App\Entity\DoctorSocialNetworks;
use App\Entity\SocialNetworks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class SocialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('links', UrlType::class,[
                [
                    'label'=> "Votre réseau social",
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
