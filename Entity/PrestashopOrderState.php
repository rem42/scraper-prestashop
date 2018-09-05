<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopOrderState
{
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id")
	 */
	protected $id;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("unremovable")
	 */
	protected $unremovable;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("delivery")
	 */
	protected $delivery;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("hidden")
	 */
	protected $hidden;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("send_email")
	 */
	protected $sendEmail;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("module_name")
	 */
	protected $moduleName;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("invoice")
	 */
	protected $invoice;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("color")
	 */
	protected $color;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("logable")
	 */
	protected $logable;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("shipped")
	 */
	protected $shipped;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("paid")
	 */
	protected $paid;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("pdf_delivery")
	 */
	protected $pdfDelivery;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("pdf_invoice")
	 */
	protected $pdfInvoice;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("deleted")
	 */
	protected $deleted;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("name")
	 */
	protected $name;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("template")
	 */
	protected $template;

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
	 * @return bool
	 */
	public function isUnremovable(): ?bool
	{
		return $this->unremovable;
	}

	/**
	 * @param bool $unremovable
	 * @return $this
	 */
	public function setUnremovable(?bool $unremovable)
	{
		$this->unremovable = $unremovable;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isDelivery(): ?bool
	{
		return $this->delivery;
	}

	/**
	 * @param bool $delivery
	 * @return $this
	 */
	public function setDelivery(?bool $delivery)
	{
		$this->delivery = $delivery;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isHidden(): ?bool
	{
		return $this->hidden;
	}

	/**
	 * @param bool $hidden
	 * @return $this
	 */
	public function setHidden(?bool $hidden)
	{
		$this->hidden = $hidden;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isSendEmail(): ?bool
	{
		return $this->sendEmail;
	}

	/**
	 * @param bool $sendEmail
	 * @return $this
	 */
	public function setSendEmail(?bool $sendEmail)
	{
		$this->sendEmail = $sendEmail;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getModuleName(): ?string
	{
		return $this->moduleName;
	}

	/**
	 * @param string $moduleName
	 * @return $this
	 */
	public function setModuleName(?string $moduleName)
	{
		$this->moduleName = $moduleName;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isInvoice(): ?bool
	{
		return $this->invoice;
	}

	/**
	 * @param bool $invoice
	 * @return $this
	 */
	public function setInvoice(?bool $invoice)
	{
		$this->invoice = $invoice;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getColor(): ?string
	{
		return $this->color;
	}

	/**
	 * @param string $color
	 * @return $this
	 */
	public function setColor(?string $color)
	{
		$this->color = $color;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isLogable(): ?bool
	{
		return $this->logable;
	}

	/**
	 * @param bool $logable
	 * @return $this
	 */
	public function setLogable(?bool $logable)
	{
		$this->logable = $logable;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isShipped(): ?bool
	{
		return $this->shipped;
	}

	/**
	 * @param bool $shipped
	 * @return $this
	 */
	public function setShipped(?bool $shipped)
	{
		$this->shipped = $shipped;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isPaid(): ?bool
	{
		return $this->paid;
	}

	/**
	 * @param bool $paid
	 * @return $this
	 */
	public function setPaid(?bool $paid)
	{
		$this->paid = $paid;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isPdfDelivery(): ?bool
	{
		return $this->pdfDelivery;
	}

	/**
	 * @param bool $pdfDelivery
	 * @return $this
	 */
	public function setPdfDelivery(?bool $pdfDelivery)
	{
		$this->pdfDelivery = $pdfDelivery;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isPdfInvoice(): ?bool
	{
		return $this->pdfInvoice;
	}

	/**
	 * @param bool $pdfInvoice
	 * @return $this
	 */
	public function setPdfInvoice(?bool $pdfInvoice)
	{
		$this->pdfInvoice = $pdfInvoice;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isDeleted(): ?bool
	{
		return $this->deleted;
	}

	/**
	 * @param bool $deleted
	 * @return $this
	 */
	public function setDeleted(?bool $deleted)
	{
		$this->deleted = $deleted;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return $this
	 */
	public function setName(?string $name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTemplate(): ?string
	{
		return $this->template;
	}

	/**
	 * @param string $template
	 * @return $this
	 */
	public function setTemplate(?string $template)
	{
		$this->template = $template;
		return $this;
	}
}
