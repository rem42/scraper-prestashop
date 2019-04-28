<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopAssociations
{
    /**
     * @var ArrayCollection|PrestashopCartRow[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopCartRow>")
     * @Serializer\SerializedName("cart_rows")
     */
    protected $cartRows;
    /**
     * @var ArrayCollection|PrestashopOrderRow[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopOrderRow>")
     * @Serializer\SerializedName("order_rows")
     */
    protected $orderRows;
    /**
     * @var ArrayCollection|PrestashopGroup[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopGroup>")
     * @Serializer\SerializedName("groups")
     */
    protected $groups;
    /**
     * @var ArrayCollection|PrestashopCategory[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopCategory>")
     * @Serializer\SerializedName("categories")
     */
    protected $categories;
    /**
     * @var ArrayCollection|PrestashopImage[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopImage>")
     * @Serializer\SerializedName("images")
     */
    protected $images;
    /**
     * @var ArrayCollection|PrestashopProductFeature[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopProductFeature>")
     * @Serializer\SerializedName("product_features")
     */
    protected $productFeatures;
    /**
     * @var ArrayCollection|PrestashopStockAvailable[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopStockAvailable>")
     * @Serializer\SerializedName("stock_availables")
     */
    protected $stockAvailables;
    /**
     * @var ArrayCollection|PrestashopCombination[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopCombination>")
     * @Serializer\SerializedName("combinations")
     */
    protected $combinations;
    /**
     * @var ArrayCollection|PrestashopProductOptionValue[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopProductOptionValue>")
     * @Serializer\SerializedName("product_option_values")
     */
    protected $productOptionValues;
    /**
     * @var ArrayCollection|PrestashopProductOptionValue[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopProduct>")
     * @Serializer\SerializedName("product_bundle")
     */
    protected $productBundle;

    /**
     * @return ArrayCollection|PrestashopCartRow[]
     */
    public function getCartRows()
    {
        return $this->cartRows;
    }

    /**
     * @param ArrayCollection|PrestashopCartRow[] $cartRows
     *
     * @return $this
     */
    public function setCartRows($cartRows)
    {
        $this->cartRows = $cartRows;
        return $this;
    }

    /**
     * @return ArrayCollection|PrestashopOrderRow[]
     */
    public function getOrderRows()
    {
        return $this->orderRows;
    }

    /**
     * @param ArrayCollection|PrestashopOrderRow[] $orderRows
     *
     * @return $this
     */
    public function setOrderRows($orderRows)
    {
        $this->orderRows = $orderRows;
        return $this;
    }

    /**
     * @return ArrayCollection|PrestashopGroup[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param ArrayCollection|PrestashopGroup[] $groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
        return $this;
    }

    /**
     * @return ArrayCollection|PrestashopCategory[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param ArrayCollection|PrestashopCategory[] $categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @return ArrayCollection|PrestashopImage[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param ArrayCollection|PrestashopImage[] $images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return ArrayCollection|PrestashopProductFeature[]
     */
    public function getProductFeatures()
    {
        return $this->productFeatures;
    }

    /**
     * @param ArrayCollection|PrestashopProductFeature[] $productFeatures
     *
     * @return $this
     */
    public function setProductFeatures($productFeatures)
    {
        $this->productFeatures = $productFeatures;
        return $this;
    }

    /**
     * @return ArrayCollection|PrestashopStockAvailable[]
     */
    public function getStockAvailables()
    {
        return $this->stockAvailables;
    }

    /**
     * @param ArrayCollection|PrestashopStockAvailable[] $stockAvailables
     *
     * @return $this
     */
    public function setStockAvailables($stockAvailables)
    {
        $this->stockAvailables = $stockAvailables;
        return $this;
    }

    /**
     * @return ArrayCollection|PrestashopCombination[]
     */
    public function getCombinations()
    {
        return $this->combinations;
    }

    /**
     * @param ArrayCollection|PrestashopCombination[] $combinations
     *
     * @return $this
     */
    public function setCombinations($combinations)
    {
        $this->combinations = $combinations;
        return $this;
    }

    /**
     * @return ArrayCollection|PrestashopProductOptionValue[]
     */
    public function getProductOptionValues()
    {
        return $this->productOptionValues;
    }

    /**
     * @param ArrayCollection|PrestashopProductOptionValue[] $productOptionValues
     *
     * @return $this
     */
    public function setProductOptionValues($productOptionValues)
    {
        $this->productOptionValues = $productOptionValues;
        return $this;
    }

    /**
     * @return ArrayCollection|PrestashopProductOptionValue[]
     */
    public function getProductBundle()
    {
        return $this->productBundle;
    }

    /**
     * @param ArrayCollection|PrestashopProductOptionValue[] $productBundle
     *
     * @return $this
     */
    public function setProductBundle($productBundle)
    {
        $this->productBundle = $productBundle;
        return $this;
    }
}
