<?php 

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType;

final class LanguageAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->with('Addresses')->add('language', TextType::class);
        $formMapper->add('language', TextType::class);
        $formMapper->add('enable', ChoiceFieldMaskType::class, [
            'choices' => [
                'Actif' => '1',
                'Inactif' => '0',
            ],
            'required' => true
        ]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('language');
        $datagridMapper->add('enable');
        
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('language');
        $listMapper->add('enable');
    }
}