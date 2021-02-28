<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt;

final class PrestashopTntofficielReceiver
{
    private ?int $id = null;

    private ?int $idAddress = null;

    private ?string $email = null;

    private ?string $mobile = null;

    private ?string $building = null;

    private ?string $accessCode = null;

    private ?string $floor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdAddress(): ?int
    {
        return $this->idAddress;
    }

    public function setIdAddress(?int $idAddress): self
    {
        $this->idAddress = $idAddress;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getBuilding(): ?string
    {
        return $this->building;
    }

    public function setBuilding(?string $building): self
    {
        $this->building = $building;

        return $this;
    }

    public function getAccessCode(): ?string
    {
        return $this->accessCode;
    }

    public function setAccessCode(?string $accessCode): self
    {
        $this->accessCode = $accessCode;

        return $this;
    }

    public function getFloor(): ?string
    {
        return $this->floor;
    }

    public function setFloor(?string $floor): self
    {
        $this->floor = $floor;

        return $this;
    }
}
