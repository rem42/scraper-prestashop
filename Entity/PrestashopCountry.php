<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopCountry
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
     * @Serializer\SerializedName("id_currency")
     */
    protected $idCurrency;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("call_prefix")
     */
    protected $callPrefix;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("iso_code")
     */
    protected $isoCode;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    protected $active;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("contains_states")
     */
    protected $containsStates;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("need_identification_number")
     */
    protected $needIdentificationNumber;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("need_zip_code")
     */
    protected $needZipCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("zip_code_format")
     */
    protected $zipCodeFormat;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("display_tax_label")
     */
    protected $displayTaxLabel;
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
    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

    /**
     * @param int $idCurrency
     *
     * @return $this
     */
    public function setIdCurrency(?int $idCurrency)
    {
        $this->idCurrency = $idCurrency;
        return $this;
    }

    /**
     * @return int
     */
    public function getCallPrefix(): ?int
    {
        return $this->callPrefix;
    }

    /**
     * @param int $callPrefix
     *
     * @return $this
     */
    public function setCallPrefix(?int $callPrefix)
    {
        $this->callPrefix = $callPrefix;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     *
     * @return $this
     */
    public function setIsoCode(?string $isoCode)
    {
        $this->isoCode = $isoCode;
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

    /**
     * @return bool
     */
    public function isContainsStates(): ?bool
    {
        return $this->containsStates;
    }

    /**
     * @param bool $containsStates
     *
     * @return $this
     */
    public function setContainsStates(?bool $containsStates)
    {
        $this->containsStates = $containsStates;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNeedIdentificationNumber(): ?bool
    {
        return $this->needIdentificationNumber;
    }

    /**
     * @param bool $needIdentificationNumber
     *
     * @return $this
     */
    public function setNeedIdentificationNumber(?bool $needIdentificationNumber)
    {
        $this->needIdentificationNumber = $needIdentificationNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getNeedZipCode(): ?string
    {
        return $this->needZipCode;
    }

    /**
     * @param string $needZipCode
     *
     * @return $this
     */
    public function setNeedZipCode(?string $needZipCode)
    {
        $this->needZipCode = $needZipCode;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisplayTaxLabel(): ?bool
    {
        return $this->displayTaxLabel;
    }

    /**
     * @param bool $displayTaxLabel
     *
     * @return $this
     */
    public function setDisplayTaxLabel(?bool $displayTaxLabel)
    {
        $this->displayTaxLabel = $displayTaxLabel;
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
