<?php

namespace App\Form;

use App\Entity\Keyword;
use App\Entity\Articles;
use App\Entity\Categories;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AddArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class,[
                'attr' =>[
                    'class' =>'form-field',
                    ],
                'label'=> 'Titre de l\'article',
                
            ])
            ->add('imageFile', VichImageType::class,[
                'required'=> false,
                'label'=> 'Illustration de l\'article ',
                'attr' =>[
                    'class' =>'file-input',
                    ],
            ])
            ->add('keywords', EntityType::class,[
                'class'=> Keyword::class,
                'multiple'=> true,
                'attr' =>[
                    'class' =>'form-field',
                    ],
                'label'=> 'Mots clés ',

            ])
            ->add('categories', EntityType::class,[
                'class'=> Categories::class,
                'multiple'=> true,
                'attr' =>[
                    'class' =>'form-field',
                    ],
                'label'=> 'Catégories',

            ])
            ->add('contenu', CKEditorType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Articles::class,
        ]);
    }
}
