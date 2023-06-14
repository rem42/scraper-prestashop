<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

class PrestashopCurrencies
{
    /** @var array<int, PrestashopCurrency> */
    public array $currencies = [];

    public function addCurrency(PrestashopCurrency $currency): self
    {
        $this->currencies[] = $currency;

        return $this;
    }
}
