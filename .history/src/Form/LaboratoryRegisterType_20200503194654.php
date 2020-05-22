<?php

namespace App\Form;

use App\Entity\Laboratory;
use App\Form\LocationType;
use App\Entity\CategoryLaboratory;
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

class LaboratoryRegisterType extends AbstractType
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
                            'min' => 8,
                            'minMessage' => 'Votre mots de passe doit contenir {{ limit }} caratères',
                            // max length allowed by Symfony for security reasons
                            'max' => 4096,
                        ]),
                    ],
                    'invalid_message' => 'Le Mots de passe doivent correspondre',
                    'required' => true,
               
            ])
            ->add('nameLaboratory', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un nom',
                    ]),
                    new Length([
                        'min' => 5,
                        'minMessage' => 'Il doit contenir au moins {{ limit }} caratères',
                        // max length allowed by Symfony for security reasons
                        'max' => 120,
                    ]),
                ],
                'label'=>'Nom du laboratoire',  
            ])
            ->add('numberPhone', TelType::class)
            ->add('imageFile', VichImageType::class,[
                'label'=>'Choisissez une photo'
                'required'=> false,
            ])
            ->add('categoryLaboratory', EntityType::class,[
                'class'=> CategoryLaboratory::class,
                'multiple'=> true,
                'attr' =>[
                    'class' =>'form-control',
                    ],
                'required'=> false,
                            ])
            ->add('location',  LocationType::class,[
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Laboratory::class,
        ]);
    }
}
