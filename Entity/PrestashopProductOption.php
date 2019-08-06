<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @var PrestashopItem[]|ArrayCollection
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopItem>")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    /**
     * @var PrestashopItem[]|ArrayCollection
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopItem>")
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
     * @return ArrayCollection|PrestashopItem[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param ArrayCollection|PrestashopItem[] $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return ArrayCollection|PrestashopItem[]
     */
    public function getPublicName()
    {
        return $this->publicName;
    }

    /**
     * @param ArrayCollection|PrestashopItem[] $publicName
     *
     * @return $this
     */
    public function setPublicName($publicName)
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
