<?php

namespace Area4\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area4\Bundle\ProductBundle\Entity\OrderLine
 *
 * @ORM\Table(name="product_OrderLine")
 * @ORM\Entity
 */
class OrderLine
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $quantity
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var Pedido $pedido
     *
     * @ORM\ManyToOne(targetEntity="Pedido", inversedBy="orderLine")
     */
    private $pedido;

    /**
     * @var Product $product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     **/
    private $product;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return OrderLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set pedido
     *
     * @param Area4\Bundle\ProductBundle\Entity\Pedido $pedido
     * @return OrderLine
     */
    public function setPedido(\Area4\Bundle\ProductBundle\Entity\Pedido $pedido = null)
    {
        $this->pedido = $pedido;
    
        return $this;
    }

    /**
     * Get pedido
     *
     * @return Area4\Bundle\ProductBundle\Entity\Pedido 
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * Set product
     *
     * @param Area4\Bundle\ProductBundle\Entity\Product $product
     * @return OrderLine
     */
    public function setProduct(\Area4\Bundle\ProductBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return Area4\Bundle\ProductBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}