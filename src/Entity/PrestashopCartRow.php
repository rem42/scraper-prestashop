<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCartRow
{
    public ?int $idProduct = null;
    public ?int $idProductAttribute = null;
    public ?int $idAddressDelivery = null;
    public ?int $quantity = null;

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

    public function setIdAddressDelivery(?int $idAddressDelivery): self
    {
        $this->idAddressDelivery = $idAddressDelivery;
        return $this;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }
}
