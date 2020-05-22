<?php

namespace App\Form;

use App\Entity\Keyword;
use App\Entity\Articles;
use App\Entity\Categories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contenu')
            ->add('featuredImage')
            ->add('title')
            ->add('keywords', EntityType::class,[
                'class'=> Keyword::class,
                'multiple'=> true,
                'attr' =>[
                    'class' =>'form-control',
                    ],
            ])
            ->add('categories', EntityType::class,[
                'class'=> Categories::class,
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
            'data_class' => Articles::class,
        ]);
    }
}
