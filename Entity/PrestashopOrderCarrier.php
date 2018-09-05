<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PrestashopOrderCarrier
 * @package Scraper\ScraperPrestashop\Entity
 *
 * @Serializer\XmlRoot(name="order_carrier")
 */
class PrestashopOrderCarrier
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
	 * @Serializer\SerializedName("id_order")
	 */
	protected $idOrder;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_carrier")
	 */
	protected $idCarrier;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_order_invoice")
	 */
	protected $idOrderInvoice;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("weight")
	 */
	protected $weight;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("shipping_cost_tax_excl")
	 */
	protected $shippingCostTaxExcl;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("shipping_cost_tax_incl")
	 */
	protected $shippingCostTaxIncl;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("tracking_number")
	 */
	protected $trackingNumber;
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
	public function getIdOrder(): ?int
	{
		return $this->idOrder;
	}

	/**
	 * @param int $idOrder
	 *
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
	public function getIdCarrier(): ?int
	{
		return $this->idCarrier;
	}

	/**
	 * @param int $idCarrier
	 *
	 * @return $this
	 */
	public function setIdCarrier(?int $idCarrier)
	{
		$this->idCarrier = $idCarrier;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdOrderInvoice(): ?int
	{
		return $this->idOrderInvoice;
	}

	/**
	 * @param int $idOrderInvoice
	 *
	 * @return $this
	 */
	public function setIdOrderInvoice(?int $idOrderInvoice)
	{
		$this->idOrderInvoice = $idOrderInvoice;
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
	 * @return float
	 */
	public function getShippingCostTaxExcl(): ?float
	{
		return $this->shippingCostTaxExcl;
	}

	/**
	 * @param float $shippingCostTaxExcl
	 *
	 * @return $this
	 */
	public function setShippingCostTaxExcl(?float $shippingCostTaxExcl)
	{
		$this->shippingCostTaxExcl = $shippingCostTaxExcl;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getShippingCostTaxIncl(): ?float
	{
		return $this->shippingCostTaxIncl;
	}

	/**
	 * @param float $shippingCostTaxIncl
	 *
	 * @return $this
	 */
	public function setShippingCostTaxIncl(?float $shippingCostTaxIncl)
	{
		$this->shippingCostTaxIncl = $shippingCostTaxIncl;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTrackingNumber(): ?string
	{
		return $this->trackingNumber;
	}

	/**
	 * @param string $trackingNumber
	 *
	 * @return $this
	 */
	public function setTrackingNumber(?string $trackingNumber)
	{
		$this->trackingNumber = $trackingNumber;
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
	 *
	 * @return $this
	 */
	public function setDateAdd(?\DateTime $dateAdd)
	{
		$this->dateAdd = $dateAdd;
		return $this;
	}
}
