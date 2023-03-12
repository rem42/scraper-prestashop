<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrder
{
    public PrestashopAssociations $associations;
    public ?int $id = null;
    public ?int $idAddressDelivery = null;
    public ?int $idAddressInvoice = null;
    public ?int $idCart = null;
    public ?int $idCurrency = null;
    public ?int $idLang = null;
    public ?int $idCustomer = null;
    public ?int $idCarrier = null;
    public ?int $currentState = null;
    public ?string $module = null;
    public ?string $invoiceNumber = null;
    public ?\DateTime $invoiceDate = null;
    public ?string $deliveryNumber = null;
    public ?\DateTime $deliveryDate = null;
    public ?string $valid = null;
    public ?\DateTime $dateAdd = null;
    public ?\DateTime $dateUpd = null;
    public ?string $shippingNumber = null;
    public ?int $idShopGroup = null;
    public ?int $idShop = null;
    public ?string $secureKey = null;
    public ?string $payment = null;
    public ?bool $recyclable = null;
    public ?bool $gift = null;
    public ?string $giftMessage = null;
    public ?bool $mobileTheme = null;
    public ?float $totalDiscounts = null;
    public ?float $totalDiscountsTaxIncl = null;
    public ?float $totalDiscountsTaxExcl = null;
    public ?float $totalPaid = null;
    public ?float $totalPaidTaxIncl = null;
    public ?float $totalPaidTaxExcl = null;
    public ?float $totalPaidReal = null;
    public ?float $totalProducts = null;
    public ?float $totalProductsWt = null;
    public ?float $totalShipping = null;
    public ?float $totalShippingTaxIncl = null;
    public ?float $totalShippingTaxExcl = null;
    public ?float $carrierTaxRate = null;
    public ?float $totalWrapping = null;
    public ?float $totalWrappingTaxIncl = null;
    public ?float $totalWrappingTaxExcl = null;
    public ?int $roundMode = null;
    public ?int $roundType = null;
    public ?float $conversionRate = null;
    public ?string $reference = null;

    public function setAssociations(PrestashopAssociations $associations): self
    {
        $this->associations = $associations;
        return $this;
    }

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

    public function setIdCart(?int $idCart): self
    {
        $this->idCart = $idCart;
        return $this;
    }

    public function setIdCurrency(?int $idCurrency): self
    {
        $this->idCurrency = $idCurrency;
        return $this;
    }

    public function setIdLang(?int $idLang): self
    {
        $this->idLang = $idLang;
        return $this;
    }

    public function setIdCustomer(?int $idCustomer): self
    {
        $this->idCustomer = $idCustomer;
        return $this;
    }

    public function setIdCarrier(?int $idCarrier): self
    {
        $this->idCarrier = $idCarrier;
        return $this;
    }

    public function setCurrentState(?int $currentState): self
    {
        $this->currentState = $currentState;
        return $this;
    }

    public function setModule(?string $module): self
    {
        $this->module = $module;
        return $this;
    }

    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    public function setInvoiceDate(?\DateTime $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    public function setDeliveryNumber(?string $deliveryNumber): self
    {
        $this->deliveryNumber = $deliveryNumber;
        return $this;
    }

    public function setDeliveryDate(?\DateTime $deliveryDate): self
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    public function setValid(?string $valid): self
    {
        $this->valid = $valid;
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

    public function setShippingNumber(?string $shippingNumber): self
    {
        $this->shippingNumber = $shippingNumber;
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

    public function setSecureKey(?string $secureKey): self
    {
        $this->secureKey = $secureKey;
        return $this;
    }

    public function setPayment(?string $payment): self
    {
        $this->payment = $payment;
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

    public function setTotalDiscounts(?float $totalDiscounts): self
    {
        $this->totalDiscounts = $totalDiscounts;
        return $this;
    }

    public function setTotalDiscountsTaxIncl(?float $totalDiscountsTaxIncl): self
    {
        $this->totalDiscountsTaxIncl = $totalDiscountsTaxIncl;
        return $this;
    }

    public function setTotalDiscountsTaxExcl(?float $totalDiscountsTaxExcl): self
    {
        $this->totalDiscountsTaxExcl = $totalDiscountsTaxExcl;
        return $this;
    }

    public function setTotalPaid(?float $totalPaid): self
    {
        $this->totalPaid = $totalPaid;
        return $this;
    }

    public function setTotalPaidTaxIncl(?float $totalPaidTaxIncl): self
    {
        $this->totalPaidTaxIncl = $totalPaidTaxIncl;
        return $this;
    }

    public function setTotalPaidTaxExcl(?float $totalPaidTaxExcl): self
    {
        $this->totalPaidTaxExcl = $totalPaidTaxExcl;
        return $this;
    }

    public function setTotalPaidReal(?float $totalPaidReal): self
    {
        $this->totalPaidReal = $totalPaidReal;
        return $this;
    }

    public function setTotalProducts(?float $totalProducts): self
    {
        $this->totalProducts = $totalProducts;
        return $this;
    }

    public function setTotalProductsWt(?float $totalProductsWt): self
    {
        $this->totalProductsWt = $totalProductsWt;
        return $this;
    }

    public function setTotalShipping(?float $totalShipping): self
    {
        $this->totalShipping = $totalShipping;
        return $this;
    }

    public function setTotalShippingTaxIncl(?float $totalShippingTaxIncl): self
    {
        $this->totalShippingTaxIncl = $totalShippingTaxIncl;
        return $this;
    }

    public function setTotalShippingTaxExcl(?float $totalShippingTaxExcl): self
    {
        $this->totalShippingTaxExcl = $totalShippingTaxExcl;
        return $this;
    }

    public function setCarrierTaxRate(?float $carrierTaxRate): self
    {
        $this->carrierTaxRate = $carrierTaxRate;
        return $this;
    }

    public function setTotalWrapping(?float $totalWrapping): self
    {
        $this->totalWrapping = $totalWrapping;
        return $this;
    }

    public function setTotalWrappingTaxIncl(?float $totalWrappingTaxIncl): self
    {
        $this->totalWrappingTaxIncl = $totalWrappingTaxIncl;
        return $this;
    }

    public function setTotalWrappingTaxExcl(?float $totalWrappingTaxExcl): self
    {
        $this->totalWrappingTaxExcl = $totalWrappingTaxExcl;
        return $this;
    }

    public function setRoundMode(?int $roundMode): self
    {
        $this->roundMode = $roundMode;
        return $this;
    }

    public function setRoundType(?int $roundType): self
    {
        $this->roundType = $roundType;
        return $this;
    }

    public function setConversionRate(?float $conversionRate): self
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }
}
