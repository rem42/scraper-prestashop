<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopCustomer
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
     * @Serializer\SerializedName("id_default_group")
     */
    protected $idDefaultGroup;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_lang")
     */
    protected $idLang;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("newsletter_date_add")
     */
    protected $newsletterDateAdd;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ip_registration_newsletter")
     */
    protected $ipRegistrationNewsletter;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("last_passwd_gen")
     */
    protected $lastPasswdGen;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("secure_key")
     */
    protected $secureKey;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("deleted")
     */
    protected $deleted;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("passwd")
     */
    protected $passwd;
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
     * @Serializer\SerializedName("email")
     */
    protected $email;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_gender")
     */
    protected $id_gender;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\SerializedName("birthday")
     */
    protected $birthday;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("newsletter")
     */
    protected $newsletter;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("optin")
     */
    protected $optin;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("website")
     */
    protected $website;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("company")
     */
    protected $company;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("siret")
     */
    protected $siret;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ape")
     */
    protected $ape;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("outstanding_allow_amount")
     */
    protected $outstandingAllowAmount;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("show_public_prices")
     */
    protected $showPublicPrices;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_risk")
     */
    protected $idRisk;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("max_payment_days")
     */
    protected $maxPaymentDays;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    protected $active;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("note")
     */
    protected $note;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("is_guest")
     */
    protected $isGuest;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_shop")
     */
    protected $idShop;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_shop_group")
     */
    protected $idShopGroup;
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
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("reset_password_token")
     */
    protected $resetPasswordToken;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("reset_password_validity")
     */
    protected $resetPasswordValidity;
    /**
     * @var PrestashopAssociations
     * @Serializer\Type("Scraper\ScraperPrestashop\Entity\PrestashopAssociations")
     * @Serializer\SerializedName("associations")
     */
    protected $associations;

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
    public function getIdDefaultGroup(): ?int
    {
        return $this->idDefaultGroup;
    }

    /**
     * @param int $idDefaultGroup
     *
     * @return $this
     */
    public function setIdDefaultGroup(?int $idDefaultGroup)
    {
        $this->idDefaultGroup = $idDefaultGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    /**
     * @param int $idLang
     *
     * @return $this
     */
    public function setIdLang(?int $idLang)
    {
        $this->idLang = $idLang;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNewsletterDateAdd(): ?\DateTime
    {
        return $this->newsletterDateAdd;
    }

    /**
     * @param \DateTime $newsletterDateAdd
     *
     * @return $this
     */
    public function setNewsletterDateAdd(?\DateTime $newsletterDateAdd)
    {
        $this->newsletterDateAdd = $newsletterDateAdd;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpRegistrationNewsletter(): ?string
    {
        return $this->ipRegistrationNewsletter;
    }

    /**
     * @param string $ipRegistrationNewsletter
     *
     * @return $this
     */
    public function setIpRegistrationNewsletter(?string $ipRegistrationNewsletter)
    {
        $this->ipRegistrationNewsletter = $ipRegistrationNewsletter;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPasswdGen(): ?\DateTime
    {
        return $this->lastPasswdGen;
    }

    /**
     * @param \DateTime $lastPasswdGen
     *
     * @return $this
     */
    public function setLastPasswdGen(?\DateTime $lastPasswdGen)
    {
        $this->lastPasswdGen = $lastPasswdGen;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecureKey(): ?string
    {
        return $this->secureKey;
    }

    /**
     * @param string $secureKey
     *
     * @return $this
     */
    public function setSecureKey(?string $secureKey)
    {
        $this->secureKey = $secureKey;
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
     *
     * @return $this
     */
    public function setDeleted(?bool $deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @return string
     */
    public function getPasswd(): ?string
    {
        return $this->passwd;
    }

    /**
     * @param string $passwd
     *
     * @return $this
     */
    public function setPasswd(?string $passwd)
    {
        $this->passwd = $passwd;
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
     * @return int
     */
    public function getIdGender(): ?int
    {
        return $this->id_gender;
    }

    /**
     * @param int $id_gender
     *
     * @return $this
     */
    public function setIdGender(?int $id_gender)
    {
        $this->id_gender = $id_gender;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthday(): ?\DateTime
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime $birthday
     *
     * @return $this
     */
    public function setBirthday(?\DateTime $birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    /**
     * @param bool $newsletter
     *
     * @return $this
     */
    public function setNewsletter(?bool $newsletter)
    {
        $this->newsletter = $newsletter;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOptin(): ?bool
    {
        return $this->optin;
    }

    /**
     * @param bool $optin
     *
     * @return $this
     */
    public function setOptin(?bool $optin)
    {
        $this->optin = $optin;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param string $website
     *
     * @return $this
     */
    public function setWebsite(?string $website)
    {
        $this->website = $website;
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
    public function getSiret(): ?string
    {
        return $this->siret;
    }

    /**
     * @param string $siret
     *
     * @return $this
     */
    public function setSiret(?string $siret)
    {
        $this->siret = $siret;
        return $this;
    }

    /**
     * @return string
     */
    public function getApe(): ?string
    {
        return $this->ape;
    }

    /**
     * @param string $ape
     *
     * @return $this
     */
    public function setApe(?string $ape)
    {
        $this->ape = $ape;
        return $this;
    }

    /**
     * @return float
     */
    public function getOutstandingAllowAmount(): ?float
    {
        return $this->outstandingAllowAmount;
    }

    /**
     * @param float $outstandingAllowAmount
     *
     * @return $this
     */
    public function setOutstandingAllowAmount(?float $outstandingAllowAmount)
    {
        $this->outstandingAllowAmount = $outstandingAllowAmount;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowPublicPrices(): ?bool
    {
        return $this->showPublicPrices;
    }

    /**
     * @param bool $showPublicPrices
     *
     * @return $this
     */
    public function setShowPublicPrices(?bool $showPublicPrices)
    {
        $this->showPublicPrices = $showPublicPrices;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdRisk(): ?int
    {
        return $this->idRisk;
    }

    /**
     * @param int $idRisk
     *
     * @return $this
     */
    public function setIdRisk(?int $idRisk)
    {
        $this->idRisk = $idRisk;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxPaymentDays(): ?int
    {
        return $this->maxPaymentDays;
    }

    /**
     * @param int $maxPaymentDays
     *
     * @return $this
     */
    public function setMaxPaymentDays(?int $maxPaymentDays)
    {
        $this->maxPaymentDays = $maxPaymentDays;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return $this
     */
    public function setActive(?bool $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return $this
     */
    public function setNote(?string $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGuest(): ?bool
    {
        return $this->isGuest;
    }

    /**
     * @param bool $isGuest
     *
     * @return $this
     */
    public function setIsGuest(?bool $isGuest)
    {
        $this->isGuest = $isGuest;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    /**
     * @param int $idShop
     *
     * @return $this
     */
    public function setIdShop(?int $idShop)
    {
        $this->idShop = $idShop;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    /**
     * @param int $idShopGroup
     *
     * @return $this
     */
    public function setIdShopGroup(?int $idShopGroup)
    {
        $this->idShopGroup = $idShopGroup;
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
     *
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
     *
     * @return $this
     */
    public function setDateUpd(?\DateTime $dateUpd)
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }

    /**
     * @return string
     */
    public function getResetPasswordToken(): ?string
    {
        return $this->resetPasswordToken;
    }

    /**
     * @param string $resetPasswordToken
     *
     * @return $this
     */
    public function setResetPasswordToken(?string $resetPasswordToken)
    {
        $this->resetPasswordToken = $resetPasswordToken;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getResetPasswordValidity(): ?\DateTime
    {
        return $this->resetPasswordValidity;
    }

    /**
     * @param \DateTime $resetPasswordValidity
     *
     * @return $this
     */
    public function setResetPasswordValidity(?\DateTime $resetPasswordValidity)
    {
        $this->resetPasswordValidity = $resetPasswordValidity;
        return $this;
    }

    /**
     * @return PrestashopAssociations
     */
    public function getAssociations(): ?PrestashopAssociations
    {
        return $this->associations;
    }

    /**
     * @param PrestashopAssociations $associations
     *
     * @return $this
     */
    public function setAssociations(?PrestashopAssociations $associations)
    {
        $this->associations = $associations;
        return $this;
    }
}
