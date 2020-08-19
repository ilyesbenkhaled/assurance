<?php
// src/Assurance/FrontBundle/Admin/HabitationAdmin.php
namespace Assurance\FrontBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class HabitationAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('type', 'text')
		           ->add('ville', 'text')
				   ->add('codePostal', 'integer')
				   ->add('adresse', 'text')
				   ->add('nombreDeChambre', 'integer')
				   ->add('surfaceHabitation', 'integer')
				   ->add('surfaceDeTerrain', 'integer')
				   ->add('anneeDeConstruction', 'integer')
				   ->add('anneeHabitation', 'integer');




		
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('type')
		               ->add('ville')
					   ->add('codePostal')
					   ->add('adresse')
					   ->add('nombreDeChambre')
					   ->add('surfaceHabitation')
					   ->add('surfaceDeTerrain')
					   ->add('anneeDeConstruction')
					   ->add('anneeHabitation');
					   
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
					   ->add('type')
		               ->add('ville')
					   ->add('codePostal')
					   ->add('adresse')
					   ->add('nombre_chambre')
					   ->add('surfaceHabitation')
					   ->add('surfaceDeTerrain')
					   ->add('anneeDeConstruction')
					   ->add('anneeHabitation');
    }
}