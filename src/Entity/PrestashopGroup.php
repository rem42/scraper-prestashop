<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopGroup
{
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return PrestashopGroup
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
