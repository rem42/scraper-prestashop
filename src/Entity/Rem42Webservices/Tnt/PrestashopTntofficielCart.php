<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt;

final class PrestashopTntofficielCart
{
    private ?int $id = null;

    private ?int $idCart = null;

    private ?string $carrierCode = null;

    private ?string $deliveryPoint = null;

    private ?string $customerEmail = null;

    private ?string $customerMobile = null;

    private ?string $addressBuilding = null;

    private ?string $addressAccesscode = null;

    private ?string $addressFloor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdCart(): ?int
    {
        return $this->idCart;
    }

    public function setIdCart(?int $idCart): self
    {
        $this->idCart = $idCart;

        return $this;
    }

    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }

    public function setCarrierCode(?string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;

        return $this;
    }

    public function getDeliveryPoint(): ?string
    {
        return $this->deliveryPoint;
    }

    public function setDeliveryPoint(?string $deliveryPoint): self
    {
        $this->deliveryPoint = $deliveryPoint;

        return $this;
    }

    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    public function setCustomerEmail(?string $customerEmail): self
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    public function getCustomerMobile(): ?string
    {
        return $this->customerMobile;
    }

    public function setCustomerMobile(?string $customerMobile): self
    {
        $this->customerMobile = $customerMobile;

        return $this;
    }

    public function getAddressBuilding(): ?string
    {
        return $this->addressBuilding;
    }

    public function setAddressBuilding(?string $addressBuilding): self
    {
        $this->addressBuilding = $addressBuilding;

        return $this;
    }

    public function getAddressAccesscode(): ?string
    {
        return $this->addressAccesscode;
    }

    public function setAddressAccesscode(?string $addressAccesscode): self
    {
        $this->addressAccesscode = $addressAccesscode;

        return $this;
    }

    public function getAddressFloor(): ?string
    {
        return $this->addressFloor;
    }

    public function setAddressFloor(?string $addressFloor): self
    {
        $this->addressFloor = $addressFloor;

        return $this;
    }
}
