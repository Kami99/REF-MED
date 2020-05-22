<?php

namespace App\Form;

use App\Entity\Doctor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditDoctorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('firstName')
            ->add('LastName')
            ->add('numberPhone')
            ->add('pictureProfil')
            ->add('tarifMin')
            ->add('tarifMax')
            ->add('presentation')
            ->add('profession')
            ->add('expertise')
            ->add('language')
            ->add('location')
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
