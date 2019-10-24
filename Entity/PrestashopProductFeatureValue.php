<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopProductFeatureValue
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
     * @Serializer\SerializedName("id_feature")
     */
    protected $idFeature;
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("custom")
     */
    protected $custom;
    /**
     * @var array
     * @Serializer\Type("array")
     * @Serializer\SerializedName("value")
     */
    protected $value;

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
     * @return string
     */
    public function getIdFeature(): ?string
    {
        return $this->idFeature;
    }

    /**
     * @param string $idFeature
     *
     * @return $this
     */
    public function setIdFeature(?string $idFeature): self
    {
        $this->idFeature = $idFeature;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCustom(): ?bool
    {
        return $this->custom;
    }

    /**
     * @param bool $custom
     *
     * @return $this
     */
    public function setCustom(?bool $custom): self
    {
        $this->custom = $custom;
        return $this;
    }

    /**
     * @return array
     */
    public function getValue(): ?array
    {
        return $this->value;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setValue(?array $value): self
    {
        $this->value = $value;
        return $this;
    }
}
