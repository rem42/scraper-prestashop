<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopProductOptionValue
{
    /** @var array<int, PrestashopItem> */
    public array $name = [];
    public ?int $id = null;
    public ?int $idAttributeGroup = null;
    public ?string $color = null;
    public ?int $position = null;

    public function addName(PrestashopItem $name): self
    {
        $this->name[] = $name;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdAttributeGroup(?int $idAttributeGroup): self
    {
        $this->idAttributeGroup = $idAttributeGroup;
        return $this;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
}
