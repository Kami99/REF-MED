<?php

namespace App\Form;

use App\Entity\DoctorSocialNetworks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('socialNetworks')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DoctorSocialNetworks::class,
        ]);
    }
}
