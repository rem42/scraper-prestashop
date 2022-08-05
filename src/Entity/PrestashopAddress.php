<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopAddress
{
    public ?int $id = null;
    public ?int $idCustomer = null;
    public ?int $idManufacturer = null;
    public ?int $idSupplier = null;
    public ?int $idWarehouse = null;
    public ?int $idCountry = null;
    public ?int $idState = null;
    public ?string $alias = null;
    public ?string $company = null;
    public ?string $lastname = null;
    public ?string $firstname = null;
    public ?string $vatNumber = null;
    public ?string $address1 = null;
    public ?string $address2 = null;
    public ?string $postcode = null;
    public ?string $city = null;
    public ?string $other = null;
    public ?string $phone = null;
    public ?string $phoneMobile = null;
    public ?string $dni = null;
    public ?bool $deleted = null;
    public ?\DateTimeInterface $dateAdd = null;
    public ?\DateTimeInterface $dateUpd = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdCustomer(?int $idCustomer): self
    {
        $this->idCustomer = $idCustomer;
        return $this;
    }

    public function setIdManufacturer(?int $idManufacturer): self
    {
        $this->idManufacturer = $idManufacturer;
        return $this;
    }

    public function setIdSupplier(?int $idSupplier): self
    {
        $this->idSupplier = $idSupplier;
        return $this;
    }

    public function setIdWarehouse(?int $idWarehouse): self
    {
        $this->idWarehouse = $idWarehouse;
        return $this;
    }

    public function setIdCountry(?int $idCountry): self
    {
        $this->idCountry = $idCountry;
        return $this;
    }

    public function setIdState(?int $idState): self
    {
        $this->idState = $idState;
        return $this;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;
        return $this;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function setVatNumber(?string $vatNumber): self
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;
        return $this;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;
        return $this;
    }

    public function setPostcode(?string $postcode): self
    {
        $this->postcode = $postcode;
        return $this;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function setOther(?string $other): self
    {
        $this->other = $other;
        return $this;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function setPhoneMobile(?string $phoneMobile): self
    {
        $this->phoneMobile = $phoneMobile;
        return $this;
    }

    public function setDni(?string $dni): self
    {
        $this->dni = $dni;
        return $this;
    }

    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;
        return $this;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    public function setDateUpd(?\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }
}
