<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopCart
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
     * @Serializer\SerializedName("id_currency")
     */
    protected $idCurrency;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_customer")
     */
    protected $idCustomer;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_guest")
     */
    protected $idGuest;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_lang")
     */
    protected $idLang;
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
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_carrier")
     */
    protected $idCarrier;
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
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("secure_key")
     */
    protected $secureKey;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("allow_seperated_package")
     */
    protected $allowSeperatedPackage;
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
    public function getIdGuest(): ?int
    {
        return $this->idGuest;
    }

    /**
     * @param int $idGuest
     *
     * @return $this
     */
    public function setIdGuest(?int $idGuest)
    {
        $this->idGuest = $idGuest;
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
     * @return bool
     */
    public function isAllowSeperatedPackage(): ?bool
    {
        return $this->allowSeperatedPackage;
    }

    /**
     * @param bool $allowSeperatedPackage
     *
     * @return $this
     */
    public function setAllowSeperatedPackage(?bool $allowSeperatedPackage)
    {
        $this->allowSeperatedPackage = $allowSeperatedPackage;
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
