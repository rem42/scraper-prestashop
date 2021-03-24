<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopProduct
{
    private ?string $ean13;

    /** @var Collection<int, PrestashopItem> */
    private Collection $deliveryInStock;

    /** @var Collection<int, PrestashopItem> */
    private Collection $deliveryOutStock;

    /** @var Collection<int, PrestashopItem> */
    private Collection $metaDescription;

    /** @var Collection<int, PrestashopItem> */
    private Collection $metaKeywords;

    /** @var Collection<int, PrestashopItem> */
    private Collection $metaTitle;

    /** @var Collection<int, PrestashopItem> */
    private Collection $linkRewrite;

    /** @var Collection<int, PrestashopItem> */
    private Collection $name;

    /** @var Collection<int, PrestashopItem> */
    private Collection $description;

    /** @var Collection<int, PrestashopItem> */
    private Collection $descriptionShort;

    /** @var Collection<int, PrestashopItem> */
    private Collection $availableNow;

    /** @var Collection<int, PrestashopItem> */
    private Collection $availableLater;

    private PrestashopAssociations $associations;

    private ?int $id = null;

    private ?int $idManufacturer = null;

    private ?int $idSupplier = null;

    private ?int $idCategoryDefault = null;

    private ?string $new = null;

    private ?int $cacheDefaultAttribute = null;

    private ?string $idDefaultImage = null;

    private ?int $idDefaultCombination = null;

    private ?int $idTaxRulesGroup = null;

    private ?string $positionInCategory = null;

    private ?string $manufacturerName = null;

    private ?int $quantity = null;

    private ?string $type = null;

    private ?int $idShopDefault = null;

    private ?string $reference = null;

    private ?string $supplierReference = null;

    private ?string $location = null;

    private ?float $width = null;

    private ?float $height = null;

    private ?float $depth = null;

    private ?float $weight = null;

    private ?bool $quantityDiscount = null;

    private ?string $isbn = null;

    private ?string $upc = null;

    private ?bool $cacheIsPack = null;

    private ?bool $cacheHasAttachments = null;

    private ?bool $isVirtual = null;

    private ?int $state = null;

    private ?int $additionalDeliveryTimes = null;

    private ?bool $onSale = null;

    private ?bool $onlineOnly = null;

    private ?float $ecotax = null;

    private ?int $minimalQuantity = null;

    private ?float $price = null;

    private ?float $wholesalePrice = null;

    private ?string $unity = null;

    private ?string $unitPriceRatio = null;

    private ?float $additionalShippingCost = null;

    private ?int $customizable = null;

    private ?int $textFields = null;

    private ?int $uploadableFiles = null;

    private ?bool $active = null;

    private ?string $redirectType = null;

    private ?int $idTypeRedirected = null;

    private ?bool $availableForOrder = null;

    private ?\DateTimeInterface $availableDate = null;

    private ?bool $showCondition = null;

    private ?string $condition = null;

    private ?bool $showPrice = null;

    private ?bool $indexed = null;

    private ?string $visibility = null;

    private ?bool $advancedStockManagement = null;

    private ?\DateTimeInterface $dateAdd = null;

    private ?\DateTimeInterface $dateUpd = null;

    private ?int $packStockType = null;

    public function __construct()
    {
        $this->deliveryInStock  = new ArrayCollection();
        $this->deliveryOutStock = new ArrayCollection();
        $this->metaDescription  = new ArrayCollection();
        $this->metaKeywords     = new ArrayCollection();
        $this->metaTitle        = new ArrayCollection();
        $this->linkRewrite      = new ArrayCollection();
        $this->name             = new ArrayCollection();
        $this->description      = new ArrayCollection();
        $this->descriptionShort = new ArrayCollection();
        $this->availableNow     = new ArrayCollection();
        $this->availableLater   = new ArrayCollection();
    }

    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    public function setEan13(?string $ean13): self
    {
        $this->ean13 = $ean13;

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getDeliveryInStock(): Collection
    {
        return $this->deliveryInStock;
    }

    public function addDeliveryInStock(PrestashopItem $deliveryInStock): self
    {
        $this->deliveryInStock->add($deliveryInStock);

        return $this;
    }

    public function removeDeliveryInStock(PrestashopItem $deliveryInStock): self
    {
        $this->deliveryInStock->removeElement($deliveryInStock);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getDeliveryOutStock(): Collection
    {
        return $this->deliveryOutStock;
    }

    public function addDeliveryOutStock(PrestashopItem $deliveryOutStock): self
    {
        $this->deliveryOutStock->add($deliveryOutStock);

        return $this;
    }

    public function removeDeliveryOutStock(PrestashopItem $deliveryOutStock): self
    {
        $this->deliveryOutStock->removeElement($deliveryOutStock);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getMetaDescription(): Collection
    {
        return $this->metaDescription;
    }

    public function addMetaDescription(PrestashopItem $metaDescription): self
    {
        $this->metaDescription->add($metaDescription);

        return $this;
    }

    public function removeMetaDescription(PrestashopItem $metaDescription): self
    {
        $this->metaDescription->removeElement($metaDescription);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getMetaKeywords(): Collection
    {
        return $this->metaKeywords;
    }

    public function addMetaKeyword(PrestashopItem $metaKeyword): self
    {
        $this->metaKeywords->add($metaKeyword);

        return $this;
    }

    public function removeMetaKeyword(PrestashopItem $metaKeyword): self
    {
        $this->metaKeywords->removeElement($metaKeyword);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getMetaTitle(): Collection
    {
        return $this->metaTitle;
    }

    public function addMetaTitle(PrestashopItem $metaTitle): self
    {
        $this->metaTitle->add($metaTitle);

        return $this;
    }

    public function removeMetaTitle(PrestashopItem $metaTitle): self
    {
        $this->metaTitle->removeElement($metaTitle);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getLinkRewrite(): Collection
    {
        return $this->linkRewrite;
    }

    public function addLinkRewrite(PrestashopItem $linkRewrite): self
    {
        $this->linkRewrite->add($linkRewrite);

        return $this;
    }

    public function removeLinkRewrite(PrestashopItem $linkRewrite): self
    {
        $this->linkRewrite->removeElement($linkRewrite);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getName(): Collection
    {
        return $this->name;
    }

    public function addName(PrestashopItem $name): self
    {
        $this->name->add($name);

        return $this;
    }

    public function removeName(PrestashopItem $name): self
    {
        $this->name->removeElement($name);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getDescription(): Collection
    {
        return $this->description;
    }

    public function addDescription(PrestashopItem $description): self
    {
        $this->description->add($description);

        return $this;
    }

    public function removeDescription(PrestashopItem $description): self
    {
        $this->description->removeElement($description);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getDescriptionShort(): Collection
    {
        return $this->descriptionShort;
    }

    public function addDescriptionShort(PrestashopItem $descriptionShort): self
    {
        $this->descriptionShort->add($descriptionShort);

        return $this;
    }

    public function removeDescriptionShort(PrestashopItem $descriptionShort): self
    {
        $this->descriptionShort->removeElement($descriptionShort);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getAvailableNow(): Collection
    {
        return $this->availableNow;
    }

    public function addAvailableNow(PrestashopItem $availableNow): self
    {
        $this->availableNow->add($availableNow);

        return $this;
    }

    public function removeAvailableNow(PrestashopItem $availableNow): self
    {
        $this->availableNow->removeElement($availableNow);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getAvailableLater(): Collection
    {
        return $this->availableLater;
    }

    public function addAvailableLater(PrestashopItem $availableLater): self
    {
        $this->availableLater->add($availableLater);

        return $this;
    }

    public function removeAvailableLater(PrestashopItem $availableLater): self
    {
        $this->availableLater->removeElement($availableLater);

        return $this;
    }

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

    public function getIdManufacturer(): ?int
    {
        return $this->idManufacturer;
    }

    public function setIdManufacturer(?int $idManufacturer): self
    {
        $this->idManufacturer = $idManufacturer;

        return $this;
    }

    public function getIdSupplier(): ?int
    {
        return $this->idSupplier;
    }

    public function setIdSupplier(?int $idSupplier): self
    {
        $this->idSupplier = $idSupplier;

        return $this;
    }

    public function getIdCategoryDefault(): ?int
    {
        return $this->idCategoryDefault;
    }

    public function setIdCategoryDefault(?int $idCategoryDefault): self
    {
        $this->idCategoryDefault = $idCategoryDefault;

        return $this;
    }

    public function getNew(): ?string
    {
        return $this->new;
    }

    public function setNew(?string $new): self
    {
        $this->new = $new;

        return $this;
    }

    public function getCacheDefaultAttribute(): ?int
    {
        return $this->cacheDefaultAttribute;
    }

    public function setCacheDefaultAttribute(?int $cacheDefaultAttribute): self
    {
        $this->cacheDefaultAttribute = $cacheDefaultAttribute;

        return $this;
    }

    public function getIdDefaultImage(): ?string
    {
        return $this->idDefaultImage;
    }

    public function setIdDefaultImage(?string $idDefaultImage): self
    {
        $this->idDefaultImage = $idDefaultImage;

        return $this;
    }

    public function getIdDefaultCombination(): ?int
    {
        return $this->idDefaultCombination;
    }

    public function setIdDefaultCombination(?int $idDefaultCombination): self
    {
        $this->idDefaultCombination = $idDefaultCombination;

        return $this;
    }

    public function getIdTaxRulesGroup(): ?int
    {
        return $this->idTaxRulesGroup;
    }

    public function setIdTaxRulesGroup(?int $idTaxRulesGroup): self
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;

        return $this;
    }

    public function getPositionInCategory(): ?string
    {
        return $this->positionInCategory;
    }

    public function setPositionInCategory(?string $positionInCategory): self
    {
        $this->positionInCategory = $positionInCategory;

        return $this;
    }

    public function getManufacturerName(): ?string
    {
        return $this->manufacturerName;
    }

    public function setManufacturerName(?string $manufacturerName): self
    {
        $this->manufacturerName = $manufacturerName;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIdShopDefault(): ?int
    {
        return $this->idShopDefault;
    }

    public function setIdShopDefault(?int $idShopDefault): self
    {
        $this->idShopDefault = $idShopDefault;

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

    public function getSupplierReference(): ?string
    {
        return $this->supplierReference;
    }

    public function setSupplierReference(?string $supplierReference): self
    {
        $this->supplierReference = $supplierReference;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getDepth(): ?float
    {
        return $this->depth;
    }

    public function setDepth(?float $depth): self
    {
        $this->depth = $depth;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getQuantityDiscount(): ?bool
    {
        return $this->quantityDiscount;
    }

    public function setQuantityDiscount(?bool $quantityDiscount): self
    {
        $this->quantityDiscount = $quantityDiscount;

        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(?string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getUpc(): ?string
    {
        return $this->upc;
    }

    public function setUpc(?string $upc): self
    {
        $this->upc = $upc;

        return $this;
    }

    public function getCacheIsPack(): ?bool
    {
        return $this->cacheIsPack;
    }

    public function setCacheIsPack(?bool $cacheIsPack): self
    {
        $this->cacheIsPack = $cacheIsPack;

        return $this;
    }

    public function getCacheHasAttachments(): ?bool
    {
        return $this->cacheHasAttachments;
    }

    public function setCacheHasAttachments(?bool $cacheHasAttachments): self
    {
        $this->cacheHasAttachments = $cacheHasAttachments;

        return $this;
    }

    public function getIsVirtual(): ?bool
    {
        return $this->isVirtual;
    }

    public function setIsVirtual(?bool $isVirtual): self
    {
        $this->isVirtual = $isVirtual;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(?int $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getAdditionalDeliveryTimes(): ?int
    {
        return $this->additionalDeliveryTimes;
    }

    public function setAdditionalDeliveryTimes(?int $additionalDeliveryTimes): self
    {
        $this->additionalDeliveryTimes = $additionalDeliveryTimes;

        return $this;
    }

    public function getOnSale(): ?bool
    {
        return $this->onSale;
    }

    public function setOnSale(?bool $onSale): self
    {
        $this->onSale = $onSale;

        return $this;
    }

    public function getOnlineOnly(): ?bool
    {
        return $this->onlineOnly;
    }

    public function setOnlineOnly(?bool $onlineOnly): self
    {
        $this->onlineOnly = $onlineOnly;

        return $this;
    }

    public function getEcotax(): ?float
    {
        return $this->ecotax;
    }

    public function setEcotax(?float $ecotax): self
    {
        $this->ecotax = $ecotax;

        return $this;
    }

    public function getMinimalQuantity(): ?int
    {
        return $this->minimalQuantity;
    }

    public function setMinimalQuantity(?int $minimalQuantity): self
    {
        $this->minimalQuantity = $minimalQuantity;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getWholesalePrice(): ?float
    {
        return $this->wholesalePrice;
    }

    public function setWholesalePrice(?float $wholesalePrice): self
    {
        $this->wholesalePrice = $wholesalePrice;

        return $this;
    }

    public function getUnity(): ?string
    {
        return $this->unity;
    }

    public function setUnity(?string $unity): self
    {
        $this->unity = $unity;

        return $this;
    }

    public function getUnitPriceRatio(): ?string
    {
        return $this->unitPriceRatio;
    }

    public function setUnitPriceRatio(?string $unitPriceRatio): self
    {
        $this->unitPriceRatio = $unitPriceRatio;

        return $this;
    }

    public function getAdditionalShippingCost(): ?float
    {
        return $this->additionalShippingCost;
    }

    public function setAdditionalShippingCost(?float $additionalShippingCost): self
    {
        $this->additionalShippingCost = $additionalShippingCost;

        return $this;
    }

    public function getCustomizable(): ?int
    {
        return $this->customizable;
    }

    public function setCustomizable(?int $customizable): self
    {
        $this->customizable = $customizable;

        return $this;
    }

    public function getTextFields(): ?int
    {
        return $this->textFields;
    }

    public function setTextFields(?int $textFields): self
    {
        $this->textFields = $textFields;

        return $this;
    }

    public function getUploadableFiles(): ?int
    {
        return $this->uploadableFiles;
    }

    public function setUploadableFiles(?int $uploadableFiles): self
    {
        $this->uploadableFiles = $uploadableFiles;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getRedirectType(): ?string
    {
        return $this->redirectType;
    }

    public function setRedirectType(?string $redirectType): self
    {
        $this->redirectType = $redirectType;

        return $this;
    }

    public function getIdTypeRedirected(): ?int
    {
        return $this->idTypeRedirected;
    }

    public function setIdTypeRedirected(?int $idTypeRedirected): self
    {
        $this->idTypeRedirected = $idTypeRedirected;

        return $this;
    }

    public function getAvailableForOrder(): ?bool
    {
        return $this->availableForOrder;
    }

    public function setAvailableForOrder(?bool $availableForOrder): self
    {
        $this->availableForOrder = $availableForOrder;

        return $this;
    }

    public function getAvailableDate(): ?\DateTimeInterface
    {
        return $this->availableDate;
    }

    public function setAvailableDate(?\DateTimeInterface $availableDate): self
    {
        $this->availableDate = $availableDate;

        return $this;
    }

    public function getShowCondition(): ?bool
    {
        return $this->showCondition;
    }

    public function setShowCondition(?bool $showCondition): self
    {
        $this->showCondition = $showCondition;

        return $this;
    }

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function setCondition(?string $condition): self
    {
        $this->condition = $condition;

        return $this;
    }

    public function getShowPrice(): ?bool
    {
        return $this->showPrice;
    }

    public function setShowPrice(?bool $showPrice): self
    {
        $this->showPrice = $showPrice;

        return $this;
    }

    public function getIndexed(): ?bool
    {
        return $this->indexed;
    }

    public function setIndexed(?bool $indexed): self
    {
        $this->indexed = $indexed;

        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(?string $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getAdvancedStockManagement(): ?bool
    {
        return $this->advancedStockManagement;
    }

    public function setAdvancedStockManagement(?bool $advancedStockManagement): self
    {
        $this->advancedStockManagement = $advancedStockManagement;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    public function setDateUpd(?\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    public function getPackStockType(): ?int
    {
        return $this->packStockType;
    }

    public function setPackStockType(?int $packStockType): self
    {
        $this->packStockType = $packStockType;

        return $this;
    }
}
