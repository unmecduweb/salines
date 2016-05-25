<?php

namespace LL\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductQuantity
 *
 * @ORM\Table(name="product_quantity")
 * @ORM\Entity(repositoryClass="LL\CoreBundle\Repository\ProductQuantityRepository")
 */
class ProductQuantity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="LL\CoreBundle\Entity\Product", inversedBy="productQuantity", cascade={"persist"})
     */
    private $product;
    
    /**
     * @ORM\ManyToOne(targetEntity="LL\CoreBundle\Entity\Production", inversedBy="productQuantity", cascade={"persist"})
     */
    private $production;
    
    

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
     * @return ProductQuantity
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
     * Set product
     *
     * @param \LL\CoreBundle\Entity\Product $product
     * @return ProductQuantity
     */
    public function setProduct(\LL\CoreBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \LL\CoreBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set production
     *
     * @param \LL\CoreBundle\Entity\Production $production
     * @return ProductQuantity
     */
    public function setProduction(\LL\CoreBundle\Entity\Production $production = null)
    {
        $this->production = $production;

        return $this;
    }

    /**
     * Get production
     *
     * @return \LL\CoreBundle\Entity\Production 
     */
    public function getProduction()
    {
        return $this->production;
    }
}
