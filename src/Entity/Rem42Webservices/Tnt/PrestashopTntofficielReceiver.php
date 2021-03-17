<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt;

final class PrestashopTntofficielReceiver
{
    private ?int $id = null;

    private ?int $idAddress = null;

    private ?string $receiverEmail = null;

    private ?string $receiverMobile = null;

    private ?string $receiverBuilding = null;

    private ?string $receiverAccesscode = null;

    private ?string $receiverFloor = null;

    private ?string $receiverInstructions = null;

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

    public function getReceiverEmail(): ?string
    {
        return $this->receiverEmail;
    }

    public function setReceiverEmail(?string $receiverEmail): self
    {
        $this->receiverEmail = $receiverEmail;

        return $this;
    }

    public function getReceiverMobile(): ?string
    {
        return $this->receiverMobile;
    }

    public function setReceiverMobile(?string $receiverMobile): self
    {
        $this->receiverMobile = $receiverMobile;

        return $this;
    }

    public function getReceiverBuilding(): ?string
    {
        return $this->receiverBuilding;
    }

    public function setReceiverBuilding(?string $receiverBuilding): self
    {
        $this->receiverBuilding = $receiverBuilding;

        return $this;
    }

    public function getReceiverAccesscode(): ?string
    {
        return $this->receiverAccesscode;
    }

    public function setReceiverAccesscode(?string $receiverAccesscode): self
    {
        $this->receiverAccesscode = $receiverAccesscode;

        return $this;
    }

    public function getReceiverFloor(): ?string
    {
        return $this->receiverFloor;
    }

    public function setReceiverFloor(?string $receiverFloor): self
    {
        $this->receiverFloor = $receiverFloor;

        return $this;
    }

    public function getReceiverInstructions(): ?string
    {
        return $this->receiverInstructions;
    }

    public function setReceiverInstructions(?string $receiverInstructions): self
    {
        $this->receiverInstructions = $receiverInstructions;

        return $this;
    }
}
