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
                    "placeholder"=>"Confirmer votre mot de passe",
                ],
            ])
            ->add('newPassword', PasswordType::class, [
                "label"=>"Nouveau Mot de passe",
                "attr"=>[
                    "placeholder"=>"Confirmer votre mot de passe",
                ],

            ])
            ->add('confirmPassword', PasswordType::class, [
                "label"=>"Confirmationdu Mot de passe",
                "attr"=>[
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
