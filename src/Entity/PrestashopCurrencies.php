<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class PrestashopCurrencies
{
    /** @var Collection<int, PrestashopCurrency> */
    private Collection $currencies;

    public function __construct()
    {
        $this->currencies = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopCurrency>
     */
    public function getCurrencies(): Collection
    {
        return $this->currencies;
    }

    public function addCurrency(PrestashopCurrency $currency): self
    {
        $this->currencies->add($currency);

        return $this;
    }

    public function removeCurrency(PrestashopCurrency $currency): self
    {
        $this->currencies->removeElement($currency);

        return $this;
    }
}
