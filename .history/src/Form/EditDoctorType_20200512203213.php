<?php

namespace App\Form;

use App\Entity\Doctor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class EditDoctorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('firstName')
            ->add('LastName')
            ->add('numberPhone')
            ->add('pictureProfil')
            ->add('tarifMin')
            ->add('tarifMax', NumberType::class)
            ->add('presentation', TextType::class)
            ->add('profession')
            ->add('expertise')
            ->add('language')
            ->add('location',  LocationType::class,[
                ])
            ->add('meansPayment')
            ->add('praticalInfos')
            ->add('refund')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Doctor::class,
        ]);
    }
}
