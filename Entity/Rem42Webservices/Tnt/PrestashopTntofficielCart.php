<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt;

use JMS\Serializer\Annotation as Serializer;

class PrestashopTntofficielCart
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
     * @Serializer\SerializedName("id_cart")
     */
    protected $idCart;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("carrier_code")
     */
    protected $carrierCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("delivery_point")
     */
    protected $deliveryPoint;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("customer_email")
     */
    protected $email;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("customer_mobile")
     */
    protected $mobile;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address_building")
     */
    protected $building;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address_accesscode")
     */
    protected $accessCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address_floor")
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
    public function getIdCart(): ?int
    {
        return $this->idCart;
    }

    /**
     * @param int $idCart
     *
     * @return $this
     */
    public function setIdCart(?int $idCart)
    {
        $this->idCart = $idCart;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }

    /**
     * @param string $carrierCode
     *
     * @return $this
     */
    public function setCarrierCode(?string $carrierCode)
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPoint(): ?string
    {
        return $this->deliveryPoint;
    }

    /**
     * @param string $deliveryPoint
     *
     * @return $this
     */
    public function setDeliveryPoint(?string $deliveryPoint)
    {
        $this->deliveryPoint = $deliveryPoint;
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
