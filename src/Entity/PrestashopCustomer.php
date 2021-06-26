<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCustomer
{
    private PrestashopAssociations $associations;

    private ?int $id = null;

    private ?int $idDefaultGroup = null;

    private ?int $idLang = null;

    private ?\DateTime $newsletterDateAdd = null;

    private ?string $ipRegistrationNewsletter = null;

    private ?\DateTime $lastPasswdGen = null;

    private ?string $secureKey = null;

    private ?bool $deleted = null;

    private ?string $passwd = null;

    private ?string $lastname = null;

    private ?string $firstname = null;

    private ?string $email = null;

    private ?int $idGender = null;

    private ?\DateTime $birthday = null;

    private ?bool $newsletter = null;

    private ?bool $optin = null;

    private ?string $website = null;

    private ?string $company = null;

    private ?string $siret = null;

    private ?string $ape = null;

    private ?float $outstandingAllowAmount = null;

    private ?bool $showPublicPrices = null;

    private ?int $idRisk = null;

    private ?int $maxPaymentDays = null;

    private ?bool $active = null;

    private ?string $note = null;

    private ?bool $isGuest = null;

    private ?int $idShop = null;

    private ?int $idShopGroup = null;

    private ?\DateTime $dateAdd = null;

    private ?\DateTime $dateUpd = null;

    private ?string $resetPasswordToken = null;

    private ?\DateTime $resetPasswordValidity = null;

    public function getAssociations(): PrestashopAssociations
    {
        return $this->associations;
    }

    public function setAssociations(PrestashopAssociations $associations): self
    {
        $this->associations = $associations;

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

    public function getIdDefaultGroup(): ?int
    {
        return $this->idDefaultGroup;
    }

    public function setIdDefaultGroup(?int $idDefaultGroup): self
    {
        $this->idDefaultGroup = $idDefaultGroup;

        return $this;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function setIdLang(?int $idLang): self
    {
        $this->idLang = $idLang;

        return $this;
    }

    public function getNewsletterDateAdd(): ?\DateTime
    {
        return $this->newsletterDateAdd;
    }

    public function setNewsletterDateAdd(?\DateTime $newsletterDateAdd): self
    {
        $this->newsletterDateAdd = $newsletterDateAdd;

        return $this;
    }

    public function getIpRegistrationNewsletter(): ?string
    {
        return $this->ipRegistrationNewsletter;
    }

    public function setIpRegistrationNewsletter(?string $ipRegistrationNewsletter): self
    {
        $this->ipRegistrationNewsletter = $ipRegistrationNewsletter;

        return $this;
    }

    public function getLastPasswdGen(): ?\DateTime
    {
        return $this->lastPasswdGen;
    }

    public function setLastPasswdGen(?\DateTime $lastPasswdGen): self
    {
        $this->lastPasswdGen = $lastPasswdGen;

        return $this;
    }

    public function getSecureKey(): ?string
    {
        return $this->secureKey;
    }

    public function setSecureKey(?string $secureKey): self
    {
        $this->secureKey = $secureKey;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getPasswd(): ?string
    {
        return $this->passwd;
    }

    public function setPasswd(?string $passwd): self
    {
        $this->passwd = $passwd;

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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

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

    public function getIdGender(): ?int
    {
        return $this->idGender;
    }

    public function setIdGender(?int $idGender): self
    {
        $this->idGender = $idGender;

        return $this;
    }

    public function getBirthday(): ?\DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTime $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    public function setNewsletter(?bool $newsletter): self
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    public function getOptin(): ?bool
    {
        return $this->optin;
    }

    public function setOptin(?bool $optin): self
    {
        $this->optin = $optin;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

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

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getApe(): ?string
    {
        return $this->ape;
    }

    public function setApe(?string $ape): self
    {
        $this->ape = $ape;

        return $this;
    }

    public function getOutstandingAllowAmount(): ?float
    {
        return $this->outstandingAllowAmount;
    }

    public function setOutstandingAllowAmount(?float $outstandingAllowAmount): self
    {
        $this->outstandingAllowAmount = $outstandingAllowAmount;

        return $this;
    }

    public function getShowPublicPrices(): ?bool
    {
        return $this->showPublicPrices;
    }

    public function setShowPublicPrices(?bool $showPublicPrices): self
    {
        $this->showPublicPrices = $showPublicPrices;

        return $this;
    }

    public function getIdRisk(): ?int
    {
        return $this->idRisk;
    }

    public function setIdRisk(?int $idRisk): self
    {
        $this->idRisk = $idRisk;

        return $this;
    }

    public function getMaxPaymentDays(): ?int
    {
        return $this->maxPaymentDays;
    }

    public function setMaxPaymentDays(?int $maxPaymentDays): self
    {
        $this->maxPaymentDays = $maxPaymentDays;

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

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getIsGuest(): ?bool
    {
        return $this->isGuest;
    }

    public function setIsGuest(?bool $isGuest): self
    {
        $this->isGuest = $isGuest;

        return $this;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(?int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
    }

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    public function setIdShopGroup(?int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    public function getDateAdd(): ?\DateTime
    {
        return $this->dateAdd;
    }

    public function setDateAdd(?\DateTime $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getDateUpd(): ?\DateTime
    {
        return $this->dateUpd;
    }

    public function setDateUpd(?\DateTime $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    public function getResetPasswordToken(): ?string
    {
        return $this->resetPasswordToken;
    }

    public function setResetPasswordToken(?string $resetPasswordToken): self
    {
        $this->resetPasswordToken = $resetPasswordToken;

        return $this;
    }

    public function getResetPasswordValidity(): ?\DateTime
    {
        return $this->resetPasswordValidity;
    }

    public function setResetPasswordValidity(?\DateTime $resetPasswordValidity): self
    {
        $this->resetPasswordValidity = $resetPasswordValidity;

        return $this;
    }
}
