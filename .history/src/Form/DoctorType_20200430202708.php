<?php

namespace App\Form;

use App\Entity\Doctor;
use App\Entity\Location;
use App\Entity\Expertise;
use App\Entity\Profession;
use App\Form\LocationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

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
            ->add('password', RepeatedType::class, [
                'type'=>PasswordType::class,
                'first_options'=>[          
                    'attr' =>[
                    'class' =>'form-control',
                    ],
                    'label' =>'Mot de passe',
                    [
                        'label_attr' =>[
                            'class'=> 'form-label'
                    ],
                    

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
            ->add('numberPhone', TelType::class)
            ->add('pictureProfil')
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
            ->add('location',  LocationType::class,[
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Doctor::class,
        ]);
    }
}
