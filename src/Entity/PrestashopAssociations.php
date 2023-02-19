<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopAssociations
{
    /** @var Collection<int, PrestashopCartRow> */
    private Collection $cartRows;

    /** @var Collection<int, PrestashopOrderRow> */
    private Collection $orderRows;

    /** @var Collection<int, PrestashopGroup> */
    private Collection $groups;

    /** @var Collection<int, PrestashopCategory> */
    private Collection $categories;

    /** @var Collection<int, PrestashopImage> */
    private Collection $images;

    /** @var Collection<int, PrestashopProductFeature> */
    private Collection $productFeatures;

    /** @var Collection<int, PrestashopStockAvailable> */
    private Collection $stockAvailables;

    /** @var Collection<int, PrestashopCombination> */
    private Collection $combinations;

    /** @var Collection<int, PrestashopProductOptionValue> */
    private Collection $productOptionValues;

    /** @var Collection<int, PrestashopProductBundle> */
    private Collection $productBundle;

    public function __construct()
    {
        $this->cartRows = new ArrayCollection();
        $this->orderRows = new ArrayCollection();
        $this->groups = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->images = new ArrayCollection();
        $this->productFeatures = new ArrayCollection();
        $this->stockAvailables = new ArrayCollection();
        $this->combinations = new ArrayCollection();
        $this->productOptionValues = new ArrayCollection();
        $this->productBundle = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopCartRow>
     */
    public function getCartRows(): Collection
    {
        return $this->cartRows;
    }

    /**
     * @return Collection<int, PrestashopOrderRow>
     */
    public function getOrderRows(): Collection
    {
        return $this->orderRows;
    }

    /**
     * @return Collection<int, PrestashopGroup>
     */
    public function getGroups(): Collection
    {
        return $this->groups;
    }

    /**
     * @return Collection<int, PrestashopCategory>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    /**
     * @return Collection<int, PrestashopImage>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    /**
     * @return Collection<int, PrestashopProductFeature>
     */
    public function getProductFeatures(): Collection
    {
        return $this->productFeatures;
    }

    /**
     * @return Collection<int, PrestashopStockAvailable>
     */
    public function getStockAvailables(): Collection
    {
        return $this->stockAvailables;
    }

    /**
     * @return Collection<int, PrestashopCombination>
     */
    public function getCombinations(): Collection
    {
        return $this->combinations;
    }

    /**
     * @return Collection<int, PrestashopProductOptionValue>
     */
    public function getProductOptionValues(): Collection
    {
        return $this->productOptionValues;
    }

    /**
     * @return Collection<int, PrestashopProductBundle>
     */
    public function getProductBundle(): Collection
    {
        return $this->productBundle;
    }

    public function addCartRow(PrestashopCartRow $cartRow): self
    {
        $this->cartRows->add($cartRow);

        return $this;
    }

    public function removeCartRow(PrestashopCartRow $cartRow): self
    {
        $this->cartRows->removeElement($cartRow);

        return $this;
    }

    public function addOrderRow(PrestashopOrderRow $orderRow): self
    {
        $this->orderRows->add($orderRow);

        return $this;
    }

    public function removeOrderRow(PrestashopOrderRow $orderRow): self
    {
        $this->orderRows->removeElement($orderRow);

        return $this;
    }

    public function addGroup(PrestashopGroup $group): self
    {
        $this->groups->add($group);

        return $this;
    }

    public function removeGroup(PrestashopGroup $group): self
    {
        $this->groups->removeElement($group);

        return $this;
    }

    public function addCategory(PrestashopCategory $category): self
    {
        $this->categories->add($category);

        return $this;
    }

    public function removeCategory(PrestashopCategory $category): self
    {
        $this->categories->removeElement($category);

        return $this;
    }

    public function addImage(PrestashopImage $image): self
    {
        $this->images->add($image);

        return $this;
    }

    public function removeImage(PrestashopImage $image): self
    {
        $this->images->removeElement($image);

        return $this;
    }

    public function addProductFeature(PrestashopProductFeature $productFeature): self
    {
        $this->productFeatures->add($productFeature);

        return $this;
    }

    public function removeProductFeature(PrestashopProductFeature $productFeature): self
    {
        $this->productFeatures->removeElement($productFeature);

        return $this;
    }

    public function addStockAvailable(PrestashopStockAvailable $stockAvailable): self
    {
        $this->stockAvailables->add($stockAvailable);

        return $this;
    }

    public function removeStockAvailable(PrestashopStockAvailable $stockAvailable): self
    {
        $this->stockAvailables->removeElement($stockAvailable);

        return $this;
    }

    public function addCombination(PrestashopCombination $combination): self
    {
        $this->combinations->add($combination);

        return $this;
    }

    public function removeCombination(PrestashopCombination $combination): self
    {
        $this->combinations->removeElement($combination);

        return $this;
    }

    public function addProductOptionValue(PrestashopProductOptionValue $productOptionValue): self
    {
        $this->productOptionValues->add($productOptionValue);

        return $this;
    }

    public function removeProductOptionValue(PrestashopProductOptionValue $productOptionValue): self
    {
        $this->productOptionValues->removeElement($productOptionValue);

        return $this;
    }

    public function addProductBundle(PrestashopProductBundle $productBundle): self
    {
        $this->productBundle->add($productBundle);

        return $this;
    }

    public function removeProductBundle(PrestashopProductBundle $productBundle): self
    {
        $this->productBundle->removeElement($productBundle);

        return $this;
    }
}
