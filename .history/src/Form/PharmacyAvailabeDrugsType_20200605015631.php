<?php

namespace App\Form;

use App\Entity\PharmacyAvailabeDrugs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PharmacyAvailabeDrugsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isAvailable')
            ->add('price', NumberType::class)
            ->add('drugs')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PharmacyAvailabeDrugs::class,
        ]);
    }
}
