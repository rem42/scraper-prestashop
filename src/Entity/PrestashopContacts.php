<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class PrestashopContacts
{    /** @var Collection<int, PrestashopContact> */
    private Collection $contacts;

    public function __construct()
    {
        $this->contacts = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopContact>
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function addContact(PrestashopContact $contact): self
    {
        $this->contacts->add($contact);

        return $this;
    }

    public function removeContact(PrestashopContact $contact): self
    {
        $this->contacts->removeElement($contact);

        return $this;
    }
}
