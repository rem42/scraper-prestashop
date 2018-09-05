<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopProductOptionValue
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
	 * @Serializer\SerializedName("id_attribute_group")
	 */
	protected $idAttributeGroup;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("color")
	 */
	protected $color;
	/**
	 * @var int
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("position")
	 */
	protected $position;
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
	public function getIdAttributeGroup(): ?int
	{
		return $this->idAttributeGroup;
	}

	/**
	 * @param int $idAttributeGroup
	 *
	 * @return $this
	 */
	public function setIdAttributeGroup(?int $idAttributeGroup)
	{
		$this->idAttributeGroup = $idAttributeGroup;
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
	 *
	 * @return $this
	 */
	public function setColor(?string $color)
	{
		$this->color = $color;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPosition(): ?int
	{
		return $this->position;
	}

	/**
	 * @param int $position
	 *
	 * @return $this
	 */
	public function setPosition(?int $position)
	{
		$this->position = $position;
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
	 *
	 * @return $this
	 */
	public function setName(?string $name)
	{
		$this->name = $name;
		return $this;
	}
}
