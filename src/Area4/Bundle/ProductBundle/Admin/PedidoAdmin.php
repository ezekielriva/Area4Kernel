<?php

namespace Area4\Bundle\ProductBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class PedidoAdmin extends Admin
{
	protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            //->add('id','text',array('label'=>"Numero de pedido"))
            ->add('client',null,array('label'=>"Cliente"))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id',null,array('label'=>"Numero de pedido"))
            ->add('client',null,array('label'=>"Cliente"))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id',null,array('label'=>"Numero de pedido"))
            ->add('client',null,array('label'=>"Cliente"))
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
        //$collection->add('edit',$this->getIdParameter().'/edit');
    }
}