<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopState
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
     * @Serializer\SerializedName("id_zone")
     */
    protected $idZone;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_country")
     */
    protected $idCountry;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("iso_code")
     */
    protected $isoCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    protected $active;

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
    public function getIdZone(): ?int
    {
        return $this->idZone;
    }

    /**
     * @param int $idZone
     *
     * @return $this
     */
    public function setIdZone(?int $idZone)
    {
        $this->idZone = $idZone;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }

    /**
     * @param int $idCountry
     *
     * @return $this
     */
    public function setIdCountry(?int $idCountry)
    {
        $this->idCountry = $idCountry;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsoCode(): ?int
    {
        return $this->isoCode;
    }

    /**
     * @param int $isoCode
     *
     * @return $this
     */
    public function setIsoCode(?int $isoCode)
    {
        $this->isoCode = $isoCode;
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
     * @return bool
     */
    public function isActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return $this
     */
    public function setActive(?bool $active)
    {
        $this->active = $active;
        return $this;
    }
}
