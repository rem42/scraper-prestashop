<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopState
{
    public ?int $id         = null;
    public ?int $idZone     = null;
    public ?int $idCountry  = null;
    public ?string $isoCode = null;
    public ?string $name    = null;
    public ?bool $active    = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdZone(?int $idZone): self
    {
        $this->idZone = $idZone;
        return $this;
    }

    public function setIdCountry(?int $idCountry): self
    {
        $this->idCountry = $idCountry;
        return $this;
    }

    public function setIsoCode(?string $isoCode): self
    {
        $this->isoCode = $isoCode;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }
}
