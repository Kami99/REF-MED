<?php

namespace App\Form;

use App\Entity\Doctor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class DoctorType extends AbstractType
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
            ->add('password', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
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
            ->add('firstName', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer nom',
                    ]),
                    new Length([
                        'min' => 5,
                        'minMessage' => 'Votre nom  doit contenir {{ limit }} caratères',
                        // max length allowed by Symfony for security reasons
                        'max' => 120,
                    ]),
                ],
                'label'=>'Nom de famille',  
            ])
            ->add('LastName', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre prenom',
                    ]),
                    new Length([
                        'min' => 5,
                        'minMessage' => 'Votre Prenom  doit contenir {{ limit }} caratères',
                        // max length allowed by Symfony for security reasons
                        'max' => 120,
                    ]),
                ],
                'label'=>'Prenom',  
            ])
            ->add('numberPhone')
            ->add('pictureProfil', VichImageType::class,[
                'required'=> false,
                'label'=>'Choisissez une photo de profil'
            ])
            ->add('profession', EntityType::class,[
                'class'=> Profession::class,
                'label'=>'Profession',
            ])
            ->add('expertise', EntityType::class,[
                'class'=> Expertise::class,
                'label'=>'Votre Champ d\'expertise',
                'multiple'=> true,
                'expanded'=> true,
            ])
            ->add('location')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Doctor::class,
        ]);
    }
     public function getChoices()
    {
        return null;
    }
}
