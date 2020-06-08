<?php

declare(strict_types=1);

namespace App\Admin;

use App\Entity\FormDrugs;
use App\Entity\CategoryDrugs;
use App\Entity\DrugsConsomers;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType;

final class DrugsAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            ->add('nameDrugs')
            ->add('consigne')
            ->add('description')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('id')
            ->add('nameDrugs')
            ->add('consigne')
            ->add('description')
            ->add('slug')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('nameDrugs')
            ->add('consigne')
            ->add('description')     
           ->add('isAuthorised', ChoiceFieldMaskType::class, [
                'choices' => [
                    'Proscrite pour femmes enceintes' => '1',
                    'Femmes enceintes authorisés' => '0',
                ],
                'required' => true
            ])
            ->add('formDrugs', EntityType::class,[
                'class'=> FormDrugs::class,
                'label'=>'Forme du médicament',
                'multiple'=> true,
            ])
            ->add('categoryDrugs', EntityType::class,[
                'class'=> CategoryDrugs::class,
                'label'=>'catgégorie du médicament',
                'multiple'=> true,
            ])   
             ->add('drugsConsommers', EntityType::class,[
                'class'=> DrugsConsomers::class,
                'label'=>'Consomateurs du médicaments',
                'multiple'=> true,
            ])
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('nameDrugs')
            ->add('consigne')
            ->add('description')
            ->add('slug')
            ;
    }
}
