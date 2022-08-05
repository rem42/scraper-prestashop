<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCart
{
    public ?int $id = null;
    public ?int $idAddressDelivery = null;
    public ?int $idAddressInvoice = null;
    public ?int $idCurrency = null;
    public ?int $idCustomer = null;
    public ?int $idGuest = null;
    public ?int $idLang = null;
    public ?int $idShopGroup = null;
    public ?int $idShop = null;
    public ?int $idCarrier = null;
    public ?bool $recyclable = null;
    public ?bool $gift = null;
    public ?string $giftMessage = null;
    public ?bool $mobileTheme = null;
    public ?string $secureKey = null;
    public ?bool $allowSeperatedPackage = null;
    public ?\DateTime $dateAdd = null;
    public ?\DateTime $dateUpd = null;
    public ?PrestashopAssociations $associations = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdAddressDelivery(?int $idAddressDelivery): self
    {
        $this->idAddressDelivery = $idAddressDelivery;
        return $this;
    }

    public function setIdAddressInvoice(?int $idAddressInvoice): self
    {
        $this->idAddressInvoice = $idAddressInvoice;
        return $this;
    }

    public function setIdCurrency(?int $idCurrency): self
    {
        $this->idCurrency = $idCurrency;
        return $this;
    }

    public function setIdCustomer(?int $idCustomer): self
    {
        $this->idCustomer = $idCustomer;
        return $this;
    }

    public function setIdGuest(?int $idGuest): self
    {
        $this->idGuest = $idGuest;
        return $this;
    }

    public function setIdLang(?int $idLang): self
    {
        $this->idLang = $idLang;
        return $this;
    }

    public function setIdShopGroup(?int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;
        return $this;
    }

    public function setIdShop(?int $idShop): self
    {
        $this->idShop = $idShop;
        return $this;
    }

    public function setIdCarrier(?int $idCarrier): self
    {
        $this->idCarrier = $idCarrier;
        return $this;
    }

    public function setRecyclable(?bool $recyclable): self
    {
        $this->recyclable = $recyclable;
        return $this;
    }

    public function setGift(?bool $gift): self
    {
        $this->gift = $gift;
        return $this;
    }

    public function setGiftMessage(?string $giftMessage): self
    {
        $this->giftMessage = $giftMessage;
        return $this;
    }

    public function setMobileTheme(?bool $mobileTheme): self
    {
        $this->mobileTheme = $mobileTheme;
        return $this;
    }

    public function setSecureKey(?string $secureKey): self
    {
        $this->secureKey = $secureKey;
        return $this;
    }

    public function setAllowSeperatedPackage(?bool $allowSeperatedPackage): self
    {
        $this->allowSeperatedPackage = $allowSeperatedPackage;
        return $this;
    }

    public function setDateAdd(?\DateTime $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    public function setDateUpd(?\DateTime $dateUpd): self
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }

    public function setAssociations(?PrestashopAssociations $associations): self
    {
        $this->associations = $associations;
        return $this;
    }
}
