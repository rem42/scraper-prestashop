<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt;

final class PrestashopTntOfficielDeliveryPoint
{
    private ?string $address1 = null;

    private ?string $address2 = null;

    private ?string $xett = null;

    private ?string $pex = null;

    private ?string $name = null;

    private ?string $city = null;

    private ?string $postcode = null;

    private ?string $address = null;

    private ?string $latitude = null;

    private ?string $longitude = null;

    private ?bool $enabled = null;

    private ?string $closing = null;

    private ?string $reopening = null;

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getXett(): ?string
    {
        return $this->xett;
    }

    public function setXett(?string $xett): self
    {
        $this->xett = $xett;

        return $this;
    }

    public function getPex(): ?string
    {
        return $this->pex;
    }

    public function setPex(?string $pex): self
    {
        $this->pex = $pex;

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

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(?string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getClosing(): ?string
    {
        return $this->closing;
    }

    public function setClosing(?string $closing): self
    {
        $this->closing = $closing;

        return $this;
    }

    public function getReopening(): ?string
    {
        return $this->reopening;
    }

    public function setReopening(?string $reopening): self
    {
        $this->reopening = $reopening;

        return $this;
    }
}
