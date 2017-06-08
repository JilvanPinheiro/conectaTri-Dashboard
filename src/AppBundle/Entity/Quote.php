<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Quote
 *
 * @ORM\Table(name="quote")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteRepository")
 */
class Quote
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
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\QuoteProduct", mappedBy="quote")
     */
    private $quoteProducts;

    /**
     * @var Retailer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Retailer")
     * @ORM\JoinColumn(name="realtor_id", referencedColumnName="id")
     */
    private $retailer;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Quote
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
     * Set type
     *
     * @param integer $type
     *
     * @return Quote
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quoteProducts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add quoteProduct
     *
     * @param \AppBundle\Entity\QuoteProduct $quoteProduct
     *
     * @return Quote
     */
    public function addQuoteProduct(\AppBundle\Entity\QuoteProduct $quoteProduct)
    {
        $this->quoteProducts[] = $quoteProduct;

        return $this;
    }

    /**
     * Remove quoteProduct
     *
     * @param \AppBundle\Entity\QuoteProduct $quoteProduct
     */
    public function removeQuoteProduct(\AppBundle\Entity\QuoteProduct $quoteProduct)
    {
        $this->quoteProducts->removeElement($quoteProduct);
    }

    /**
     * Get quoteProducts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuoteProducts()
    {
        return $this->quoteProducts;
    }

    /**
     * Set retailer
     *
     * @param \AppBundle\Entity\Retailer $retailer
     *
     * @return Quote
     */
    public function setRetailer(\AppBundle\Entity\Retailer $retailer = null)
    {
        $this->retailer = $retailer;

        return $this;
    }

    /**
     * Get retailer
     *
     * @return \AppBundle\Entity\Retailer
     */
    public function getRetailer()
    {
        return $this->retailer;
    }
}
