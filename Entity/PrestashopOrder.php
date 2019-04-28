<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopOrder
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
     * @Serializer\SerializedName("id_address_delivery")
     */
    protected $idAddressDelivery;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_address_invoice")
     */
    protected $idAddressInvoice;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_cart")
     */
    protected $idCart;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_currency")
     */
    protected $idCurrency;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_lang")
     */
    protected $idLang;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_customer")
     */
    protected $idCustomer;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_carrier")
     */
    protected $idCarrier;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("current_state")
     */
    protected $currentState;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("module")
     */
    protected $module;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("invoice_number")
     */
    protected $invoiceNumber;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("invoice_date")
     */
    protected $invoiceDate;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("delivery_number")
     */
    protected $deliveryNumber;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("delivery_date")
     */
    protected $deliveryDate;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("valid")
     */
    protected $valid;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("date_add")
     */
    protected $dateAdd;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("date_upd")
     */
    protected $dateUpd;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipping_number")
     */
    protected $shippingNumber;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_shop_group")
     */
    protected $idShopGroup;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_shop")
     */
    protected $idShop;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("secure_key")
     */
    protected $secureKey;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("payment")
     */
    protected $payment;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("recyclable")
     */
    protected $recyclable;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("gift")
     */
    protected $gift;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("gift_message")
     */
    protected $giftMessage;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("mobile_theme")
     */
    protected $mobileTheme;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_discounts")
     */
    protected $totalDiscounts;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_discounts_tax_incl")
     */
    protected $totalDiscountsTaxIncl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_discounts_tax_excl")
     */
    protected $totalDiscountsTaxExcl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_paid")
     */
    protected $totalPaid;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_paid_tax_incl")
     */
    protected $totalPaidTaxIncl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_paid_tax_excl")
     */
    protected $totalPaidTaxExcl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_paid_real")
     */
    protected $totalPaidReal;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_products")
     */
    protected $totalProducts;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_products_wt")
     */
    protected $totalProductsWt;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_shipping")
     */
    protected $totalShipping;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_shipping_tax_incl")
     */
    protected $totalShippingTaxIncl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_shipping_tax_excl")
     */
    protected $totalShippingTaxExcl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("carrier_tax_rate")
     */
    protected $carrierTaxRate;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_wrapping")
     */
    protected $totalWrapping;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_wrapping_tax_incl")
     */
    protected $totalWrappingTaxIncl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_wrapping_tax_excl")
     */
    protected $totalWrappingTaxExcl;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("round_mode")
     */
    protected $roundMode;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("round_type")
     */
    protected $roundType;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("conversion_rate")
     */
    protected $conversionRate;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("reference")
     */
    protected $reference;
    /**
     * @var PrestashopAssociations
     * @Serializer\Type("Scraper\ScraperPrestashop\Entity\PrestashopAssociations")
     * @Serializer\SerializedName("associations")
     */
    protected $associations;

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
    public function getIdAddressDelivery(): ?int
    {
        return $this->idAddressDelivery;
    }

    /**
     * @param int $idAddressDelivery
     *
     * @return $this
     */
    public function setIdAddressDelivery(?int $idAddressDelivery)
    {
        $this->idAddressDelivery = $idAddressDelivery;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdAddressInvoice(): ?int
    {
        return $this->idAddressInvoice;
    }

    /**
     * @param int $idAddressInvoice
     *
     * @return $this
     */
    public function setIdAddressInvoice(?int $idAddressInvoice)
    {
        $this->idAddressInvoice = $idAddressInvoice;
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
     * @return int
     */
    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

    /**
     * @param int $idCurrency
     *
     * @return $this
     */
    public function setIdCurrency(?int $idCurrency)
    {
        $this->idCurrency = $idCurrency;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    /**
     * @param int $idLang
     *
     * @return $this
     */
    public function setIdLang(?int $idLang)
    {
        $this->idLang = $idLang;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }

    /**
     * @param int $idCustomer
     *
     * @return $this
     */
    public function setIdCustomer(?int $idCustomer)
    {
        $this->idCustomer = $idCustomer;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    /**
     * @param int $idCarrier
     *
     * @return $this
     */
    public function setIdCarrier(?int $idCarrier)
    {
        $this->idCarrier = $idCarrier;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentState(): ?int
    {
        return $this->currentState;
    }

    /**
     * @param int $currentState
     *
     * @return $this
     */
    public function setCurrentState(?int $currentState)
    {
        $this->currentState = $currentState;
        return $this;
    }

    /**
     * @return string
     */
    public function getModule(): ?string
    {
        return $this->module;
    }

    /**
     * @param string $module
     *
     * @return $this
     */
    public function setModule(?string $module)
    {
        $this->module = $module;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber(?string $invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate(): ?\DateTime
    {
        return $this->invoiceDate;
    }

    /**
     * @param \DateTime $invoiceDate
     *
     * @return $this
     */
    public function setInvoiceDate(?\DateTime $invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNumber(): ?string
    {
        return $this->deliveryNumber;
    }

    /**
     * @param string $deliveryNumber
     *
     * @return $this
     */
    public function setDeliveryNumber(?string $deliveryNumber)
    {
        $this->deliveryNumber = $deliveryNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate(): ?\DateTime
    {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTime $deliveryDate
     *
     * @return $this
     */
    public function setDeliveryDate(?\DateTime $deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getValid(): ?string
    {
        return $this->valid;
    }

    /**
     * @param string $valid
     *
     * @return $this
     */
    public function setValid(?string $valid)
    {
        $this->valid = $valid;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdd(): ?\DateTime
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTime $dateAdd
     *
     * @return $this
     */
    public function setDateAdd(?\DateTime $dateAdd)
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpd(): ?\DateTime
    {
        return $this->dateUpd;
    }

    /**
     * @param \DateTime $dateUpd
     *
     * @return $this
     */
    public function setDateUpd(?\DateTime $dateUpd)
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingNumber(): ?string
    {
        return $this->shippingNumber;
    }

    /**
     * @param string $shippingNumber
     *
     * @return $this
     */
    public function setShippingNumber(?string $shippingNumber)
    {
        $this->shippingNumber = $shippingNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    /**
     * @param int $idShopGroup
     *
     * @return $this
     */
    public function setIdShopGroup(?int $idShopGroup)
    {
        $this->idShopGroup = $idShopGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    /**
     * @param int $idShop
     *
     * @return $this
     */
    public function setIdShop(?int $idShop)
    {
        $this->idShop = $idShop;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecureKey(): ?string
    {
        return $this->secureKey;
    }

    /**
     * @param string $secureKey
     *
     * @return $this
     */
    public function setSecureKey(?string $secureKey)
    {
        $this->secureKey = $secureKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayment(): ?string
    {
        return $this->payment;
    }

    /**
     * @param string $payment
     *
     * @return $this
     */
    public function setPayment(?string $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRecyclable(): ?bool
    {
        return $this->recyclable;
    }

    /**
     * @param bool $recyclable
     *
     * @return $this
     */
    public function setRecyclable(?bool $recyclable)
    {
        $this->recyclable = $recyclable;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGift(): ?bool
    {
        return $this->gift;
    }

    /**
     * @param bool $gift
     *
     * @return $this
     */
    public function setGift(?bool $gift)
    {
        $this->gift = $gift;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftMessage(): ?string
    {
        return $this->giftMessage;
    }

    /**
     * @param string $giftMessage
     *
     * @return $this
     */
    public function setGiftMessage(?string $giftMessage)
    {
        $this->giftMessage = $giftMessage;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMobileTheme(): ?bool
    {
        return $this->mobileTheme;
    }

    /**
     * @param bool $mobileTheme
     *
     * @return $this
     */
    public function setMobileTheme(?bool $mobileTheme)
    {
        $this->mobileTheme = $mobileTheme;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscounts(): ?float
    {
        return $this->totalDiscounts;
    }

    /**
     * @param float $totalDiscounts
     *
     * @return $this
     */
    public function setTotalDiscounts(?float $totalDiscounts)
    {
        $this->totalDiscounts = $totalDiscounts;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscountsTaxIncl(): ?float
    {
        return $this->totalDiscountsTaxIncl;
    }

    /**
     * @param float $totalDiscountsTaxIncl
     *
     * @return $this
     */
    public function setTotalDiscountsTaxIncl(?float $totalDiscountsTaxIncl)
    {
        $this->totalDiscountsTaxIncl = $totalDiscountsTaxIncl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscountsTaxExcl(): ?float
    {
        return $this->totalDiscountsTaxExcl;
    }

    /**
     * @param float $totalDiscountsTaxExcl
     *
     * @return $this
     */
    public function setTotalDiscountsTaxExcl(?float $totalDiscountsTaxExcl)
    {
        $this->totalDiscountsTaxExcl = $totalDiscountsTaxExcl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaid(): ?float
    {
        return $this->totalPaid;
    }

    /**
     * @param float $totalPaid
     *
     * @return $this
     */
    public function setTotalPaid(?float $totalPaid)
    {
        $this->totalPaid = $totalPaid;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidTaxIncl(): ?float
    {
        return $this->totalPaidTaxIncl;
    }

    /**
     * @param float $totalPaidTaxIncl
     *
     * @return $this
     */
    public function setTotalPaidTaxIncl(?float $totalPaidTaxIncl)
    {
        $this->totalPaidTaxIncl = $totalPaidTaxIncl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidTaxExcl(): ?float
    {
        return $this->totalPaidTaxExcl;
    }

    /**
     * @param float $totalPaidTaxExcl
     *
     * @return $this
     */
    public function setTotalPaidTaxExcl(?float $totalPaidTaxExcl)
    {
        $this->totalPaidTaxExcl = $totalPaidTaxExcl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidReal(): ?float
    {
        return $this->totalPaidReal;
    }

    /**
     * @param float $totalPaidReal
     *
     * @return $this
     */
    public function setTotalPaidReal(?float $totalPaidReal)
    {
        $this->totalPaidReal = $totalPaidReal;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalProducts(): ?float
    {
        return $this->totalProducts;
    }

    /**
     * @param float $totalProducts
     *
     * @return $this
     */
    public function setTotalProducts(?float $totalProducts)
    {
        $this->totalProducts = $totalProducts;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalProductsWt(): ?float
    {
        return $this->totalProductsWt;
    }

    /**
     * @param float $totalProductsWt
     *
     * @return $this
     */
    public function setTotalProductsWt(?float $totalProductsWt)
    {
        $this->totalProductsWt = $totalProductsWt;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShipping(): ?float
    {
        return $this->totalShipping;
    }

    /**
     * @param float $totalShipping
     *
     * @return $this
     */
    public function setTotalShipping(?float $totalShipping)
    {
        $this->totalShipping = $totalShipping;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShippingTaxIncl(): ?float
    {
        return $this->totalShippingTaxIncl;
    }

    /**
     * @param float $totalShippingTaxIncl
     *
     * @return $this
     */
    public function setTotalShippingTaxIncl(?float $totalShippingTaxIncl)
    {
        $this->totalShippingTaxIncl = $totalShippingTaxIncl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShippingTaxExcl(): ?float
    {
        return $this->totalShippingTaxExcl;
    }

    /**
     * @param float $totalShippingTaxExcl
     *
     * @return $this
     */
    public function setTotalShippingTaxExcl(?float $totalShippingTaxExcl)
    {
        $this->totalShippingTaxExcl = $totalShippingTaxExcl;
        return $this;
    }

    /**
     * @return float
     */
    public function getCarrierTaxRate(): ?float
    {
        return $this->carrierTaxRate;
    }

    /**
     * @param float $carrierTaxRate
     *
     * @return $this
     */
    public function setCarrierTaxRate(?float $carrierTaxRate)
    {
        $this->carrierTaxRate = $carrierTaxRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrapping(): ?float
    {
        return $this->totalWrapping;
    }

    /**
     * @param float $totalWrapping
     *
     * @return $this
     */
    public function setTotalWrapping(?float $totalWrapping)
    {
        $this->totalWrapping = $totalWrapping;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrappingTaxIncl(): ?float
    {
        return $this->totalWrappingTaxIncl;
    }

    /**
     * @param float $totalWrappingTaxIncl
     *
     * @return $this
     */
    public function setTotalWrappingTaxIncl(?float $totalWrappingTaxIncl)
    {
        $this->totalWrappingTaxIncl = $totalWrappingTaxIncl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrappingTaxExcl(): ?float
    {
        return $this->totalWrappingTaxExcl;
    }

    /**
     * @param float $totalWrappingTaxExcl
     *
     * @return $this
     */
    public function setTotalWrappingTaxExcl(?float $totalWrappingTaxExcl)
    {
        $this->totalWrappingTaxExcl = $totalWrappingTaxExcl;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoundMode(): ?int
    {
        return $this->roundMode;
    }

    /**
     * @param int $roundMode
     *
     * @return $this
     */
    public function setRoundMode(?int $roundMode)
    {
        $this->roundMode = $roundMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoundType(): ?int
    {
        return $this->roundType;
    }

    /**
     * @param int $roundType
     *
     * @return $this
     */
    public function setRoundType(?int $roundType)
    {
        $this->roundType = $roundType;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate(): ?float
    {
        return $this->conversionRate;
    }

    /**
     * @param float $conversionRate
     *
     * @return $this
     */
    public function setConversionRate(?float $conversionRate)
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return $this
     */
    public function setReference(?string $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return PrestashopAssociations
     */
    public function getAssociations(): ?PrestashopAssociations
    {
        return $this->associations;
    }

    /**
     * @param PrestashopAssociations $associations
     *
     * @return $this
     */
    public function setAssociations(?PrestashopAssociations $associations)
    {
        $this->associations = $associations;
        return $this;
    }
}
