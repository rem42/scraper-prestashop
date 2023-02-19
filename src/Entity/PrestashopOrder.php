<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrder
{
    private PrestashopAssociations $associations;

    private ?int $id = null;

    private ?int $idAddressDelivery = null;

    private ?int $idAddressInvoice = null;

    private ?int $idCart = null;

    private ?int $idCurrency = null;

    private ?int $idLang = null;

    private ?int $idCustomer = null;

    private ?int $idCarrier = null;

    private ?int $currentState = null;

    private ?string $module = null;

    private ?string $invoiceNumber = null;

    private ?\DateTime $invoiceDate = null;

    private ?string $deliveryNumber = null;

    private ?\DateTime $deliveryDate = null;

    private ?string $valid = null;

    private ?\DateTime $dateAdd = null;

    private ?\DateTime $dateUpd = null;

    private ?string $shippingNumber = null;

    private ?int $idShopGroup = null;

    private ?int $idShop = null;

    private ?string $secureKey = null;

    private ?string $payment = null;

    private ?bool $recyclable = null;

    private ?bool $gift = null;

    private ?string $giftMessage = null;

    private ?bool $mobileTheme = null;

    private ?float $totalDiscounts = null;

    private ?float $totalDiscountsTaxIncl = null;

    private ?float $totalDiscountsTaxExcl = null;

    private ?float $totalPaid = null;

    private ?float $totalPaidTaxIncl = null;

    private ?float $totalPaidTaxExcl = null;

    private ?float $totalPaidReal = null;

    private ?float $totalProducts = null;

    private ?float $totalProductsWt = null;

    private ?float $totalShipping = null;

    private ?float $totalShippingTaxIncl = null;

    private ?float $totalShippingTaxExcl = null;

    private ?float $carrierTaxRate = null;

    private ?float $totalWrapping = null;

    private ?float $totalWrappingTaxIncl = null;

    private ?float $totalWrappingTaxExcl = null;

    private ?int $roundMode = null;

    private ?int $roundType = null;

    private ?float $conversionRate = null;

    private ?string $reference = null;

    public function getAssociations(): PrestashopAssociations
    {
        return $this->associations;
    }

    public function setAssociations(PrestashopAssociations $associations): self
    {
        $this->associations = $associations;

        return $this;
    }

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

    public function getIdCart(): ?int
    {
        return $this->idCart;
    }

    public function setIdCart(?int $idCart): self
    {
        $this->idCart = $idCart;

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

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function setIdLang(?int $idLang): self
    {
        $this->idLang = $idLang;

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

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    public function setIdCarrier(?int $idCarrier): self
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    public function getCurrentState(): ?int
    {
        return $this->currentState;
    }

    public function setCurrentState(?int $currentState): self
    {
        $this->currentState = $currentState;

        return $this;
    }

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(?string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    public function getInvoiceDate(): ?\DateTime
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(?\DateTime $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getDeliveryNumber(): ?string
    {
        return $this->deliveryNumber;
    }

    public function setDeliveryNumber(?string $deliveryNumber): self
    {
        $this->deliveryNumber = $deliveryNumber;

        return $this;
    }

    public function getDeliveryDate(): ?\DateTime
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(?\DateTime $deliveryDate): self
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    public function getValid(): ?string
    {
        return $this->valid;
    }

    public function setValid(?string $valid): self
    {
        $this->valid = $valid;

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

    public function getShippingNumber(): ?string
    {
        return $this->shippingNumber;
    }

    public function setShippingNumber(?string $shippingNumber): self
    {
        $this->shippingNumber = $shippingNumber;

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

    public function getSecureKey(): ?string
    {
        return $this->secureKey;
    }

    public function setSecureKey(?string $secureKey): self
    {
        $this->secureKey = $secureKey;

        return $this;
    }

    public function getPayment(): ?string
    {
        return $this->payment;
    }

    public function setPayment(?string $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function isRecyclable(): ?bool
    {
        return $this->recyclable;
    }

    public function setRecyclable(?bool $recyclable): self
    {
        $this->recyclable = $recyclable;

        return $this;
    }

    public function isGift(): ?bool
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

    public function getTotalDiscounts(): ?float
    {
        return $this->totalDiscounts;
    }

    public function setTotalDiscounts(?float $totalDiscounts): self
    {
        $this->totalDiscounts = $totalDiscounts;

        return $this;
    }

    public function getTotalDiscountsTaxIncl(): ?float
    {
        return $this->totalDiscountsTaxIncl;
    }

    public function setTotalDiscountsTaxIncl(?float $totalDiscountsTaxIncl): self
    {
        $this->totalDiscountsTaxIncl = $totalDiscountsTaxIncl;

        return $this;
    }

    public function getTotalDiscountsTaxExcl(): ?float
    {
        return $this->totalDiscountsTaxExcl;
    }

    public function setTotalDiscountsTaxExcl(?float $totalDiscountsTaxExcl): self
    {
        $this->totalDiscountsTaxExcl = $totalDiscountsTaxExcl;

        return $this;
    }

    public function getTotalPaid(): ?float
    {
        return $this->totalPaid;
    }

    public function setTotalPaid(?float $totalPaid): self
    {
        $this->totalPaid = $totalPaid;

        return $this;
    }

    public function getTotalPaidTaxIncl(): ?float
    {
        return $this->totalPaidTaxIncl;
    }

    public function setTotalPaidTaxIncl(?float $totalPaidTaxIncl): self
    {
        $this->totalPaidTaxIncl = $totalPaidTaxIncl;

        return $this;
    }

    public function getTotalPaidTaxExcl(): ?float
    {
        return $this->totalPaidTaxExcl;
    }

    public function setTotalPaidTaxExcl(?float $totalPaidTaxExcl): self
    {
        $this->totalPaidTaxExcl = $totalPaidTaxExcl;

        return $this;
    }

    public function getTotalPaidReal(): ?float
    {
        return $this->totalPaidReal;
    }

    public function setTotalPaidReal(?float $totalPaidReal): self
    {
        $this->totalPaidReal = $totalPaidReal;

        return $this;
    }

    public function getTotalProducts(): ?float
    {
        return $this->totalProducts;
    }

    public function setTotalProducts(?float $totalProducts): self
    {
        $this->totalProducts = $totalProducts;

        return $this;
    }

    public function getTotalProductsWt(): ?float
    {
        return $this->totalProductsWt;
    }

    public function setTotalProductsWt(?float $totalProductsWt): self
    {
        $this->totalProductsWt = $totalProductsWt;

        return $this;
    }

    public function getTotalShipping(): ?float
    {
        return $this->totalShipping;
    }

    public function setTotalShipping(?float $totalShipping): self
    {
        $this->totalShipping = $totalShipping;

        return $this;
    }

    public function getTotalShippingTaxIncl(): ?float
    {
        return $this->totalShippingTaxIncl;
    }

    public function setTotalShippingTaxIncl(?float $totalShippingTaxIncl): self
    {
        $this->totalShippingTaxIncl = $totalShippingTaxIncl;

        return $this;
    }

    public function getTotalShippingTaxExcl(): ?float
    {
        return $this->totalShippingTaxExcl;
    }

    public function setTotalShippingTaxExcl(?float $totalShippingTaxExcl): self
    {
        $this->totalShippingTaxExcl = $totalShippingTaxExcl;

        return $this;
    }

    public function getCarrierTaxRate(): ?float
    {
        return $this->carrierTaxRate;
    }

    public function setCarrierTaxRate(?float $carrierTaxRate): self
    {
        $this->carrierTaxRate = $carrierTaxRate;

        return $this;
    }

    public function getTotalWrapping(): ?float
    {
        return $this->totalWrapping;
    }

    public function setTotalWrapping(?float $totalWrapping): self
    {
        $this->totalWrapping = $totalWrapping;

        return $this;
    }

    public function getTotalWrappingTaxIncl(): ?float
    {
        return $this->totalWrappingTaxIncl;
    }

    public function setTotalWrappingTaxIncl(?float $totalWrappingTaxIncl): self
    {
        $this->totalWrappingTaxIncl = $totalWrappingTaxIncl;

        return $this;
    }

    public function getTotalWrappingTaxExcl(): ?float
    {
        return $this->totalWrappingTaxExcl;
    }

    public function setTotalWrappingTaxExcl(?float $totalWrappingTaxExcl): self
    {
        $this->totalWrappingTaxExcl = $totalWrappingTaxExcl;

        return $this;
    }

    public function getRoundMode(): ?int
    {
        return $this->roundMode;
    }

    public function setRoundMode(?int $roundMode): self
    {
        $this->roundMode = $roundMode;

        return $this;
    }

    public function getRoundType(): ?int
    {
        return $this->roundType;
    }

    public function setRoundType(?int $roundType): self
    {
        $this->roundType = $roundType;

        return $this;
    }

    public function getConversionRate(): ?float
    {
        return $this->conversionRate;
    }

    public function setConversionRate(?float $conversionRate): self
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }
}
