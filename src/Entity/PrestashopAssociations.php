<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopAssociations
{
    /** @var array<int, PrestashopCartRow> */
    public array $cartRows = [];

    /** @var array<int, PrestashopOrderRow> */
    public array $orderRows = [];

    /** @var array<int, PrestashopGroup> */
    public array $groups = [];

    /** @var array<int, PrestashopCategory> */
    public array $categories = [];

    /** @var array<int, PrestashopImage> */
    public array $images = [];

    /** @var array<int, PrestashopProductFeature> */
    public array $productFeatures = [];

    /** @var array<int, PrestashopStockAvailable> */
    public array $stockAvailables = [];

    /** @var array<int, PrestashopCombination> */
    public array $combinations = [];

    /** @var array<int, PrestashopProductOptionValue> */
    public array $productOptionValues = [];

    /** @var array<int, PrestashopProductBundle> */
    public array $productBundle = [];

    public function addCartRow(PrestashopCartRow $cartRow): self
    {
        $this->cartRows[] = $cartRow;

        return $this;
    }

    public function addOrderRow(PrestashopOrderRow $orderRow): self
    {
        $this->orderRows[] = $orderRow;

        return $this;
    }

    public function addGroup(PrestashopGroup $group): self
    {
        $this->groups[] = $group;

        return $this;
    }

    public function addCategory(PrestashopCategory $category): self
    {
        $this->categories[] = $category;

        return $this;
    }

    public function addImage(PrestashopImage $image): self
    {
        $this->images[] = $image;

        return $this;
    }

    public function addProductFeature(PrestashopProductFeature $productFeature): self
    {
        $this->productFeatures[] = $productFeature;

        return $this;
    }

    public function addStockAvailable(PrestashopStockAvailable $stockAvailable): self
    {
        $this->stockAvailables[] = $stockAvailable;

        return $this;
    }

    public function addCombination(PrestashopCombination $combination): self
    {
        $this->combinations[] = $combination;

        return $this;
    }

    public function addProductOptionValue(PrestashopProductOptionValue $productOptionValue): self
    {
        $this->productOptionValues[] = $productOptionValue;

        return $this;
    }

    public function addProductBundle(PrestashopProductBundle $productBundle): self
    {
        $this->productBundle[] = $productBundle;

        return $this;
    }
}
