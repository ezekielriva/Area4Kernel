<?php

namespace Area4\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Area4\Bundle\ProductBundle\Entity\Pedido
 *
 * @ORM\Table(name="product_Order")
 * @ORM\Entity
 */
class Pedido
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
     * @var \stdClass $client
     *
     * @ORM\ManyToOne(targetEntity="Area4\Bundle\UserBundle\Entity\User")
     */
    private $client;

    /**
     * @var \DateTime $created_at
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var \DateTime $updated_at
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updated_at;

    /**
     * @var OrderLine $orderLine
     *
     * @ORM\OneToMany(targetEntity="OrderLine", mappedBy="pedido")
     **/
    private $orderLine;

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
     * Set client
     *
     * @param \stdClass $client
     * @return Pedido
     */
    public function setClient($client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return \stdClass 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Pedido
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Pedido
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderLine = new \Doctrine\Common\Collections\ArrayCollection();
        $this->created_at = new \DateTime('now');
        $this->updated_at = $this->created_at;
    }
    
    /**
     * Add orderLine
     *
     * @param Area4\Bundle\ProductBundle\Entity\OrderLine $orderLine
     * @return Pedido
     */
    public function addOrderLine(\Area4\Bundle\ProductBundle\Entity\OrderLine $orderLine)
    {
        $this->orderLine[] = $orderLine;
    
        return $this;
    }

    /**
     * Remove orderLine
     *
     * @param Area4\Bundle\ProductBundle\Entity\OrderLine $orderLine
     */
    public function removeOrderLine(\Area4\Bundle\ProductBundle\Entity\OrderLine $orderLine)
    {
        $this->orderLine->removeElement($orderLine);
    }

    /**
     * Get orderLine
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOrderLine()
    {
        return $this->orderLine;
    }

    /**
     * toString
     *
     * @return string
     * @author ezekiel
     **/
    public function __toString()
    {
        return (string) $this->id;
    }

}