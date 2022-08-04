<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCountries
{
    /** @var array<int, PrestashopCountry> */
    public array $countries = [];

    public function addCountry(PrestashopCountry $country): self
    {
        $this->countries[] = $country;

        return $this;
    }
}
