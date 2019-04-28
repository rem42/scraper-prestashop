<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PrestashopStockAvailable
 *
 * @Serializer\XmlRoot(name="stock_available")
 */
class PrestashopStockAvailable
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    protected $id;
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
     * @Serializer\SerializedName("id_shop")
     */
    protected $idShop;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_shop_group")
     */
    protected $idShopGroup;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("quantity")
     */
    protected $quantity;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("depends_on_stock")
     */
    protected $dependsOnStock;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("out_of_stock")
     */
    protected $outOfStock;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId(?int $id)
    {
        $this->id = $id;
        return $this;
    }

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
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    /**
     * @param int $idShop
     *
     * @return $this
     */
    public function setIdShop(?int $idShop)
    {
        $this->idShop = $idShop;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    /**
     * @param int $idShopGroup
     *
     * @return $this
     */
    public function setIdShopGroup(?int $idShopGroup)
    {
        $this->idShopGroup = $idShopGroup;
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

    /**
     * @return int
     */
    public function getDependsOnStock(): ?int
    {
        return $this->dependsOnStock;
    }

    /**
     * @param int $dependsOnStock
     *
     * @return $this
     */
    public function setDependsOnStock(?int $dependsOnStock)
    {
        $this->dependsOnStock = $dependsOnStock;
        return $this;
    }

    /**
     * @return int
     */
    public function getOutOfStock(): ?int
    {
        return $this->outOfStock;
    }

    /**
     * @param int $outOfStock
     *
     * @return $this
     */
    public function setOutOfStock(?int $outOfStock)
    {
        $this->outOfStock = $outOfStock;
        return $this;
    }
}
