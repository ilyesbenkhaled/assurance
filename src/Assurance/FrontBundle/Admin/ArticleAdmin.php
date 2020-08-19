<?php
// src/Assurance/FrontBundle/Admin/ArticleAdmin.php
namespace Assurance\FrontBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ArticleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('titre', 'text')
		           ->add('body', 'textarea')
				   ->add('image', 'sonata_type_admin', 
						array('delete' => false));
    }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titre')
		               ->add('body')
					   ->add('image');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
		           ->add('titre')
		           ->add('body')
				   ->add('image');
    }    
	
	public function prePersist($article) {
        $this->manageFileUpload($article);
    }

    public function preUpdate($article) {
        $this->manageFileUpload($article);
    }

    private function manageFileUpload($article) {
        if ($article->getImage()) {
            $article->refreshUpdated();
        }
    }

}