<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopOrderRow
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
	 * @Serializer\SerializedName("product_id")
	 */
	protected $productId;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("product_attribute_id")
	 */
	protected $productAttributeId;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("product_quantity")
	 */
	protected $productQuantity;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("product_name")
	 */
	protected $productName;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("product_reference")
	 */
	protected $productReference;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("product_ean13")
	 */
	protected $productEan13;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("product_isbn")
	 */
	protected $productIsbn;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("product_upc")
	 */
	protected $productUpc;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("product_price")
	 */
	protected $productPrice;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("unit_price_tax_incl")
	 */
	protected $unitPriceTaxIncl;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("unit_price_tax_excl")
	 */
	protected $unitPriceTaxExcl;

	/**
	 * @return int
	 */
	public function getId(): ?int
	{
		return $this->id;
	}

	/**
	 * @param int $id
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
	public function getProductId(): ?int
	{
		return $this->productId;
	}

	/**
	 * @param int $productId
	 * @return $this
	 */
	public function setProductId(?int $productId)
	{
		$this->productId = $productId;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getProductAttributeId(): ?int
	{
		return $this->productAttributeId;
	}

	/**
	 * @param int $productAttributeId
	 * @return $this
	 */
	public function setProductAttributeId(?int $productAttributeId)
	{
		$this->productAttributeId = $productAttributeId;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getProductQuantity(): ?int
	{
		return $this->productQuantity;
	}

	/**
	 * @param int $productQuantity
	 * @return $this
	 */
	public function setProductQuantity(?int $productQuantity)
	{
		$this->productQuantity = $productQuantity;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getProductName(): ?string
	{
		return $this->productName;
	}

	/**
	 * @param string $productName
	 * @return $this
	 */
	public function setProductName(?string $productName)
	{
		$this->productName = $productName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getProductReference(): ?string
	{
		return $this->productReference;
	}

	/**
	 * @param string $productReference
	 * @return $this
	 */
	public function setProductReference(?string $productReference)
	{
		$this->productReference = $productReference;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getProductEan13(): ?string
	{
		return $this->productEan13;
	}

	/**
	 * @param string $productEan13
	 * @return $this
	 */
	public function setProductEan13(?string $productEan13)
	{
		$this->productEan13 = $productEan13;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getProductIsbn(): ?string
	{
		return $this->productIsbn;
	}

	/**
	 * @param string $productIsbn
	 * @return $this
	 */
	public function setProductIsbn(?string $productIsbn)
	{
		$this->productIsbn = $productIsbn;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getProductUpc(): ?string
	{
		return $this->productUpc;
	}

	/**
	 * @param string $productUpc
	 * @return $this
	 */
	public function setProductUpc(?string $productUpc)
	{
		$this->productUpc = $productUpc;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getProductPrice(): ?float
	{
		return $this->productPrice;
	}

	/**
	 * @param float $productPrice
	 * @return $this
	 */
	public function setProductPrice(?float $productPrice)
	{
		$this->productPrice = $productPrice;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getUnitPriceTaxIncl(): ?float
	{
		return $this->unitPriceTaxIncl;
	}

	/**
	 * @param float $unitPriceTaxIncl
	 * @return $this
	 */
	public function setUnitPriceTaxIncl(?float $unitPriceTaxIncl)
	{
		$this->unitPriceTaxIncl = $unitPriceTaxIncl;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getUnitPriceTaxExcl(): ?float
	{
		return $this->unitPriceTaxExcl;
	}

	/**
	 * @param float $unitPriceTaxExcl
	 * @return $this
	 */
	public function setUnitPriceTaxExcl(?float $unitPriceTaxExcl)
	{
		$this->unitPriceTaxExcl = $unitPriceTaxExcl;
		return $this;
	}
}
