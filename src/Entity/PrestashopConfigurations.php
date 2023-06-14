<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

class PrestashopConfigurations
{
    /** @var array<int, PrestashopConfiguration> */
    public array $configurations = [];

    public function addConfiguration(PrestashopConfiguration $configuration): self
    {
        $this->configurations[] = $configuration;

        return $this;
    }
}
