<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity\CadoMaestro;

class PrestashopPackages
{
    /** @var array<int, PrestashopPackage> */
    public array $packages = [];

    public function addPackage(PrestashopPackage $package): self
    {
        $this->packages[] = $package;
        return $this;
    }
}
