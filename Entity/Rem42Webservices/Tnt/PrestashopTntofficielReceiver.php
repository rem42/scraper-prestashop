<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt;

use JMS\Serializer\Annotation as Serializer;

class PrestashopTntofficielReceiver
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
     * @Serializer\SerializedName("id_address")
     */
    protected $idAddress;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("receiver_email")
     */
    protected $email;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("receiver_mobile")
     */
    protected $mobile;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("receiver_building")
     */
    protected $building;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("receiver_accesscode")
     */
    protected $accessCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("receiver_floor")
     */
    protected $floor;

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
    public function getIdAddress(): ?int
    {
        return $this->idAddress;
    }

    /**
     * @param int $idAddress
     *
     * @return $this
     */
    public function setIdAddress(?int $idAddress)
    {
        $this->idAddress = $idAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     *
     * @return $this
     */
    public function setMobile(?string $mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuilding(): ?string
    {
        return $this->building;
    }

    /**
     * @param string $building
     *
     * @return $this
     */
    public function setBuilding(?string $building)
    {
        $this->building = $building;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccessCode(): ?string
    {
        return $this->accessCode;
    }

    /**
     * @param string $accessCode
     *
     * @return $this
     */
    public function setAccessCode(?string $accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFloor(): ?string
    {
        return $this->floor;
    }

    /**
     * @param string $floor
     *
     * @return $this
     */
    public function setFloor(?string $floor)
    {
        $this->floor = $floor;
        return $this;
    }
}
