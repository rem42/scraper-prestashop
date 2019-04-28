<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopProduct
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
     * @Serializer\SerializedName("id_manufacturer")
     */
    protected $idManufacturer;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_supplier")
     */
    protected $idSupplier;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_category_default")
     */
    protected $idCategoryDefault;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("new")
     */
    protected $new;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("cache_default_attribute")
     */
    protected $cacheDefaultAttribute;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_default_image")
     */
    protected $idDefaultImage;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_default_combination")
     */
    protected $idDefaultCombination;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_tax_rules_group")
     */
    protected $idTaxRulesGroup;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("position_in_category")
     */
    protected $positionInCategory;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("manufacturer_name")
     */
    protected $manufacturerName;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("quantity")
     */
    protected $quantity;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    protected $type;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_shop_default")
     */
    protected $idShopDefault;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("reference")
     */
    protected $reference;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("supplier_reference")
     */
    protected $supplierReference;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("location")
     */
    protected $location;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("width")
     */
    protected $width;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("height")
     */
    protected $height;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("depth")
     */
    protected $depth;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weight")
     */
    protected $weight;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("quantity_discount")
     */
    protected $quantityDiscount;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ean13")
     */
    protected $ean13;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("isbn")
     */
    protected $isbn;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("upc")
     */
    protected $upc;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("cache_is_pack")
     */
    protected $cacheIsPack;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("cache_has_attachments")
     */
    protected $cacheHasAttachments;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("is_virtual")
     */
    protected $isVirtual;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("state")
     */
    protected $state;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("on_sale")
     */
    protected $onSale;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("online_only")
     */
    protected $onlineOnly;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("ecotax")
     */
    protected $ecotax;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("minimal_quantity")
     */
    protected $minimalQuantity;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("price")
     */
    protected $price;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("wholesale_price")
     */
    protected $wholesalePrice;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("unity")
     */
    protected $unity;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("unit_price_ratio")
     */
    protected $unitPriceRatio;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("additional_shipping_cost")
     */
    protected $additionalShippingCost;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("customizable")
     */
    protected $customizable;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("text_fields")
     */
    protected $textFields;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("uploadable_files")
     */
    protected $uploadableFiles;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    protected $active;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("redirect_type")
     */
    protected $redirectType;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_type_redirected")
     */
    protected $idTypeRedirected;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("available_for_order")
     */
    protected $availableForOrder;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\SerializedName("available_date")
     */
    protected $availableDate;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("show_condition")
     */
    protected $showCondition;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("condition")
     */
    protected $condition;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("show_price")
     */
    protected $showPrice;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("indexed")
     */
    protected $indexed;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("visibility")
     */
    protected $visibility;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("advanced_stock_management")
     */
    protected $advancedStockManagement;
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
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("pack_stock_type")
     */
    protected $packStockType;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("meta_description")
     */
    protected $metaDescription;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("meta_keywords")
     */
    protected $metaKeywords;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("meta_title")
     */
    protected $metaTitle;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("link_rewrite")
     */
    protected $linkRewrite;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     */
    protected $description;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description_short")
     */
    protected $descriptionShort;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("available_now")
     */
    protected $availableNow;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("available_later")
     */
    protected $availableLater;
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
    public function getIdManufacturer(): ?int
    {
        return $this->idManufacturer;
    }

    /**
     * @param int $idManufacturer
     *
     * @return $this
     */
    public function setIdManufacturer(?int $idManufacturer)
    {
        $this->idManufacturer = $idManufacturer;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdSupplier(): ?int
    {
        return $this->idSupplier;
    }

    /**
     * @param int $idSupplier
     *
     * @return $this
     */
    public function setIdSupplier(?int $idSupplier)
    {
        $this->idSupplier = $idSupplier;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCategoryDefault(): ?int
    {
        return $this->idCategoryDefault;
    }

    /**
     * @param int $idCategoryDefault
     *
     * @return $this
     */
    public function setIdCategoryDefault(?int $idCategoryDefault)
    {
        $this->idCategoryDefault = $idCategoryDefault;
        return $this;
    }

    /**
     * @return string
     */
    public function getNew(): ?string
    {
        return $this->new;
    }

    /**
     * @param string $new
     *
     * @return $this
     */
    public function setNew(?string $new)
    {
        $this->new = $new;
        return $this;
    }

    /**
     * @return int
     */
    public function getCacheDefaultAttribute(): ?int
    {
        return $this->cacheDefaultAttribute;
    }

    /**
     * @param int $cacheDefaultAttribute
     *
     * @return $this
     */
    public function setCacheDefaultAttribute(?int $cacheDefaultAttribute)
    {
        $this->cacheDefaultAttribute = $cacheDefaultAttribute;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdDefaultImage(): ?int
    {
        return $this->idDefaultImage;
    }

    /**
     * @param int $idDefaultImage
     *
     * @return $this
     */
    public function setIdDefaultImage(?int $idDefaultImage)
    {
        $this->idDefaultImage = $idDefaultImage;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdDefaultCombination(): ?int
    {
        return $this->idDefaultCombination;
    }

    /**
     * @param int $idDefaultCombination
     *
     * @return $this
     */
    public function setIdDefaultCombination(?int $idDefaultCombination)
    {
        $this->idDefaultCombination = $idDefaultCombination;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdTaxRulesGroup(): ?int
    {
        return $this->idTaxRulesGroup;
    }

    /**
     * @param int $idTaxRulesGroup
     *
     * @return $this
     */
    public function setIdTaxRulesGroup(?int $idTaxRulesGroup)
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionInCategory(): ?int
    {
        return $this->positionInCategory;
    }

    /**
     * @param int $positionInCategory
     *
     * @return $this
     */
    public function setPositionInCategory(?int $positionInCategory)
    {
        $this->positionInCategory = $positionInCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerName(): ?string
    {
        return $this->manufacturerName;
    }

    /**
     * @param string $manufacturerName
     *
     * @return $this
     */
    public function setManufacturerName(?string $manufacturerName)
    {
        $this->manufacturerName = $manufacturerName;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return $this
     */
    public function setQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(?string $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdShopDefault(): ?int
    {
        return $this->idShopDefault;
    }

    /**
     * @param int $idShopDefault
     *
     * @return $this
     */
    public function setIdShopDefault(?int $idShopDefault)
    {
        $this->idShopDefault = $idShopDefault;
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
     * @return string
     */
    public function getSupplierReference(): ?string
    {
        return $this->supplierReference;
    }

    /**
     * @param string $supplierReference
     *
     * @return $this
     */
    public function setSupplierReference(?string $supplierReference)
    {
        $this->supplierReference = $supplierReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @param string $location
     *
     * @return $this
     */
    public function setLocation(?string $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return float
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * @param float $width
     *
     * @return $this
     */
    public function setWidth(?float $width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * @param float $height
     *
     * @return $this
     */
    public function setHeight(?float $height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return float
     */
    public function getDepth(): ?float
    {
        return $this->depth;
    }

    /**
     * @param float $depth
     *
     * @return $this
     */
    public function setDepth(?float $depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return $this
     */
    public function setWeight(?float $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return bool
     */
    public function isQuantityDiscount(): ?bool
    {
        return $this->quantityDiscount;
    }

    /**
     * @param bool $quantityDiscount
     *
     * @return $this
     */
    public function setQuantityDiscount(?bool $quantityDiscount)
    {
        $this->quantityDiscount = $quantityDiscount;
        return $this;
    }

    /**
     * @return string
     */
    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    /**
     * @param string $ean13
     *
     * @return $this
     */
    public function setEan13(?string $ean13)
    {
        $this->ean13 = $ean13;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     *
     * @return $this
     */
    public function setIsbn(?string $isbn)
    {
        $this->isbn = $isbn;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpc(): ?string
    {
        return $this->upc;
    }

    /**
     * @param string $upc
     *
     * @return $this
     */
    public function setUpc(?string $upc)
    {
        $this->upc = $upc;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCacheIsPack(): ?bool
    {
        return $this->cacheIsPack;
    }

    /**
     * @param bool $cacheIsPack
     *
     * @return $this
     */
    public function setCacheIsPack(?bool $cacheIsPack)
    {
        $this->cacheIsPack = $cacheIsPack;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCacheHasAttachments(): ?bool
    {
        return $this->cacheHasAttachments;
    }

    /**
     * @param bool $cacheHasAttachments
     *
     * @return $this
     */
    public function setCacheHasAttachments(?bool $cacheHasAttachments)
    {
        $this->cacheHasAttachments = $cacheHasAttachments;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVirtual(): ?bool
    {
        return $this->isVirtual;
    }

    /**
     * @param bool $isVirtual
     *
     * @return $this
     */
    public function setIsVirtual(?bool $isVirtual)
    {
        $this->isVirtual = $isVirtual;
        return $this;
    }

    /**
     * @return int
     */
    public function getState(): ?int
    {
        return $this->state;
    }

    /**
     * @param int $state
     *
     * @return $this
     */
    public function setState(?int $state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOnSale(): ?bool
    {
        return $this->onSale;
    }

    /**
     * @param bool $onSale
     *
     * @return $this
     */
    public function setOnSale(?bool $onSale)
    {
        $this->onSale = $onSale;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOnlineOnly(): ?bool
    {
        return $this->onlineOnly;
    }

    /**
     * @param bool $onlineOnly
     *
     * @return $this
     */
    public function setOnlineOnly(?bool $onlineOnly)
    {
        $this->onlineOnly = $onlineOnly;
        return $this;
    }

    /**
     * @return float
     */
    public function getEcotax(): ?float
    {
        return $this->ecotax;
    }

    /**
     * @param float $ecotax
     *
     * @return $this
     */
    public function setEcotax(?float $ecotax)
    {
        $this->ecotax = $ecotax;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimalQuantity(): ?int
    {
        return $this->minimalQuantity;
    }

    /**
     * @param int $minimalQuantity
     *
     * @return $this
     */
    public function setMinimalQuantity(?int $minimalQuantity)
    {
        $this->minimalQuantity = $minimalQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return $this
     */
    public function setPrice(?float $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getWholesalePrice(): ?float
    {
        return $this->wholesalePrice;
    }

    /**
     * @param float $wholesalePrice
     *
     * @return $this
     */
    public function setWholesalePrice(?float $wholesalePrice)
    {
        $this->wholesalePrice = $wholesalePrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnity(): ?string
    {
        return $this->unity;
    }

    /**
     * @param string $unity
     *
     * @return $this
     */
    public function setUnity(?string $unity)
    {
        $this->unity = $unity;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitPriceRatio(): ?string
    {
        return $this->unitPriceRatio;
    }

    /**
     * @param string $unitPriceRatio
     *
     * @return $this
     */
    public function setUnitPriceRatio(?string $unitPriceRatio)
    {
        $this->unitPriceRatio = $unitPriceRatio;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdditionalShippingCost(): ?float
    {
        return $this->additionalShippingCost;
    }

    /**
     * @param float $additionalShippingCost
     *
     * @return $this
     */
    public function setAdditionalShippingCost(?float $additionalShippingCost)
    {
        $this->additionalShippingCost = $additionalShippingCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomizable(): ?int
    {
        return $this->customizable;
    }

    /**
     * @param int $customizable
     *
     * @return $this
     */
    public function setCustomizable(?int $customizable)
    {
        $this->customizable = $customizable;
        return $this;
    }

    /**
     * @return int
     */
    public function getTextFields(): ?int
    {
        return $this->textFields;
    }

    /**
     * @param int $textFields
     *
     * @return $this
     */
    public function setTextFields(?int $textFields)
    {
        $this->textFields = $textFields;
        return $this;
    }

    /**
     * @return int
     */
    public function getUploadableFiles(): ?int
    {
        return $this->uploadableFiles;
    }

    /**
     * @param int $uploadableFiles
     *
     * @return $this
     */
    public function setUploadableFiles(?int $uploadableFiles)
    {
        $this->uploadableFiles = $uploadableFiles;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return $this
     */
    public function setActive(?bool $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectType(): ?string
    {
        return $this->redirectType;
    }

    /**
     * @param string $redirectType
     *
     * @return $this
     */
    public function setRedirectType(?string $redirectType)
    {
        $this->redirectType = $redirectType;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdTypeRedirected(): ?int
    {
        return $this->idTypeRedirected;
    }

    /**
     * @param int $idTypeRedirected
     *
     * @return $this
     */
    public function setIdTypeRedirected(?int $idTypeRedirected)
    {
        $this->idTypeRedirected = $idTypeRedirected;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAvailableForOrder(): ?bool
    {
        return $this->availableForOrder;
    }

    /**
     * @param bool $availableForOrder
     *
     * @return $this
     */
    public function setAvailableForOrder(?bool $availableForOrder)
    {
        $this->availableForOrder = $availableForOrder;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAvailableDate(): ?\DateTime
    {
        return $this->availableDate;
    }

    /**
     * @param \DateTime $availableDate
     *
     * @return $this
     */
    public function setAvailableDate(?\DateTime $availableDate)
    {
        $this->availableDate = $availableDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowCondition(): ?bool
    {
        return $this->showCondition;
    }

    /**
     * @param bool $showCondition
     *
     * @return $this
     */
    public function setShowCondition(?bool $showCondition)
    {
        $this->showCondition = $showCondition;
        return $this;
    }

    /**
     * @return string
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     *
     * @return $this
     */
    public function setCondition(?string $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowPrice(): ?bool
    {
        return $this->showPrice;
    }

    /**
     * @param bool $showPrice
     *
     * @return $this
     */
    public function setShowPrice(?bool $showPrice)
    {
        $this->showPrice = $showPrice;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIndexed(): ?bool
    {
        return $this->indexed;
    }

    /**
     * @param bool $indexed
     *
     * @return $this
     */
    public function setIndexed(?bool $indexed)
    {
        $this->indexed = $indexed;
        return $this;
    }

    /**
     * @return string
     */
    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    /**
     * @param string $visibility
     *
     * @return $this
     */
    public function setVisibility(?string $visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAdvancedStockManagement(): ?bool
    {
        return $this->advancedStockManagement;
    }

    /**
     * @param bool $advancedStockManagement
     *
     * @return $this
     */
    public function setAdvancedStockManagement(?bool $advancedStockManagement)
    {
        $this->advancedStockManagement = $advancedStockManagement;
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
     * @return int
     */
    public function getPackStockType(): ?int
    {
        return $this->packStockType;
    }

    /**
     * @param int $packStockType
     *
     * @return $this
     */
    public function setPackStockType(?int $packStockType)
    {
        $this->packStockType = $packStockType;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    /**
     * @param string $metaDescription
     *
     * @return $this
     */
    public function setMetaDescription(?string $metaDescription)
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    /**
     * @param string $metaKeywords
     *
     * @return $this
     */
    public function setMetaKeywords(?string $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    /**
     * @param string $metaTitle
     *
     * @return $this
     */
    public function setMetaTitle(?string $metaTitle)
    {
        $this->metaTitle = $metaTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkRewrite(): ?string
    {
        return $this->linkRewrite;
    }

    /**
     * @param string $linkRewrite
     *
     * @return $this
     */
    public function setLinkRewrite(?string $linkRewrite)
    {
        $this->linkRewrite = $linkRewrite;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionShort(): ?string
    {
        return $this->descriptionShort;
    }

    /**
     * @param string $descriptionShort
     *
     * @return $this
     */
    public function setDescriptionShort(?string $descriptionShort)
    {
        $this->descriptionShort = $descriptionShort;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvailableNow(): ?string
    {
        return $this->availableNow;
    }

    /**
     * @param string $availableNow
     *
     * @return $this
     */
    public function setAvailableNow(?string $availableNow)
    {
        $this->availableNow = $availableNow;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvailableLater(): ?string
    {
        return $this->availableLater;
    }

    /**
     * @param string $availableLater
     *
     * @return $this
     */
    public function setAvailableLater(?string $availableLater)
    {
        $this->availableLater = $availableLater;
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
