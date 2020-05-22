
<?php

namespace App\Form;

use App\Entity\Doctor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class DoctorFormType extends AbstractType
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
                        'message' => 'Veuillez entrer Pseudo',
                    ]),
                    new Length([
                        'min' => 5,
                        'minMessage' => 'Votre Pseudo  doit contenir {{ limit }} caratères',
                        // max length allowed by Symfony for security reasons
                        'max' => 120,
                    ]),
                ],
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
            ->add('imageFile', VichImageType::class,[
                'required'=> false,
            ])
            ->add('profession', EntityType::class,[
                'class'=> Profession::class,
                'label'=>'Profession',
            ])
            ->add('expertise', EntityType::class,[
                'class'=> Expertise::class,
                'multiple'=> true,
                'attr' =>[
                    'class' =>'form-control',
                    ],
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
