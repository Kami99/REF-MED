<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PasswordUpdateType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', PasswordType::class, [
                "label"=>"Ancien Mot de passe",
                "attr"=>[
                    "class"=>"form-control",
                    "placeholder"=>"Tapez votre ancien votre mot de passe",
                ],
            ])
            ->add('newPassword', PasswordType::class, [
                "label"=>"Nouveau Mot de passe",
                "attr"=>[
                    "placeholder"=>"Tapez votre nouveau mot de passe",
                    "class"=>"form-control",
                ],

            ])
            ->add('confirmPassword', PasswordType::class, [
                "label"=>"Confirmation du Mot de passe",
                "attr"=>[
                    "class"=>"form-control",
                    "placeholder"=>"Confirmer votre mot de passe",
                ],

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
