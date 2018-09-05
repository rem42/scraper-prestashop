<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopAddress
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
	 * @Serializer\SerializedName("id_customer")
	 */
	protected $idCustomer;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_manufacturer")
	 */
	protected $idManufacturer;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_supplier")
	 */
	protected $idSupplier;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_warehouse")
	 */
	protected $idWarehouse;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_country")
	 */
	protected $idCountry;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id_state")
	 */
	protected $idState;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("alias")
	 */
	protected $alias;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("company")
	 */
	protected $company;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("lastname")
	 */
	protected $lastname;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("firstname")
	 */
	protected $firstname;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("vat_number")
	 */
	protected $vatNumber;
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
	 * @Serializer\SerializedName("other")
	 */
	protected $other;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("phone")
	 */
	protected $phone;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("phone_mobile")
	 */
	protected $phoneMobile;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("dni")
	 */
	protected $dni;
	/**
	 * @var bool
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("deleted")
	 */
	protected $deleted;
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
	 * @Serializer\SerializedName("date_add")
	 */
	protected $dateAdd;
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
	 * @Serializer\SerializedName("date_upd")
	 */
	protected $dateUpd;

	/**
	 * @return int
	 */
	public function getId(): ?int
	{
		return $this->id;
	}

	/**
	 * @param int $id
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
	public function getIdCustomer(): ?int
	{
		return $this->idCustomer;
	}

	/**
	 * @param int $idCustomer
	 * @return $this
	 */
	public function setIdCustomer(?int $idCustomer)
	{
		$this->idCustomer = $idCustomer;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdManufacturer(): ?int
	{
		return $this->idManufacturer;
	}

	/**
	 * @param int $idManufacturer
	 * @return $this
	 */
	public function setIdManufacturer(?int $idManufacturer)
	{
		$this->idManufacturer = $idManufacturer;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdSupplier(): ?int
	{
		return $this->idSupplier;
	}

	/**
	 * @param int $idSupplier
	 * @return $this
	 */
	public function setIdSupplier(?int $idSupplier)
	{
		$this->idSupplier = $idSupplier;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdWarehouse(): ?int
	{
		return $this->idWarehouse;
	}

	/**
	 * @param int $idWarehouse
	 * @return $this
	 */
	public function setIdWarehouse(?int $idWarehouse)
	{
		$this->idWarehouse = $idWarehouse;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdCountry(): ?int
	{
		return $this->idCountry;
	}

	/**
	 * @param int $idCountry
	 * @return $this
	 */
	public function setIdCountry(?int $idCountry)
	{
		$this->idCountry = $idCountry;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdState(): ?int
	{
		return $this->idState;
	}

	/**
	 * @param int $idState
	 * @return $this
	 */
	public function setIdState(?int $idState)
	{
		$this->idState = $idState;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAlias(): ?string
	{
		return $this->alias;
	}

	/**
	 * @param string $alias
	 * @return $this
	 */
	public function setAlias(?string $alias)
	{
		$this->alias = $alias;
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
	public function getLastname(): ?string
	{
		return $this->lastname;
	}

	/**
	 * @param string $lastname
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
	public function getFirstname(): ?string
	{
		return $this->firstname;
	}

	/**
	 * @param string $firstname
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
	public function getVatNumber(): ?string
	{
		return $this->vatNumber;
	}

	/**
	 * @param string $vatNumber
	 * @return $this
	 */
	public function setVatNumber(?string $vatNumber)
	{
		$this->vatNumber = $vatNumber;
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
	public function getPostcode(): ?string
	{
		return $this->postcode;
	}

	/**
	 * @param string $postcode
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
	public function getOther(): ?string
	{
		return $this->other;
	}

	/**
	 * @param string $other
	 * @return $this
	 */
	public function setOther(?string $other)
	{
		$this->other = $other;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhone(): ?string
	{
		return $this->phone;
	}

	/**
	 * @param string $phone
	 * @return $this
	 */
	public function setPhone(?string $phone)
	{
		$this->phone = $phone;
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
	public function getDni(): ?string
	{
		return $this->dni;
	}

	/**
	 * @param string $dni
	 * @return $this
	 */
	public function setDni(?string $dni)
	{
		$this->dni = $dni;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isDeleted(): ?bool
	{
		return $this->deleted;
	}

	/**
	 * @param bool $deleted
	 * @return $this
	 */
	public function setDeleted(?bool $deleted)
	{
		$this->deleted = $deleted;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getDateAdd(): ?\DateTime
	{
		return $this->dateAdd;
	}

	/**
	 * @param \DateTime $dateAdd
	 * @return $this
	 */
	public function setDateAdd(?\DateTime $dateAdd)
	{
		$this->dateAdd = $dateAdd;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getDateUpd(): ?\DateTime
	{
		return $this->dateUpd;
	}

	/**
	 * @param \DateTime $dateUpd
	 * @return $this
	 */
	public function setDateUpd(?\DateTime $dateUpd)
	{
		$this->dateUpd = $dateUpd;
		return $this;
	}
}
