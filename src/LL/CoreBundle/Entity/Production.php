<?php

namespace LL\CoreBundle\Entity;

use LL\CoreBundle\Entity\Product;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Production
 *
 * @ORM\Table(name="production")
 * @ORM\Entity(repositoryClass="LL\CoreBundle\Repository\ProductionRepository")
 */
class Production
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
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="materiels", type="text", nullable=true)
     */
    private $materiels;
    
    /**
     * @var string
     *
     * @ORM\Column(name="productionStep", type="text", nullable=true)
     */
    private $productionStep;
    
    /**
     * @var int
     *
     * @ORM\Column(name="priceSellingHt", type="integer", nullable=true)
     */
    private $priceSellingHt;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPerson", type="integer")
     */
    private $nbPerson;

    
    
    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cookingTime", type="time", nullable=true)
     */
    private $cookingTime;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255, nullable=true)
     */
    private $author;

    
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
     * @var \DateTime
     *
     * @ORM\Column(name="preparationTime", type="time", nullable=true)
     */
    private $preparationTime;

    /**
     * @ORM\OneToMany(targetEntity="LL\CoreBundle\Entity\ProductQuantity", mappedBy="production" , cascade={"all"})
     */
    private $productQuantity;


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
     * @return Production
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
     * Set description
     *
     * @param string $description
     * @return Production
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set materiels
     *
     * @param string $materiels
     * @return Production
     */
    public function setMateriels($materiels)
    {
        $this->materiels = $materiels;

        return $this;
    }

    /**
     * Get materiels
     *
     * @return string 
     */
    public function getMateriels()
    {
        return $this->materiels;
    }

    /**
     * Set productionStep
     *
     * @param string $productionStep
     * @return Production
     */
    public function setProductionStep($productionStep)
    {
        $this->productionStep = $productionStep;

        return $this;
    }

    /**
     * Get productionStep
     *
     * @return string 
     */
    public function getProductionStep()
    {
        return $this->productionStep;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Production
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
     * Set cookingTime
     *
     * @param \DateTime $cookingTime
     * @return Production
     */
    public function setCookingTime($cookingTime)
    {
        $this->cookingTime = $cookingTime;

        return $this;
    }

    /**
     * Get cookingTime
     *
     * @return \DateTime 
     */
    public function getCookingTime()
    {
        return $this->cookingTime;
    }

    /**
     * Set preparationTime
     *
     * @param \DateTime $preparationTime
     * @return Production
     */
    public function setPreparationTime($preparationTime)
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * Get preparationTime
     *
     * @return \DateTime 
     */
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }

    /**
     * Add productQuantity
     *
     * @param \LL\CoreBundle\Entity\ProductQuantity $productQuantity
     * @return Production
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
     * Set priceSellingHt
     *
     * @param integer $priceSellingHt
     *
     * @return Production
     */
    public function setPriceSellingHt($priceSellingHt)
    {
        $this->priceSellingHt = $priceSellingHt;

        return $this;
    }

    /**
     * Get priceSellingHt
     *
     * @return integer
     */
    public function getPriceSellingHt()
    {
        return $this->priceSellingHt;
    }

    /**
     * Set nbPerson
     *
     * @param integer $nbPerson
     *
     * @return Production
     */
    public function setNbPerson($nbPerson)
    {
        $this->nbPerson = $nbPerson;

        return $this;
    }

    /**
     * Get nbPerson
     *
     * @return integer
     */
    public function getNbPerson()
    {
        return $this->nbPerson;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productQuantity = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set author
     *
     * @param string $author
     *
     * @return Production
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Production
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
     * @return Production
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
}
