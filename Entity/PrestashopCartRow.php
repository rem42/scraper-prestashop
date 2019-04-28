<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopCartRow
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_product")
     */
    protected $idProduct;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_product_attribute")
     */
    protected $idProductAttribute;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_address_delivery")
     */
    protected $idAddressDelivery;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("quantity")
     */
    protected $quantity;

    /**
     * @return int
     */
    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    /**
     * @param int $idProduct
     *
     * @return $this
     */
    public function setIdProduct(?int $idProduct)
    {
        $this->idProduct = $idProduct;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdProductAttribute(): ?int
    {
        return $this->idProductAttribute;
    }

    /**
     * @param int $idProductAttribute
     *
     * @return $this
     */
    public function setIdProductAttribute(?int $idProductAttribute)
    {
        $this->idProductAttribute = $idProductAttribute;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdAddressDelivery(): ?int
    {
        return $this->idAddressDelivery;
    }

    /**
     * @param int $idAddressDelivery
     *
     * @return $this
     */
    public function setIdAddressDelivery(?int $idAddressDelivery)
    {
        $this->idAddressDelivery = $idAddressDelivery;
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
}
