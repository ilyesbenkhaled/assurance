<?php
// src/Assurance/FrontBundle/Admin/SocialLinksAdmin.php
namespace Assurance\FrontBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SocialLinksAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('titre', 'text')
		           ->add('lien', 'textarea')
				   ->add('logo', 'file')

        ;
    }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titre')
		               ->add('lien')
					   ->add('logo');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
		           ->add('titre')
		           ->add('lien')
				   ->add('logo');
    }

}