<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

class PrestashopContacts
{
    /** @var array<int, PrestashopContact> */
    public array $contacts = [];

    public function addContact(PrestashopContact $contact): self
    {
        $this->contacts[] = $contact;

        return $this;
    }
}
