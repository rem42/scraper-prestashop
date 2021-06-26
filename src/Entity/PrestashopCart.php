<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCart
{
    private ?int $id = null;

    private ?int $idAddressDelivery = null;

    private ?int $idAddressInvoice = null;

    private ?int $idCurrency = null;

    private ?int $idCustomer = null;

    private ?int $idGuest = null;

    private ?int $idLang = null;

    private ?int $idShopGroup = null;

    private ?int $idShop = null;

    private ?int $idCarrier = null;

    private ?bool $recyclable = null;

    private ?bool $gift = null;

    private ?string $giftMessage = null;

    private ?bool $mobileTheme = null;

    private ?string $secureKey = null;

    private ?bool $allowSeperatedPackage = null;

    private ?\DateTime $dateAdd = null;

    private ?\DateTime $dateUpd = null;

    private ?PrestashopAssociations $associations = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdAddressDelivery(): ?int
    {
        return $this->idAddressDelivery;
    }

    public function setIdAddressDelivery(?int $idAddressDelivery): self
    {
        $this->idAddressDelivery = $idAddressDelivery;

        return $this;
    }

    public function getIdAddressInvoice(): ?int
    {
        return $this->idAddressInvoice;
    }

    public function setIdAddressInvoice(?int $idAddressInvoice): self
    {
        $this->idAddressInvoice = $idAddressInvoice;

        return $this;
    }

    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

    public function setIdCurrency(?int $idCurrency): self
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }

    public function setIdCustomer(?int $idCustomer): self
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    public function getIdGuest(): ?int
    {
        return $this->idGuest;
    }

    public function setIdGuest(?int $idGuest): self
    {
        $this->idGuest = $idGuest;

        return $this;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function setIdLang(?int $idLang): self
    {
        $this->idLang = $idLang;

        return $this;
    }

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    public function setIdShopGroup(?int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(?int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
    }

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    public function setIdCarrier(?int $idCarrier): self
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    public function getRecyclable(): ?bool
    {
        return $this->recyclable;
    }

    public function setRecyclable(?bool $recyclable): self
    {
        $this->recyclable = $recyclable;

        return $this;
    }

    public function getGift(): ?bool
    {
        return $this->gift;
    }

    public function setGift(?bool $gift): self
    {
        $this->gift = $gift;

        return $this;
    }

    public function getGiftMessage(): ?string
    {
        return $this->giftMessage;
    }

    public function setGiftMessage(?string $giftMessage): self
    {
        $this->giftMessage = $giftMessage;

        return $this;
    }

    public function getMobileTheme(): ?bool
    {
        return $this->mobileTheme;
    }

    public function setMobileTheme(?bool $mobileTheme): self
    {
        $this->mobileTheme = $mobileTheme;

        return $this;
    }

    public function getSecureKey(): ?string
    {
        return $this->secureKey;
    }

    public function setSecureKey(?string $secureKey): self
    {
        $this->secureKey = $secureKey;

        return $this;
    }

    public function getAllowSeperatedPackage(): ?bool
    {
        return $this->allowSeperatedPackage;
    }

    public function setAllowSeperatedPackage(?bool $allowSeperatedPackage): self
    {
        $this->allowSeperatedPackage = $allowSeperatedPackage;

        return $this;
    }

    public function getDateAdd(): ?\DateTime
    {
        return $this->dateAdd;
    }

    public function setDateAdd(?\DateTime $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getDateUpd(): ?\DateTime
    {
        return $this->dateUpd;
    }

    public function setDateUpd(?\DateTime $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    public function getAssociations(): ?PrestashopAssociations
    {
        return $this->associations;
    }

    public function setAssociations(?PrestashopAssociations $associations): self
    {
        $this->associations = $associations;

        return $this;
    }
}
