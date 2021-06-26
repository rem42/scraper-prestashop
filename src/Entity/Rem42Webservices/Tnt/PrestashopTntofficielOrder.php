<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt;

final class PrestashopTntofficielOrder
{
    private ?int $id = null;

    private ?int $idOrder = null;

    private ?PrestashopTntOfficielDeliveryPoint $deliveryPoint = null;

    private ?bool $isShipped = null;

    private ?string $pickupNumber = null;

    private ?\DateTimeInterface $shippingDate = null;

    private ?string $dueDate = null;

    private ?\DateTimeInterface $startDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getDeliveryPoint(): ?PrestashopTntOfficielDeliveryPoint
    {
        return $this->deliveryPoint;
    }

    public function setDeliveryPoint(?PrestashopTntOfficielDeliveryPoint $deliveryPoint): self
    {
        $this->deliveryPoint = $deliveryPoint;

        return $this;
    }

    public function getIsShipped(): ?bool
    {
        return $this->isShipped;
    }

    public function setIsShipped(?bool $isShipped): self
    {
        $this->isShipped = $isShipped;

        return $this;
    }

    public function getPickupNumber(): ?string
    {
        return $this->pickupNumber;
    }

    public function setPickupNumber(?string $pickupNumber): self
    {
        $this->pickupNumber = $pickupNumber;

        return $this;
    }

    public function getShippingDate(): ?\DateTimeInterface
    {
        return $this->shippingDate;
    }

    public function setShippingDate(?\DateTimeInterface $shippingDate): self
    {
        $this->shippingDate = $shippingDate;

        return $this;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function setDueDate(?string $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }
}
