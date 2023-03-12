<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopStates
{
    /** @var array<int, PrestashopState> */
    public array $states = [];

    public function addState(PrestashopState $state): self
    {
        $this->states[] = $state;

        return $this;
    }
}
