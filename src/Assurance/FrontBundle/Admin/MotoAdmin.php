<?php
// src/Assurance/FrontBundle/Admin/MotoAdmin.php
namespace Assurance\FrontBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class MotoAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('marque', 'text')
		           ->add('modele', 'text')
				   ->add('ageMoto', 'text')
				   ->add('volumeMoteur', 'text')
				   ->add('cylindre', 'text')
				   ->add('boiteVitesse', 'text')
				   ->add('kilometrage', 'integer')
				   ->add('annee_de_mise_en_circulation', 'integer');




		
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('marque')
		               ->add('modele')
					   ->add('ageMoto')
					   ->add('volumeMoteur')
					   ->add('cylindre')
					   ->add('boiteVitesse')
					   ->add('kilometrage')
					   ->add('annee_de_mise_en_circulation');
					   
					   
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
					   ->add('marque')
		               ->add('modele')
					   ->add('ageMoto')
					   ->add('volumeMoteur')
					   ->add('cylindre')
					   ->add('boiteVitesse')
					   ->add('kilometrage')
					   ->add('annee_de_mise_en_circulation');
    }
}