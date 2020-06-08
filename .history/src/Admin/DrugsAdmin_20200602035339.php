<?php

declare(strict_types=1);

namespace App\Admin;

use App\Entity\FormDrugs;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

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
            ->add('formDrugs', EntityType::class,[
                'class'=> FormDrugs::class,
                'label'=>'Forme du médicament',
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
