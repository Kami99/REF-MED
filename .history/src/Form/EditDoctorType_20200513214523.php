<?php

namespace App\Form;

use App\Entity\Doctor;
use App\Entity\Refund;
use App\Entity\Language;
use App\Entity\Expertise;
use App\Entity\Profession;
use App\Form\LocationType;
use App\Entity\MeansPayment;
use App\Entity\PraticalInfos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EditDoctorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('firstName', TextType::class)
            ->add('LastName', TextType::class)
            ->add('numberPhone', TelType::class)
            ->add('imageFile', VichImageType::class,[
                'required'=> false,
                'label'=> 'Photo de profile',
                'attr' =>[
                    'class' =>'file-input',
                    ],
                'image_uri'
            ])
            ->add('tarifMin', IntegerType::class)
            ->add('tarifMax', IntegerType::class)
            ->add('presentation', TextareaType::class)
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
            ->add('language', EntityType::class,[
                'class'=> Language::class,
                'multiple'=> true,
                'attr' =>[
                    'class' =>'form-control',
                    ],
            ])
            ->add('location',  LocationType::class,[
                ])
            ->add('meansPayment', EntityType::class,[
                'class'=> MeansPayment::class,
                'multiple'=> true,
                'attr' =>[
                    'class' =>'form-control',
                    ],
            ])
            ->add('praticalInfos', EntityType::class,[
                'class'=> PraticalInfos::class,
                'multiple'=> true,
                'attr' =>[
                    'class' =>'form-control',
                    ],
            ])
            ->add('refund', EntityType::class,[
                'class'=> Refund::class,
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
            'data_class' => Doctor::class,
        ]);
    }
}
