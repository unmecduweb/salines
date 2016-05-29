<?php

namespace LL\CoreBundle\Entity;

use LL\CoreBundle\Entity\Production;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="LL\CoreBundle\Repository\ProductRepository")
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="priceHt", type="float")
     */
    private $priceHt;

    /**
     * @var string
     *
     * @ORM\Column(name="unity", type="string", length=30)
     */
    private $unity;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=50)
     */
    private $category;
    
    /**
     * @var int
     *
     * @ORM\Column(name="isAllergen", type="integer")
     */
    private $isAllergen;
    
    /**
     * @var integer
     * @Assert\Type(type="integer")
     * @ORM\Column(name="status", type="smallint")
     */
    private $status = 1;
    
    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;
    
    
    /**
     * @ORM\OneToMany(targetEntity="LL\CoreBundle\Entity\ProductQuantity", mappedBy="product", cascade={"persist"})
     */
    private $productQuantity;
    
    /**
     * @ORM\ManyToOne(targetEntity="LL\CoreBundle\Entity\Provider", inversedBy="provider", cascade={"persist"})
     */
    private $provider;

    public function __toString()
    {
        return $this->name;
    }
    
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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set priceHt
     *
     * @param integer $priceHt
     * @return Product
     */
    public function setPriceHt($priceHt)
    {
        $this->priceHt = $priceHt;

        return $this;
    }

    /**
     * Get priceHt
     *
     * @return integer 
     */
    public function getPriceHt()
    {
        return $this->priceHt;
    }

    /**
     * Set unity
     *
     * @param string $unity
     * @return Product
     */
    public function setUnity($unity)
    {
        $this->unity = $unity;

        return $this;
    }

    /**
     * Get unity
     *
     * @return string 
     */
    public function getUnity()
    {
        return $this->unity;
    }

    

    /**
     * Set isAllergen
     *
     * @param integer $isAllergen
     * @return Product
     */
    public function setIsAllergen($isAllergen)
    {
        $this->isAllergen = $isAllergen;

        return $this;
    }

    /**
     * Get isAllergen
     *
     * @return integer 
     */
    public function getIsAllergen()
    {
        return $this->isAllergen;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add productions
     *
     * @param \LL\CoreBundle\Entity\Production $productions
     * @return Product
     */
    public function addProduction(\LL\CoreBundle\Entity\Production $productions)
    {
        $this->productions[] = $productions;

        return $this;
    }

    /**
     * Remove productions
     *
     * @param \LL\CoreBundle\Entity\Production $productions
     */
    public function removeProduction(\LL\CoreBundle\Entity\Production $productions)
    {
        $this->productions->removeElement($productions);
    }

    /**
     * Get productions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductions()
    {
        return $this->productions;
    }

    /**
     * Add productQuantity
     *
     * @param \LL\CoreBundle\Entity\ProductQuantity $productQuantity
     * @return Product
     */
    public function addProductQuantity(\LL\CoreBundle\Entity\ProductQuantity $productQuantity)
    {
        $this->productQuantity[] = $productQuantity;

        return $this;
    }

    /**
     * Remove productQuantity
     *
     * @param \LL\CoreBundle\Entity\ProductQuantity $productQuantity
     */
    public function removeProductQuantity(\LL\CoreBundle\Entity\ProductQuantity $productQuantity)
    {
        $this->productQuantity->removeElement($productQuantity);
    }

    /**
     * Get productQuantity
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * Set provider
     *
     * @param \LL\CoreBundle\Entity\Provider $provider
     * @return Product
     */
    public function setProvider(\LL\CoreBundle\Entity\Provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return \LL\CoreBundle\Entity\Provider 
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Product
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Product
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
}
