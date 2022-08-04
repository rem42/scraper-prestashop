<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCustomer
{
    public PrestashopAssociations $associations;
    public ?int $id                          = null;
    public ?int $idDefaultGroup              = null;
    public ?int $idLang                      = null;
    public ?\DateTime $newsletterDateAdd     = null;
    public ?string $ipRegistrationNewsletter = null;
    public ?\DateTime $lastPasswdGen         = null;
    public ?string $secureKey                = null;
    public ?bool $deleted                    = null;
    public ?string $passwd                   = null;
    public ?string $lastname                 = null;
    public ?string $firstname                = null;
    public ?string $email                    = null;
    public ?int $idGender                    = null;
    public ?\DateTime $birthday              = null;
    public ?bool $newsletter                 = null;
    public ?bool $optin                      = null;
    public ?string $website                  = null;
    public ?string $company                  = null;
    public ?string $siret                    = null;
    public ?string $ape                      = null;
    public ?float $outstandingAllowAmount    = null;
    public ?bool $showPublicPrices           = null;
    public ?int $idRisk                      = null;
    public ?int $maxPaymentDays              = null;
    public ?bool $active                     = null;
    public ?string $note                     = null;
    public ?bool $isGuest                    = null;
    public ?int $idShop                      = null;
    public ?int $idShopGroup                 = null;
    public ?\DateTime $dateAdd               = null;
    public ?\DateTime $dateUpd               = null;
    public ?string $resetPasswordToken       = null;
    public ?\DateTime $resetPasswordValidity = null;

    public function setAssociations(PrestashopAssociations $associations): self
    {
        $this->associations = $associations;
        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdDefaultGroup(?int $idDefaultGroup): self
    {
        $this->idDefaultGroup = $idDefaultGroup;
        return $this;
    }

    public function setIdLang(?int $idLang): self
    {
        $this->idLang = $idLang;
        return $this;
    }

    public function setNewsletterDateAdd(?\DateTime $newsletterDateAdd): self
    {
        $this->newsletterDateAdd = $newsletterDateAdd;
        return $this;
    }

    public function setIpRegistrationNewsletter(?string $ipRegistrationNewsletter): self
    {
        $this->ipRegistrationNewsletter = $ipRegistrationNewsletter;
        return $this;
    }

    public function setLastPasswdGen(?\DateTime $lastPasswdGen): self
    {
        $this->lastPasswdGen = $lastPasswdGen;
        return $this;
    }

    public function setSecureKey(?string $secureKey): self
    {
        $this->secureKey = $secureKey;
        return $this;
    }

    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;
        return $this;
    }

    public function setPasswd(?string $passwd): self
    {
        $this->passwd = $passwd;
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

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setIdGender(?int $idGender): self
    {
        $this->idGender = $idGender;
        return $this;
    }

    public function setBirthday(?\DateTime $birthday): self
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function setNewsletter(?bool $newsletter): self
    {
        $this->newsletter = $newsletter;
        return $this;
    }

    public function setOptin(?bool $optin): self
    {
        $this->optin = $optin;
        return $this;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;
        return $this;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;
        return $this;
    }

    public function setApe(?string $ape): self
    {
        $this->ape = $ape;
        return $this;
    }

    public function setOutstandingAllowAmount(?float $outstandingAllowAmount): self
    {
        $this->outstandingAllowAmount = $outstandingAllowAmount;
        return $this;
    }

    public function setShowPublicPrices(?bool $showPublicPrices): self
    {
        $this->showPublicPrices = $showPublicPrices;
        return $this;
    }

    public function setIdRisk(?int $idRisk): self
    {
        $this->idRisk = $idRisk;
        return $this;
    }

    public function setMaxPaymentDays(?int $maxPaymentDays): self
    {
        $this->maxPaymentDays = $maxPaymentDays;
        return $this;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    public function setIsGuest(?bool $isGuest): self
    {
        $this->isGuest = $isGuest;
        return $this;
    }

    public function setIdShop(?int $idShop): self
    {
        $this->idShop = $idShop;
        return $this;
    }

    public function setIdShopGroup(?int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;
        return $this;
    }

    public function setDateAdd(?\DateTime $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    public function setDateUpd(?\DateTime $dateUpd): self
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }

    public function setResetPasswordToken(?string $resetPasswordToken): self
    {
        $this->resetPasswordToken = $resetPasswordToken;
        return $this;
    }

    public function setResetPasswordValidity(?\DateTime $resetPasswordValidity): self
    {
        $this->resetPasswordValidity = $resetPasswordValidity;
        return $this;
    }
}
