<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopCombinations
{
    /** @var Collection<int, PrestashopCombination> */
    private Collection $combinations;

    public function __construct()
    {
        $this->combinations = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopCombination>
     */
    public function getCombinations(): Collection
    {
        return $this->combinations;
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
}
