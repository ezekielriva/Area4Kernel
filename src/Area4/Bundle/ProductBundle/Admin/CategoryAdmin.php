<?php

namespace Area4\Bundle\ProductBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class CategoryAdmin extends Admin
{
	protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name','text',array('label'=>"Nombre"))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name',null,array('label'=>"Nombre"))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name',null,array('label'=>"Nombre"))
        ;
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        /*$errorElement
            ->with('description')
                ->assertMaxLength(array('limit' => 200))
            ->end()
        ;*/
    }
}