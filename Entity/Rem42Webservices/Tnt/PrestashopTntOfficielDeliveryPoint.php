<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopTntOfficielDeliveryPoint
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("xett")
     */
    protected $xett;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pex")
     */
    protected $pex;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     */
    protected $city;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("postcode")
     */
    protected $postcode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address")
     */
    protected $address;
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
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection")
     * @Serializer\SerializedName("schedule")
     */
    protected $schedule;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("latitude")
     */
    protected $latitude;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("longitude")
     */
    protected $longitude;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("enabled")
     */
    protected $enabled;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("closing")
     */
    protected $closing;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("reopening")
     */
    protected $reopening;

    /**
     * @return string
     */
    public function getXett(): ?string
    {
        return $this->xett;
    }

    /**
     * @param string $xett
     *
     * @return $this
     */
    public function setXett(?string $xett)
    {
        $this->xett = $xett;
        return $this;
    }

    /**
     * @return string
     */
    public function getPex(): ?string
    {
        return $this->pex;
    }

    /**
     * @param string $pex
     *
     * @return $this
     */
    public function setPex(?string $pex)
    {
        $this->pex = $pex;
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
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     *
     * @return $this
     */
    public function setPostcode(?string $postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress(?string $address)
    {
        $this->address = $address;
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
     * @return ArrayCollection
     */
    public function getSchedule(): ?ArrayCollection
    {
        return $this->schedule;
    }

    /**
     * @param ArrayCollection $schedule
     *
     * @return $this
     */
    public function setSchedule(?ArrayCollection $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     *
     * @return $this
     */
    public function setLatitude(?string $latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     *
     * @return $this
     */
    public function setLongitude(?string $longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     *
     * @return $this
     */
    public function setEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getClosing(): ?string
    {
        return $this->closing;
    }

    /**
     * @param string $closing
     *
     * @return $this
     */
    public function setClosing(?string $closing)
    {
        $this->closing = $closing;
        return $this;
    }

    /**
     * @return string
     */
    public function getReopening(): ?string
    {
        return $this->reopening;
    }

    /**
     * @param string $reopening
     *
     * @return $this
     */
    public function setReopening(?string $reopening)
    {
        $this->reopening = $reopening;
        return $this;
    }
}
