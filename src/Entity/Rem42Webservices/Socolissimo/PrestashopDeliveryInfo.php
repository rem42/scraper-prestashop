<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Socolissimo;

final class PrestashopDeliveryInfo
{
    private ?string $address1;

    private ?string $address2;

    private ?int $id = null;

    private ?int $idOrder = null;

    private ?int $idCart = null;

    private ?int $idCustomer = null;

    private ?string $idPoint = null;

    private ?string $firstname = null;

    private ?string $lastname = null;

    private ?string $company = null;

    private ?string $phoneMobile = null;

    private ?string $email = null;

    private ?string $type = null;

    private ?string $libelle = null;

    private ?string $indice = null;

    private ?string $postcode = null;

    private ?string $city = null;

    private ?string $country = null;

    private ?string $lieudit = null;

    private ?string $informations = null;

    private ?string $reseau = null;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getIdCart(): ?int
    {
        return $this->idCart;
    }

    public function setIdCart(?int $idCart): self
    {
        $this->idCart = $idCart;

        return $this;
    }

    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }

    public function setIdCustomer(?int $idCustomer): self
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    public function getIdPoint(): ?string
    {
        return $this->idPoint;
    }

    public function setIdPoint(?string $idPoint): self
    {
        $this->idPoint = $idPoint;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getPhoneMobile(): ?string
    {
        return $this->phoneMobile;
    }

    public function setPhoneMobile(?string $phoneMobile): self
    {
        $this->phoneMobile = $phoneMobile;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getIndice(): ?string
    {
        return $this->indice;
    }

    public function setIndice(?string $indice): self
    {
        $this->indice = $indice;

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

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getLieudit(): ?string
    {
        return $this->lieudit;
    }

    public function setLieudit(?string $lieudit): self
    {
        $this->lieudit = $lieudit;

        return $this;
    }

    public function getInformations(): ?string
    {
        return $this->informations;
    }

    public function setInformations(?string $informations): self
    {
        $this->informations = $informations;

        return $this;
    }

    public function getReseau(): ?string
    {
        return $this->reseau;
    }

    public function setReseau(?string $reseau): self
    {
        $this->reseau = $reseau;

        return $this;
    }
}
