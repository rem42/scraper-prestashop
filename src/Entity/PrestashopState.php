<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopState
{
    private ?int $id = null;

    private ?int $idZone = null;

    private ?int $idCountry = null;

    private ?string $isoCode = null;

    private ?string $name = null;

    private ?bool $active = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdZone(): ?int
    {
        return $this->idZone;
    }

    public function setIdZone(?int $idZone): self
    {
        $this->idZone = $idZone;

        return $this;
    }

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }

    public function setIdCountry(?int $idCountry): self
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    public function setIsoCode(?string $isoCode): self
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
