<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCartRow
{
    private ?int $idProduct = null;

    private ?int $idProductAttribute = null;

    private ?int $idAddressDelivery = null;

    private ?int $quantity = null;

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

    public function getIdAddressDelivery(): ?int
    {
        return $this->idAddressDelivery;
    }

    public function setIdAddressDelivery(?int $idAddressDelivery): self
    {
        $this->idAddressDelivery = $idAddressDelivery;

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
}
