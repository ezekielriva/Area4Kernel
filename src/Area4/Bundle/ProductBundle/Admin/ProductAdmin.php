<?php

namespace Area4\Bundle\ProductBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class ProductAdmin extends Admin
{
	protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name','text',array('label'=>"Nombre"))
            ->add('description','textarea',array('label'=>"Descripcion"))
            ->add('category',null,array('label'=>'Categoria'))
            ->add('price','money',array('label'=>"Precio",'currency'=>'ARS'))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name',null,array('label'=>"Nombre"))
            ->add('category',null,array('label'=>'Categoria'))
            ->add('price',null,array('label'=>"Precio"))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name',null,array('label'=>"Nombre"))
            ->add('description',null,array('label'=>"Descripcion"))
            ->add('category',null,array('label'=>'Categoria'))
            ->add('price',null,array('label'=>"Precio"))
        ;
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('description')
                ->assertMaxLength(array('limit' => 200))
            ->end()
        ;
    }
}