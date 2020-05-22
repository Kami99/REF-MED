<?php

namespace App\Form;

use App\Entity\Pharmacy;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PharmacyRegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', EmailType::class,[
            'constraints' => [
                new NotBlank([
                    'message' => 'Merci d\'entrer un e-mail',
                ]),
            ],
            'required' => true,
            ]
            )
        ->add('password', RepeatedType::class, [
            'type'=>PasswordType::class,
            'first_options'=>[          
                'attr' =>[
                'class' =>'form-control',
                ],
                'label' =>'Mot de passe',
        ],
            'second_options'=>[
                'attr' =>[
                    'class' =>'form-control'
                ],
                'label'=>'Répétez le mots de passe',
                ],
            'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 9,
                        'minMessage' => 'Votre mots de passe doit contenir {{ limit }} caratères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
                'label'=>'Mots de passe',  
           
        ])

            ->add('pharmacyName')
            ->add('phoneNumber')
            ->add('picture')
            ->add('location')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pharmacy::class,
        ]);
    }
}
