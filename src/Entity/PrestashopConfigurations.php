<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class PrestashopConfigurations
{
    /** @var Collection<int, PrestashopConfiguration> */
    private Collection $configurations;

    public function __construct()
    {
        $this->configurations = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopConfiguration>
     */
    public function getConfigurations(): Collection
    {
        return $this->configurations;
    }

    public function addConfiguration(PrestashopConfiguration $configuration): self
    {
        $this->configurations->add($configuration);

        return $this;
    }

    public function removeConfiguration(PrestashopConfiguration $configuration): self
    {
        $this->configurations->removeElement($configuration);

        return $this;
    }
}
