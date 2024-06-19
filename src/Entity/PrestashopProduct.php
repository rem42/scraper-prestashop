<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopProduct
{
    public ?string $ean13 = null;
    /** @var array<int, PrestashopItem> */
    public array $deliveryInStock = [];
    /** @var array<int, PrestashopItem> */
    public array $deliveryOutStock = [];
    /** @var array<int, PrestashopItem> */
    public array $metaDescription = [];
    /** @var array<int, PrestashopItem> */
    public array $metaKeywords = [];
    /** @var array<int, PrestashopItem> */
    public array $metaTitle = [];
    /** @var array<int, PrestashopItem> */
    public array $linkRewrite = [];
    /** @var array<int, PrestashopItem> */
    public array $name = [];
    /** @var array<int, PrestashopItem> */
    public array $description = [];
    /** @var array<int, PrestashopItem> */
    public array $descriptionShort = [];
    /** @var array<int, PrestashopItem> */
    public array $availableNow = [];
    /** @var array<int, PrestashopItem> */
    public array $availableLater = [];
    public PrestashopAssociations $associations;
    public ?int $id = null;
    public int|string|null $idManufacturer = null;
    public int|string|null $idSupplier = null;
    public ?int $idCategoryDefault = null;
    public ?string $new = null;
    public ?int $cacheDefaultAttribute = null;
    public ?string $idDefaultImage = null;
    public ?int $idDefaultCombination = null;
    public ?int $idTaxRulesGroup = null;
    public ?string $positionInCategory = null;
    public ?string $manufacturerName = null;
    public ?int $quantity = null;
    public ?string $type = null;
    public ?int $idShopDefault = null;
    public ?string $reference = null;
    public ?string $supplierReference = null;
    public ?string $location = null;
    public ?float $width = null;
    public ?float $height = null;
    public ?float $depth = null;
    public ?float $weight = null;
    public ?bool $quantityDiscount = null;
    public ?string $isbn = null;
    public ?string $upc = null;
    public ?bool $cacheIsPack = null;
    public ?bool $cacheHasAttachments = null;
    public ?bool $isVirtual = null;
    public ?int $state = null;
    public ?int $additionalDeliveryTimes = null;
    public ?bool $onSale = null;
    public ?bool $onlineOnly = null;
    public ?float $ecotax = null;
    public ?int $minimalQuantity = null;
    public ?float $price = null;
    public ?float $wholesalePrice = null;
    public ?string $unity = null;
    public ?string $unitPriceRatio = null;
    public ?float $additionalShippingCost = null;
    public ?int $customizable = null;
    public ?int $textFields = null;
    public ?int $uploadableFiles = null;
    public ?bool $active = null;
    public ?string $redirectType = null;
    public ?int $idTypeRedirected = null;
    public ?bool $availableForOrder = null;
    public ?\DateTimeInterface $availableDate = null;
    public ?bool $showCondition = null;
    public ?string $condition = null;
    public ?bool $showPrice = null;
    public ?bool $indexed = null;
    public ?string $visibility = null;
    public ?bool $advancedStockManagement = null;
    public ?\DateTimeInterface $dateAdd = null;
    public ?\DateTimeInterface $dateUpd = null;
    public ?int $packStockType = null;

    public function __construct()
    {
        $this->associations = new PrestashopAssociations();
    }

    public function addDeliveryInStock(PrestashopItem $deliveryInStock): self
    {
        $this->deliveryInStock[] = $deliveryInStock;

        return $this;
    }

    public function addDeliveryOutStock(PrestashopItem $deliveryOutStock): self
    {
        $this->deliveryOutStock[] = $deliveryOutStock;

        return $this;
    }

    public function addMetaDescription(PrestashopItem $metaDescription): self
    {
        $this->metaDescription[] = $metaDescription;

        return $this;
    }

    public function addMetaKeyword(PrestashopItem $metaKeyword): self
    {
        $this->metaKeywords[] = $metaKeyword;

        return $this;
    }

    public function addMetaTitle(PrestashopItem $metaTitle): self
    {
        $this->metaTitle[] = $metaTitle;

        return $this;
    }

    public function addLinkRewrite(PrestashopItem $linkRewrite): self
    {
        $this->linkRewrite[] = $linkRewrite;

        return $this;
    }

    public function addName(PrestashopItem $name): self
    {
        $this->name[] = $name;

        return $this;
    }

    public function addDescription(PrestashopItem $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    public function addDescriptionShort(PrestashopItem $descriptionShort): self
    {
        $this->descriptionShort[] = $descriptionShort;

        return $this;
    }

    public function addAvailableNow(PrestashopItem $availableNow): self
    {
        $this->availableNow[] = $availableNow;

        return $this;
    }

    public function addAvailableLater(PrestashopItem $availableLater): self
    {
        $this->availableLater[] = $availableLater;

        return $this;
    }

    public function setEan13(?string $ean13): self
    {
        $this->ean13 = $ean13;
        return $this;
    }

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

    public function setIdManufacturer(int|string|null $idManufacturer): self
    {
        $this->idManufacturer = $idManufacturer;
        return $this;
    }

    public function setIdSupplier(int|string|null $idSupplier): self
    {
        $this->idSupplier = $idSupplier;
        return $this;
    }

    public function setIdCategoryDefault(?int $idCategoryDefault): self
    {
        $this->idCategoryDefault = $idCategoryDefault;
        return $this;
    }

    public function setNew(?string $new): self
    {
        $this->new = $new;
        return $this;
    }

    public function setCacheDefaultAttribute(?int $cacheDefaultAttribute): self
    {
        $this->cacheDefaultAttribute = $cacheDefaultAttribute;
        return $this;
    }

    public function setIdDefaultImage(?string $idDefaultImage): self
    {
        $this->idDefaultImage = $idDefaultImage;
        return $this;
    }

    public function setIdDefaultCombination(?int $idDefaultCombination): self
    {
        $this->idDefaultCombination = $idDefaultCombination;
        return $this;
    }

    public function setIdTaxRulesGroup(?int $idTaxRulesGroup): self
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;
        return $this;
    }

    public function setPositionInCategory(?string $positionInCategory): self
    {
        $this->positionInCategory = $positionInCategory;
        return $this;
    }

    public function setManufacturerName(?string $manufacturerName): self
    {
        $this->manufacturerName = $manufacturerName;
        return $this;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setIdShopDefault(?int $idShopDefault): self
    {
        $this->idShopDefault = $idShopDefault;
        return $this;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function setSupplierReference(?string $supplierReference): self
    {
        $this->supplierReference = $supplierReference;
        return $this;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;
        return $this;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function setDepth(?float $depth): self
    {
        $this->depth = $depth;
        return $this;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    public function setQuantityDiscount(?bool $quantityDiscount): self
    {
        $this->quantityDiscount = $quantityDiscount;
        return $this;
    }

    public function setIsbn(?string $isbn): self
    {
        $this->isbn = $isbn;
        return $this;
    }

    public function setUpc(?string $upc): self
    {
        $this->upc = $upc;
        return $this;
    }

    public function setCacheIsPack(?bool $cacheIsPack): self
    {
        $this->cacheIsPack = $cacheIsPack;
        return $this;
    }

    public function setCacheHasAttachments(?bool $cacheHasAttachments): self
    {
        $this->cacheHasAttachments = $cacheHasAttachments;
        return $this;
    }

    public function setIsVirtual(?bool $isVirtual): self
    {
        $this->isVirtual = $isVirtual;
        return $this;
    }

    public function setState(?int $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function setAdditionalDeliveryTimes(?int $additionalDeliveryTimes): self
    {
        $this->additionalDeliveryTimes = $additionalDeliveryTimes;
        return $this;
    }

    public function setOnSale(?bool $onSale): self
    {
        $this->onSale = $onSale;
        return $this;
    }

    public function setOnlineOnly(?bool $onlineOnly): self
    {
        $this->onlineOnly = $onlineOnly;
        return $this;
    }

    public function setEcotax(?float $ecotax): self
    {
        $this->ecotax = $ecotax;
        return $this;
    }

    public function setMinimalQuantity(?int $minimalQuantity): self
    {
        $this->minimalQuantity = $minimalQuantity;
        return $this;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setWholesalePrice(?float $wholesalePrice): self
    {
        $this->wholesalePrice = $wholesalePrice;
        return $this;
    }

    public function setUnity(?string $unity): self
    {
        $this->unity = $unity;
        return $this;
    }

    public function setUnitPriceRatio(?string $unitPriceRatio): self
    {
        $this->unitPriceRatio = $unitPriceRatio;
        return $this;
    }

    public function setAdditionalShippingCost(?float $additionalShippingCost): self
    {
        $this->additionalShippingCost = $additionalShippingCost;
        return $this;
    }

    public function setCustomizable(?int $customizable): self
    {
        $this->customizable = $customizable;
        return $this;
    }

    public function setTextFields(?int $textFields): self
    {
        $this->textFields = $textFields;
        return $this;
    }

    public function setUploadableFiles(?int $uploadableFiles): self
    {
        $this->uploadableFiles = $uploadableFiles;
        return $this;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    public function setRedirectType(?string $redirectType): self
    {
        $this->redirectType = $redirectType;
        return $this;
    }

    public function setIdTypeRedirected(?int $idTypeRedirected): self
    {
        $this->idTypeRedirected = $idTypeRedirected;
        return $this;
    }

    public function setAvailableForOrder(?bool $availableForOrder): self
    {
        $this->availableForOrder = $availableForOrder;
        return $this;
    }

    public function setAvailableDate(?\DateTimeInterface $availableDate): self
    {
        $this->availableDate = $availableDate;
        return $this;
    }

    public function setShowCondition(?bool $showCondition): self
    {
        $this->showCondition = $showCondition;
        return $this;
    }

    public function setCondition(?string $condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    public function setShowPrice(?bool $showPrice): self
    {
        $this->showPrice = $showPrice;
        return $this;
    }

    public function setIndexed(?bool $indexed): self
    {
        $this->indexed = $indexed;
        return $this;
    }

    public function setVisibility(?string $visibility): self
    {
        $this->visibility = $visibility;
        return $this;
    }

    public function setAdvancedStockManagement(?bool $advancedStockManagement): self
    {
        $this->advancedStockManagement = $advancedStockManagement;
        return $this;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    public function setDateUpd(?\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }

    public function setPackStockType(?int $packStockType): self
    {
        $this->packStockType = $packStockType;
        return $this;
    }
}
