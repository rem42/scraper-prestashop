<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopStockAvailable
{
    private ?int $id = null;

    private ?int $idProduct = null;

    private ?int $idProductAttribute = null;

    private ?int $idShop = null;

    private ?int $idShopGroup = null;

    private ?int $quantity = null;

    private ?int $dependsOnStock = null;

    private ?int $outOfStock = null;

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

    public function getIdProductAttribute(): ?int
    {
        return $this->idProductAttribute;
    }

    public function setIdProductAttribute(?int $idProductAttribute): self
    {
        $this->idProductAttribute = $idProductAttribute;

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

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    public function setIdShopGroup(?int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;

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

    public function getDependsOnStock(): ?int
    {
        return $this->dependsOnStock;
    }

    public function setDependsOnStock(?int $dependsOnStock): self
    {
        $this->dependsOnStock = $dependsOnStock;

        return $this;
    }

    public function getOutOfStock(): ?int
    {
        return $this->outOfStock;
    }

    public function setOutOfStock(?int $outOfStock): self
    {
        $this->outOfStock = $outOfStock;

        return $this;
    }
}
