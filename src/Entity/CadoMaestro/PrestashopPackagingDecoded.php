<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity\CadoMaestro;

class PrestashopPackagingDecoded
{
    public ?float $total = null;
    public ?int $idProduct = null;
    public ?int $nbPackaging = null;
    /** @var array<int, PrestashopConfig> */
    public array $config = [];

    public function addConfig(PrestashopConfig $config): self
    {
        $this->config[] = $config;
        return $this;
    }
}
