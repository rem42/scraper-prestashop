<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt;

use JMS\Serializer\Annotation as Serializer;

class PrestashopTntofficielOrder
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
     * @Serializer\SerializedName("id_order")
     */
    protected $idOrder;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("delivery_point")
     */
    protected $deliveryPoint;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("is_shipped")
     */
    protected $isShipped;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pickup_number")
     */
    protected $pickupNumber;
    /**
     * @var string
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\SerializedName("shipping_date")
     */
    protected $shippingDate;
    /**
     * @var string
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\SerializedName("due_date")
     */
    protected $dueDate;
    /**
     * @var string
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\SerializedName("start_date")
     */
    protected $startDate;

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
    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    /**
     * @param int $idOrder
     *
     * @return $this
     */
    public function setIdOrder(?int $idOrder)
    {
        $this->idOrder = $idOrder;
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
     * @return bool
     */
    public function isShipped(): ?bool
    {
        return $this->isShipped;
    }

    /**
     * @param bool $isShipped
     *
     * @return $this
     */
    public function setIsShipped(?bool $isShipped)
    {
        $this->isShipped = $isShipped;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupNumber(): ?string
    {
        return $this->pickupNumber;
    }

    /**
     * @param string $pickupNumber
     *
     * @return $this
     */
    public function setPickupNumber(?string $pickupNumber)
    {
        $this->pickupNumber = $pickupNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }

    /**
     * @param string $shippingDate
     *
     * @return $this
     */
    public function setShippingDate(?string $shippingDate)
    {
        $this->shippingDate = $shippingDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     *
     * @return $this
     */
    public function setDueDate(?string $dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     *
     * @return $this
     */
    public function setStartDate(?string $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }
}
