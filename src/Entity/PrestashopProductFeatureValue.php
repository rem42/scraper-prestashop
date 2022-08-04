<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopProductFeatureValue
{
    /** @var array<int, PrestashopItem> */
    public array $value       = [];
    public ?int $id           = null;
    public ?string $idFeature = null;
    public ?bool $custom      = null;

    public function addValue(PrestashopItem $value): self
    {
        $this->value[] = $value;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdFeature(?string $idFeature): self
    {
        $this->idFeature = $idFeature;
        return $this;
    }

    public function setCustom(?bool $custom): self
    {
        $this->custom = $custom;
        return $this;
    }
}
