<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Socolissimo;

use JMS\Serializer\Annotation as Serializer;

class PrestashopDeliveryInfo
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    protected $id;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_order")
     */
    protected $idOrder;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_cart")
     */
    protected $idCart;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_customer")
     */
    protected $idCustomer;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id_point")
     */
    protected $idPoint;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstname")
     */
    protected $firstname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastname")
     */
    protected $lastname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("company")
     */
    protected $company;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("telephone")
     */
    protected $phoneMobile;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("email")
     */
    protected $email;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    protected $type;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("libelle")
     */
    protected $libelle;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("indice")
     */
    protected $indice;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("postcode")
     */
    protected $postcode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     */
    protected $city;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("country")
     */
    protected $country;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address1")
     */
    protected $address1;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address2")
     */
    protected $address2;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lieudit")
     */
    protected $lieudit;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("informations")
     */
    protected $informations;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("reseau")
     */
    protected $reseau;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId(?int $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    /**
     * @param int $idOrder
     *
     * @return $this
     */
    public function setIdOrder(?int $idOrder)
    {
        $this->idOrder = $idOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCart(): ?int
    {
        return $this->idCart;
    }

    /**
     * @param int $idCart
     *
     * @return $this
     */
    public function setIdCart(?int $idCart)
    {
        $this->idCart = $idCart;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }

    /**
     * @param int $idCustomer
     *
     * @return $this
     */
    public function setIdCustomer(?int $idCustomer)
    {
        $this->idCustomer = $idCustomer;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdPoint(): ?string
    {
        return $this->idPoint;
    }

    /**
     * @param string $idPoint
     *
     * @return $this
     */
    public function setIdPoint(?string $idPoint)
    {
        $this->idPoint = $idPoint;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     *
     * @return $this
     */
    public function setFirstname(?string $firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     *
     * @return $this
     */
    public function setLastname(?string $lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string $company
     *
     * @return $this
     */
    public function setCompany(?string $company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneMobile(): ?string
    {
        return $this->phoneMobile;
    }

    /**
     * @param string $phoneMobile
     *
     * @return $this
     */
    public function setPhoneMobile(?string $phoneMobile)
    {
        $this->phoneMobile = $phoneMobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(?string $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     *
     * @return $this
     */
    public function setLibelle(?string $libelle)
    {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndice(): ?string
    {
        return $this->indice;
    }

    /**
     * @param string $indice
     *
     * @return $this
     */
    public function setIndice(?string $indice)
    {
        $this->indice = $indice;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     *
     * @return $this
     */
    public function setPostcode(?string $postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity(?string $city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry(?string $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     *
     * @return $this
     */
    public function setAddress1(?string $address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     *
     * @return $this
     */
    public function setAddress2(?string $address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getLieudit(): ?string
    {
        return $this->lieudit;
    }

    /**
     * @param string $lieudit
     *
     * @return $this
     */
    public function setLieudit(?string $lieudit)
    {
        $this->lieudit = $lieudit;
        return $this;
    }

    /**
     * @return string
     */
    public function getInformations(): ?string
    {
        return $this->informations;
    }

    /**
     * @param string $informations
     *
     * @return $this
     */
    public function setInformations(?string $informations)
    {
        $this->informations = $informations;
        return $this;
    }

    /**
     * @return string
     */
    public function getReseau(): ?string
    {
        return $this->reseau;
    }

    /**
     * @param string $reseau
     *
     * @return $this
     */
    public function setReseau(?string $reseau)
    {
        $this->reseau = $reseau;
        return $this;
    }
}
