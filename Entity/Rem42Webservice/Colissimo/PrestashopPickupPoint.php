<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservice\Colissimo;

use JMS\Serializer\Annotation as Serializer;

class PrestashopPickupPoint
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
     * @Serializer\SerializedName("colissimo_id")
     */
    protected $colissimoId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("company_name")
     */
    protected $companyName;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address1")
     */
    protected $address1;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address2")
     */
    protected $address2;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address3")
     */
    protected $address3;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     */
    protected $city;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("zipcode")
     */
    protected $zipcode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("country")
     */
    protected $country;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("iso_country")
     */
    protected $isoCountry;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("product_code")
     */
    protected $productCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("network")
     */
    protected $network;
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
     * @return string
     */
    public function getColissimoId(): ?string
    {
        return $this->colissimoId;
    }

    /**
     * @param string $colissimoId
     *
     * @return $this
     */
    public function setColissimoId(?string $colissimoId)
    {
        $this->colissimoId = $colissimoId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     *
     * @return $this
     */
    public function setAddress1(?string $address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     *
     * @return $this
     */
    public function setAddress2(?string $address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress3(): ?string
    {
        return $this->address3;
    }

    /**
     * @param string $address3
     *
     * @return $this
     */
    public function setAddress3(?string $address3)
    {
        $this->address3 = $address3;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity(?string $city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     *
     * @return $this
     */
    public function setZipcode(?string $zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry(?string $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsoCountry(): ?string
    {
        return $this->isoCountry;
    }

    /**
     * @param string $isoCountry
     *
     * @return $this
     */
    public function setIsoCountry(?string $isoCountry)
    {
        $this->isoCountry = $isoCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function setProductCode(?string $productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getNetwork(): ?string
    {
        return $this->network;
    }

    /**
     * @param string $network
     *
     * @return $this
     */
    public function setNetwork(?string $network)
    {
        $this->network = $network;
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

    /**
     * @return \DateTime
     */
    public function getDateUpd(): ?\DateTime
    {
        return $this->dateUpd;
    }

    /**
     * @param \DateTime $dateUpd
     *
     * @return $this
     */
    public function setDateUpd(?\DateTime $dateUpd)
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }
}
