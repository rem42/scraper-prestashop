<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class PrestashopCartRules
{
    /** @var Collection<int, PrestashopCartRule> */
    private Collection $cartRules;

    public function __construct()
    {
        $this->cartRules = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopCartRule>
     */
    public function getCartRules(): Collection
    {
        return $this->cartRules;
    }

    public function addCartRule(PrestashopCartRule $cartRule): self
    {
        $this->cartRules->add($cartRule);

        return $this;
    }

    public function removeCartRule(PrestashopCartRule $cartRule): self
    {
        $this->cartRules->removeElement($cartRule);

        return $this;
    }
}
