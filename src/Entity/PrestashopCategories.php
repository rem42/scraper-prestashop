<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopCategories
{
    /** @var Collection<int, PrestashopCategory> */
    private Collection $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopCategory>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
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
}
