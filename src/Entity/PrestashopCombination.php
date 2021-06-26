<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCombination
{
    private ?string $ean13;

    private ?int $id = null;

    private ?int $idProduct = null;

    private ?string $location = null;

    private ?string $isbn = null;

    private ?string $upc = null;

    private ?int $quantity = null;

    private ?string $reference = null;

    private ?string $supplierReference = null;

    private ?float $wholesalePrice = null;

    private ?float $price = null;

    private ?float $ecotax = null;

    private ?float $weight = null;

    private ?string $unitPriceImpact = null;

    private ?int $minimalQuantity = null;

    private ?bool $defaultOn = null;

    private ?\DateTime $availableDate = null;

    private ?PrestashopAssociations $associations = null;

    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    public function setEan13(?string $ean13): self
    {
        $this->ean13 = $ean13;

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

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(?int $idProduct): self
    {
        $this->idProduct = $idProduct;

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

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

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

    public function getWholesalePrice(): ?float
    {
        return $this->wholesalePrice;
    }

    public function setWholesalePrice(?float $wholesalePrice): self
    {
        $this->wholesalePrice = $wholesalePrice;

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

    public function getEcotax(): ?float
    {
        return $this->ecotax;
    }

    public function setEcotax(?float $ecotax): self
    {
        $this->ecotax = $ecotax;

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

    public function getUnitPriceImpact(): ?string
    {
        return $this->unitPriceImpact;
    }

    public function setUnitPriceImpact(?string $unitPriceImpact): self
    {
        $this->unitPriceImpact = $unitPriceImpact;

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

    public function getDefaultOn(): ?bool
    {
        return $this->defaultOn;
    }

    public function setDefaultOn(?bool $defaultOn): self
    {
        $this->defaultOn = $defaultOn;

        return $this;
    }

    public function getAvailableDate(): ?\DateTime
    {
        return $this->availableDate;
    }

    public function setAvailableDate(?\DateTime $availableDate): self
    {
        $this->availableDate = $availableDate;

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
