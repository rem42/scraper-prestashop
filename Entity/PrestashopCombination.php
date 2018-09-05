<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopCombination
{
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id")
	 */
	protected $id;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_product")
	 */
	protected $idProduct;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("location")
	 */
	protected $location;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("ean13")
	 */
	protected $ean13;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("isbn")
	 */
	protected $isbn;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("upc")
	 */
	protected $upc;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("quantity")
	 */
	protected $quantity;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("reference")
	 */
	protected $reference;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("supplier_reference")
	 */
	protected $supplierReference;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("wholesale_price")
	 */
	protected $wholesalePrice;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("price")
	 */
	protected $price;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("ecotax")
	 */
	protected $ecotax;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("weight")
	 */
	protected $weight;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("unit_price_impact")
	 */
	protected $unitPriceImpact;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("minimal_quantity")
	 */
	protected $minimalQuantity;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("default_on")
	 */
	protected $defaultOn;
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime<'Y-m-d'>")
	 * @Serializer\SerializedName("available_date")
	 */
	protected $availableDate;
	/**
	 * @var PrestashopAssociations
	 * @Serializer\Type("Scraper\ScraperPrestashop\Entity\PrestashopAssociations")
	 * @Serializer\SerializedName("associations")
	 */
	protected $associations;

	/**
	 * @return int
	 */
	public function getId(): ?int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return $this
	 */
	public function setId(?int $id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdProduct(): ?int
	{
		return $this->idProduct;
	}

	/**
	 * @param int $idProduct
	 *
	 * @return $this
	 */
	public function setIdProduct(?int $idProduct)
	{
		$this->idProduct = $idProduct;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLocation(): ?string
	{
		return $this->location;
	}

	/**
	 * @param string $location
	 *
	 * @return $this
	 */
	public function setLocation(?string $location)
	{
		$this->location = $location;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEan13(): ?string
	{
		return $this->ean13;
	}

	/**
	 * @param string $ean13
	 *
	 * @return $this
	 */
	public function setEan13(?string $ean13)
	{
		$this->ean13 = $ean13;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getIsbn(): ?string
	{
		return $this->isbn;
	}

	/**
	 * @param string $isbn
	 *
	 * @return $this
	 */
	public function setIsbn(?string $isbn)
	{
		$this->isbn = $isbn;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUpc(): ?string
	{
		return $this->upc;
	}

	/**
	 * @param string $upc
	 *
	 * @return $this
	 */
	public function setUpc(?string $upc)
	{
		$this->upc = $upc;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getQuantity(): ?int
	{
		return $this->quantity;
	}

	/**
	 * @param int $quantity
	 *
	 * @return $this
	 */
	public function setQuantity(?int $quantity)
	{
		$this->quantity = $quantity;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getReference(): ?string
	{
		return $this->reference;
	}

	/**
	 * @param string $reference
	 *
	 * @return $this
	 */
	public function setReference(?string $reference)
	{
		$this->reference = $reference;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSupplierReference(): ?string
	{
		return $this->supplierReference;
	}

	/**
	 * @param string $supplierReference
	 *
	 * @return $this
	 */
	public function setSupplierReference(?string $supplierReference)
	{
		$this->supplierReference = $supplierReference;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getWholesalePrice(): ?float
	{
		return $this->wholesalePrice;
	}

	/**
	 * @param float $wholesalePrice
	 *
	 * @return $this
	 */
	public function setWholesalePrice(?float $wholesalePrice)
	{
		$this->wholesalePrice = $wholesalePrice;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getPrice(): ?float
	{
		return $this->price;
	}

	/**
	 * @param float $price
	 *
	 * @return $this
	 */
	public function setPrice(?float $price)
	{
		$this->price = $price;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getEcotax(): ?float
	{
		return $this->ecotax;
	}

	/**
	 * @param float $ecotax
	 *
	 * @return $this
	 */
	public function setEcotax(?float $ecotax)
	{
		$this->ecotax = $ecotax;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getWeight(): ?float
	{
		return $this->weight;
	}

	/**
	 * @param float $weight
	 *
	 * @return $this
	 */
	public function setWeight(?float $weight)
	{
		$this->weight = $weight;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUnitPriceImpact(): ?string
	{
		return $this->unitPriceImpact;
	}

	/**
	 * @param string $unitPriceImpact
	 *
	 * @return $this
	 */
	public function setUnitPriceImpact(?string $unitPriceImpact)
	{
		$this->unitPriceImpact = $unitPriceImpact;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getMinimalQuantity(): ?int
	{
		return $this->minimalQuantity;
	}

	/**
	 * @param int $minimalQuantity
	 *
	 * @return $this
	 */
	public function setMinimalQuantity(?int $minimalQuantity)
	{
		$this->minimalQuantity = $minimalQuantity;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isDefaultOn(): ?bool
	{
		return $this->defaultOn;
	}

	/**
	 * @param bool $defaultOn
	 *
	 * @return $this
	 */
	public function setDefaultOn(?bool $defaultOn)
	{
		$this->defaultOn = $defaultOn;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getAvailableDate(): ?\DateTime
	{
		return $this->availableDate;
	}

	/**
	 * @param \DateTime $availableDate
	 *
	 * @return $this
	 */
	public function setAvailableDate(?\DateTime $availableDate)
	{
		$this->availableDate = $availableDate;
		return $this;
	}

	/**
	 * @return PrestashopAssociations
	 */
	public function getAssociations(): ?PrestashopAssociations
	{
		return $this->associations;
	}

	/**
	 * @param PrestashopAssociations $associations
	 *
	 * @return $this
	 */
	public function setAssociations(?PrestashopAssociations $associations)
	{
		$this->associations = $associations;
		return $this;
	}
}
