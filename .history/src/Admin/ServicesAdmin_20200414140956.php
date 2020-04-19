<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class ServicesAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            ->add('nameServices')
            ->add('description')
            ->add('icon')
            ->add('enable')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('id')
            ->add('nameServices')
            ->add('description')
            ->add('icon')
            ->add('enable')
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
            ->add('id')
            ->add('nameServices', TextType::class)
            ->add('description', TextareaType::class)
            ->add('icon')
            ->add('enable', ChoiceFieldMaskType::class, [
                'choices' => [
                    'Actif' => '1',
                    'Inactif' => '0',
                ],
                'required' => true
            ])
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('nameServices')
            ->add('description')
            ->add('icon')
            ->add('enable')
            ;
    }
}
