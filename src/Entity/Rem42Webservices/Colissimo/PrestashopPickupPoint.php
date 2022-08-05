<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Colissimo;

final class PrestashopPickupPoint
{
    public ?int $id = null;
    public ?int $idOrder = null;
    public ?string $address1 = null;
    public ?string $address2 = null;
    public ?string $address3 = null;
    public ?string $colissimoId = null;
    public ?string $companyName = null;
    public ?string $city = null;
    public ?string $zipcode = null;
    public ?string $country = null;
    public ?string $isoCountry = null;
    public ?string $productCode = null;
    public ?string $network = null;
    public ?\DateTimeInterface $dateAdd = null;
    public ?\DateTimeInterface $dateUpd = null;
}
