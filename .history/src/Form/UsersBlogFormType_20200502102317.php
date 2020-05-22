<?php

namespace App\Form;

use App\Entity\UsersBlog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class UsersBlogFormType extends AbstractType
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
            ->add('pseudo', null, [
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
                'label'=>'Pseudo',  
            ])
            ->add('imageFile', VichImageType::class,[
                'required'=> false,
                'label'=>'Choisissez un avatar'
            ])
 

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UsersBlog::class,
        ]);
    }
}
