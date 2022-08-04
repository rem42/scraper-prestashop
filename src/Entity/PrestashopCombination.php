<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCombination
{
    public ?string $ean13;
    public ?int $id                              = null;
    public ?int $idProduct                       = null;
    public ?string $location                     = null;
    public ?string $isbn                         = null;
    public ?string $upc                          = null;
    public ?int $quantity                        = null;
    public ?string $reference                    = null;
    public ?string $supplierReference            = null;
    public ?float $wholesalePrice                = null;
    public ?float $price                         = null;
    public ?float $ecotax                        = null;
    public ?float $weight                        = null;
    public ?string $unitPriceImpact              = null;
    public ?int $minimalQuantity                 = null;
    public ?bool $defaultOn                      = null;
    public ?\DateTime $availableDate             = null;
    public ?PrestashopAssociations $associations = null;

    public function setEan13(?string $ean13): self
    {
        $this->ean13 = $ean13;
        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdProduct(?int $idProduct): self
    {
        $this->idProduct = $idProduct;
        return $this;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
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

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
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

    public function setWholesalePrice(?float $wholesalePrice): self
    {
        $this->wholesalePrice = $wholesalePrice;
        return $this;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setEcotax(?float $ecotax): self
    {
        $this->ecotax = $ecotax;
        return $this;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    public function setUnitPriceImpact(?string $unitPriceImpact): self
    {
        $this->unitPriceImpact = $unitPriceImpact;
        return $this;
    }

    public function setMinimalQuantity(?int $minimalQuantity): self
    {
        $this->minimalQuantity = $minimalQuantity;
        return $this;
    }

    public function setDefaultOn(?bool $defaultOn): self
    {
        $this->defaultOn = $defaultOn;
        return $this;
    }

    public function setAvailableDate(?\DateTime $availableDate): self
    {
        $this->availableDate = $availableDate;
        return $this;
    }

    public function setAssociations(?PrestashopAssociations $associations): self
    {
        $this->associations = $associations;
        return $this;
    }
}
