<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity\CadoMaestro;

use Scraper\ScraperPrestashop\Entity\PrestashopItem;

class PrestashopPackage
{
    public ?int $id = null;
    public ?string $idPackageType = null;
    /** @var array<int, PrestashopItem> */
    public array $name = [];
    /** @var array<int, PrestashopItem> */
    public array $picto = [];
    public ?string $default = null;
    public ?string $actif = null;
    public ?string $dateAdd = null;
    public ?string $dateUpd = null;

    public function addName(PrestashopItem $name): self
    {
        $this->name[] = $name;
        return $this;
    }

    public function addPicto(PrestashopItem $picto): self
    {
        $this->picto[] = $picto;
        return $this;
    }
}
