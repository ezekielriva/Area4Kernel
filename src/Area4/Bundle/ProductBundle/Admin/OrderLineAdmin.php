<?php

namespace Area4\Bundle\ProductBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class OrderLineAdmin extends Admin
{
	protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            //->add('pedido',null,array('label'=>"Numero de pedido"))
            ->add('product',null,array('label'=>"Producto"))
            ->add('quantity','integer',array('label'=>"Cantidad"))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('quantity',null,array('label'=>"Cantidad"))
            ->add('product',null,array('label'=>"Producto"))
            ->add('pedido',null,array('label'=>"Numero de pedido"))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->addIdentifier('id',null,array('label'=>"ID"))
            ->add('quantity',null,array('label'=>"Cantidad"))
            ->add('product',null,array('label'=>"Producto"))
            //->add('_action', 'actions', array( 'actions' => array('delete' => array())))
            //->add('pedido',null,array('label'=>"Numero de pedido"))
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

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('duplicate');
        $collection->add('createAjax','{id}/createAjax');
        $collection->add('listAjax','listAjax');
        //$collection->add('createAjax','/createAjax');
        //$collection->add('edit',$this->getIdParameter().'/edit');
    }
}