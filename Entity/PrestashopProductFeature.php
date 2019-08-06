<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopProductFeature
{
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    protected $id;
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_feature_value")
     */
    protected $idFeatureValue;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("position")
     */
    protected $position;
    /**
     * @var ArrayCollection|PrestashopItem[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopItem>")
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
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdFeatureValue(): ?int
    {
        return $this->idFeatureValue;
    }

    /**
     * @param int $idFeatureValue
     *
     * @return $this
     */
    public function setIdFeatureValue(?int $idFeatureValue): self
    {
        $this->idFeatureValue = $idFeatureValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return $this
     */
    public function setPosition(?string $position): self
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
}
