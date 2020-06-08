<?php

namespace App\Form;

use App\Entity\PharmacyAvailabeDrugs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class EditAvailableDrugsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('isAvailable', ChoiceType::class, [
            'choices' => [
                'Disponible' => '1',
                'Indisponible' => '0',
            ],
            'required' => true,
            'label' => 'Disponible',
            
        ])
        ->add('price', NumberType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PharmacyAvailabeDrugs::class,
        ]);
    }
}
