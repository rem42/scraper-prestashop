<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopProductOption
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
	 * @Serializer\SerializedName("is_color_group")
	 */
	protected $isColorGroup;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("group_type")
	 */
	protected $groupType;
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
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("public_name")
	 */
	protected $publicName;
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
	 * @return bool
	 */
	public function isColorGroup(): ?bool
	{
		return $this->isColorGroup;
	}

	/**
	 * @param bool $isColorGroup
	 *
	 * @return $this
	 */
	public function setIsColorGroup(?bool $isColorGroup)
	{
		$this->isColorGroup = $isColorGroup;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getGroupType(): ?string
	{
		return $this->groupType;
	}

	/**
	 * @param string $groupType
	 *
	 * @return $this
	 */
	public function setGroupType(?string $groupType)
	{
		$this->groupType = $groupType;
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

	/**
	 * @return string
	 */
	public function getPublicName(): ?string
	{
		return $this->publicName;
	}

	/**
	 * @param string $publicName
	 *
	 * @return $this
	 */
	public function setPublicName(?string $publicName)
	{
		$this->publicName = $publicName;
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
