<?php

namespace App\Form;

use App\Entity\Laboratory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditLaboratoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('roles')
            ->add('password')
            ->add('nameLaboratory')
            ->add('numberPhone')
            ->add('enable')
            ->add('updatedAt')
            ->add('createdAt')
            ->add('slug')
            ->add('imageName')
            ->add('categoryLaboratory')
            ->add('location')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Laboratory::class,
        ]);
    }
}
