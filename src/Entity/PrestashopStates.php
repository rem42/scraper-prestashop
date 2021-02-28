<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopStates
{
    /** @var Collection<int, PrestashopState> */
    private Collection $states;

    public function __construct()
    {
        $this->states = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopState>
     */
    public function getStates(): Collection
    {
        return $this->states;
    }

    public function addState(PrestashopState $state): self
    {
        $this->states->add($state);

        return $this;
    }

    public function removeState(PrestashopState $state): self
    {
        $this->states->removeElement($state);

        return $this;
    }
}
