<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class NewsAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            ->add('slug')
            ->add('content')
            ->add('title')
            ->add('featuredImage')
            ->add('links')
            ->add('enable')
            ->add('addAt')
            ->add('updatedAt')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('id')
            ->add('slug')
            ->add('content')
            ->add('title')
            ->add('featuredImage')
            ->add('links')
            ->add('enable')
            ->add('addAt')
            ->add('updatedAt')
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
            ->add('content')
            ->add('title')
            ->add('featuredImage')
            ->add('links')
            ->add('enable', ChoiceFieldMaskType::class, [
                'choices' => [
                    'Actif' => '1',
                    'Inactif' => '0',
                ],
                'required' => true
            ])
            ->add('addAt')
            ->add('updatedAt')
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('slug')
            ->add('content')
            ->add('title')
            ->add('featuredImage')
            ->add('links')
            ->add('enable')
            ->add('addAt')
            ->add('updatedAt')
            ;
    }
}
