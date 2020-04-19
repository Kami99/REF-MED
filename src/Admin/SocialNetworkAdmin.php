<?php 

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType;

final class SocialNetworkAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('socialName', TextType::class);
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
        $datagridMapper->add('socialName');
        $datagridMapper->add('enable');
        $datagridMapper->add('slug');
        
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('socialName');
        $listMapper->add('enable');
        $listMapper->add('slug');
    }
}