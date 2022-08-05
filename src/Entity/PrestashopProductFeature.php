<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopProductFeature
{
    /** @var array<int, PrestashopItem> */
    public array $name = [];
    public ?int $id = null;
    public ?int $idFeatureValue = null;
    public ?string $position = null;

    public function addName(PrestashopItem $name): self
    {
        $this->name[] = $name;

        return $this;
    }
}
