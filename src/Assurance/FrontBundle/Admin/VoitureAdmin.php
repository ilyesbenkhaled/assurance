<?php
// src/Assurance/FrontBundle/Admin/VoitureAdmin.php
namespace Assurance\FrontBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class VoitureAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('marque', 'text')
		           ->add('modele', 'text')
				   ->add('nombreDePlace', 'integer')
				   ->add('puissanceCv', 'integer')
				   ->add('energie', 'text')
				   ->add('kilometreParcoursParAn', 'integer')
				   ->add('conducteur_Secondaire', 'text');




		
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('marque')
		               ->add('modele')
					   ->add('nombreDePlace')
					   ->add('puissanceCv')
					   ->add('energie')
					   ->add('kilometreParcoursParAn')
					   ->add('conducteur_Secondaire');
					   
					   
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
					   ->add('marque')
		               ->add('modele')
					   ->add('nombreDePlace')
					   ->add('puissance_cv')
					   ->add('energie')
					   ->add('kilometreParcoursParAn')
					   ->add('conducteur_Secondaire');
    }
}