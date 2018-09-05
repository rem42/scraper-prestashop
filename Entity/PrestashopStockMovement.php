<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopStockMovement
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
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_product_attribute")
	 */
	protected $idProductAttribute;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_warehouse")
	 */
	protected $idWarehouse;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_currency")
	 */
	protected $idCurrency;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("management_type")
	 */
	protected $managementType;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_employee")
	 */
	protected $idEmployee;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_stock")
	 */
	protected $idStock;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_stock_mvt_reason")
	 */
	protected $idStockMvtReason;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_order")
	 */
	protected $idOrder;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_supply_order")
	 */
	protected $idSupplyOrder;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("product_name")
	 */
	protected $productName;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("ean13")
	 */
	protected $ean13;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("upc")
	 */
	protected $upc;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("reference")
	 */
	protected $reference;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("physical_quantity")
	 */
	protected $physicalQuantity;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("sign")
	 */
	protected $sign;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("last_wa")
	 */
	protected $lastWa;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("current_wa")
	 */
	protected $currentWa;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("price_te")
	 */
	protected $priceTe;
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
	 * @Serializer\SerializedName("date_add")
	 */
	protected $dateAdd;

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
	public function getIdProduct(): ?int
	{
		return $this->idProduct;
	}

	/**
	 * @param int $idProduct
	 * @return $this
	 */
	public function setIdProduct(?int $idProduct)
	{
		$this->idProduct = $idProduct;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdProductAttribute(): ?int
	{
		return $this->idProductAttribute;
	}

	/**
	 * @param int $idProductAttribute
	 * @return $this
	 */
	public function setIdProductAttribute(?int $idProductAttribute)
	{
		$this->idProductAttribute = $idProductAttribute;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdWarehouse(): ?int
	{
		return $this->idWarehouse;
	}

	/**
	 * @param int $idWarehouse
	 * @return $this
	 */
	public function setIdWarehouse(?int $idWarehouse)
	{
		$this->idWarehouse = $idWarehouse;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdCurrency(): ?int
	{
		return $this->idCurrency;
	}

	/**
	 * @param int $idCurrency
	 * @return $this
	 */
	public function setIdCurrency(?int $idCurrency)
	{
		$this->idCurrency = $idCurrency;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getManagementType(): ?string
	{
		return $this->managementType;
	}

	/**
	 * @param string $managementType
	 * @return $this
	 */
	public function setManagementType(?string $managementType)
	{
		$this->managementType = $managementType;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdEmployee(): ?int
	{
		return $this->idEmployee;
	}

	/**
	 * @param int $idEmployee
	 * @return $this
	 */
	public function setIdEmployee(?int $idEmployee)
	{
		$this->idEmployee = $idEmployee;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdStock(): ?int
	{
		return $this->idStock;
	}

	/**
	 * @param int $idStock
	 * @return $this
	 */
	public function setIdStock(?int $idStock)
	{
		$this->idStock = $idStock;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdStockMvtReason(): ?int
	{
		return $this->idStockMvtReason;
	}

	/**
	 * @param int $idStockMvtReason
	 * @return $this
	 */
	public function setIdStockMvtReason(?int $idStockMvtReason)
	{
		$this->idStockMvtReason = $idStockMvtReason;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdOrder(): ?int
	{
		return $this->idOrder;
	}

	/**
	 * @param int $idOrder
	 * @return $this
	 */
	public function setIdOrder(?int $idOrder)
	{
		$this->idOrder = $idOrder;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdSupplyOrder(): ?int
	{
		return $this->idSupplyOrder;
	}

	/**
	 * @param int $idSupplyOrder
	 * @return $this
	 */
	public function setIdSupplyOrder(?int $idSupplyOrder)
	{
		$this->idSupplyOrder = $idSupplyOrder;
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
	public function getEan13(): ?string
	{
		return $this->ean13;
	}

	/**
	 * @param string $ean13
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
	public function getUpc(): ?string
	{
		return $this->upc;
	}

	/**
	 * @param string $upc
	 * @return $this
	 */
	public function setUpc(?string $upc)
	{
		$this->upc = $upc;
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
	 * @return $this
	 */
	public function setReference(?string $reference)
	{
		$this->reference = $reference;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPhysicalQuantity(): ?int
	{
		return $this->physicalQuantity;
	}

	/**
	 * @param int $physicalQuantity
	 * @return $this
	 */
	public function setPhysicalQuantity(?int $physicalQuantity)
	{
		$this->physicalQuantity = $physicalQuantity;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isSign(): ?bool
	{
		return $this->sign;
	}

	/**
	 * @param bool $sign
	 * @return $this
	 */
	public function setSign(?bool $sign)
	{
		$this->sign = $sign;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getLastWa(): ?float
	{
		return $this->lastWa;
	}

	/**
	 * @param float $lastWa
	 * @return $this
	 */
	public function setLastWa(?float $lastWa)
	{
		$this->lastWa = $lastWa;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getCurrentWa(): ?float
	{
		return $this->currentWa;
	}

	/**
	 * @param float $currentWa
	 * @return $this
	 */
	public function setCurrentWa(?float $currentWa)
	{
		$this->currentWa = $currentWa;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getPriceTe(): ?float
	{
		return $this->priceTe;
	}

	/**
	 * @param float $priceTe
	 * @return $this
	 */
	public function setPriceTe(?float $priceTe)
	{
		$this->priceTe = $priceTe;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getDateAdd(): ?\DateTime
	{
		return $this->dateAdd;
	}

	/**
	 * @param \DateTime $dateAdd
	 * @return $this
	 */
	public function setDateAdd(?\DateTime $dateAdd)
	{
		$this->dateAdd = $dateAdd;
		return $this;
	}
}
