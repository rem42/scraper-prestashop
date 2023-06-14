<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopStockAvailable
{
    public ?int $id = null;
    public ?int $idProduct = null;
    public ?int $idProductAttribute = null;
    public ?int $idShop = null;
    public ?int $idShopGroup = null;
    public ?int $quantity = null;
    public ?int $dependsOnStock = null;
    public ?int $outOfStock = null;

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

    public function setIdProductAttribute(?int $idProductAttribute): self
    {
        $this->idProductAttribute = $idProductAttribute;
        return $this;
    }

    public function setIdShop(?int $idShop): self
    {
        $this->idShop = $idShop;
        return $this;
    }

    public function setIdShopGroup(?int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;
        return $this;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function setDependsOnStock(?int $dependsOnStock): self
    {
        $this->dependsOnStock = $dependsOnStock;
        return $this;
    }

    public function setOutOfStock(?int $outOfStock): self
    {
        $this->outOfStock = $outOfStock;
        return $this;
    }
}
