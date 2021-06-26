<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopCountries
{
    /** @var Collection<int, PrestashopCountry> */
    private Collection $countries;

    public function __construct()
    {
        $this->countries = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopCountry>
     */
    public function getCountries(): Collection
    {
        return $this->countries;
    }

    public function addCountry(PrestashopCountry $country): self
    {
        $this->countries->add($country);

        return $this;
    }

    public function removeCountry(PrestashopCountry $country): self
    {
        $this->countries->removeElement($country);

        return $this;
    }
}
