<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity\CadoMaestro;

class PrestashopPackageTypes
{
    /** @var array<int, PrestashopPackageType> */
    public array $packageTypes = [];

    public function addPackageType(PrestashopPackageType $packageType): self
    {
        $this->packageTypes[] = $packageType;
        return $this;
    }
}
