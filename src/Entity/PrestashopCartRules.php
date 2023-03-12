<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

class PrestashopCartRules
{
    /** @var array<int, PrestashopCartRule> */
    public array $cartRules = [];

    public function addCartRule(PrestashopCartRule $cartRule): self
    {
        $this->cartRules[] = $cartRule;

        return $this;
    }
}
