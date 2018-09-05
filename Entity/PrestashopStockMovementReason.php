<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopStockMovementReason
{
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id")
	 */
	protected $id;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("sign")
	 */
	protected $sign;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("deleted")
	 */
	protected $deleted;
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
	 * @Serializer\SerializedName("date_add")
	 */
	protected $dateAdd;
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
	 * @Serializer\SerializedName("date_upd")
	 */
	protected $dateUpd;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("name")
	 */
	protected $name;

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
	 * @return string
	 */
	public function getSign(): ?string
	{
		return $this->sign;
	}

	/**
	 * @param string $sign
	 * @return $this
	 */
	public function setSign(?string $sign)
	{
		$this->sign = $sign;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getDeleted(): ?int
	{
		return $this->deleted;
	}

	/**
	 * @param int $deleted
	 * @return $this
	 */
	public function setDeleted(?int $deleted)
	{
		$this->deleted = $deleted;
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

	/**
	 * @return \DateTime
	 */
	public function getDateUpd(): ?\DateTime
	{
		return $this->dateUpd;
	}

	/**
	 * @param \DateTime $dateUpd
	 * @return $this
	 */
	public function setDateUpd(?\DateTime $dateUpd)
	{
		$this->dateUpd = $dateUpd;
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
}
