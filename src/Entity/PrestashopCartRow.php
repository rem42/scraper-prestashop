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

    /**
     * @return PrestashopCartRow
     */
    public function setIdProduct(?int $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getIdProductAttribute(): ?int
    {
        return $this->idProductAttribute;
    }

    /**
     * @return PrestashopCartRow
     */
    public function setIdProductAttribute(?int $idProductAttribute): self
    {
        $this->idProductAttribute = $idProductAttribute;

        return $this;
    }

    public function getIdAddressDelivery(): ?int
    {
        return $this->idAddressDelivery;
    }

    /**
     * @return PrestashopCartRow
     */
    public function setIdAddressDelivery(?int $idAddressDelivery): self
    {
        $this->idAddressDelivery = $idAddressDelivery;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @return PrestashopCartRow
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
