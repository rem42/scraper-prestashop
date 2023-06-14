<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Colissimo;

final class PrestashopPickupPoints
{
    /** @var array<int, PrestashopPickupPoint> */
    public array $pickupPoints = [];

    public function addPickupPoint(PrestashopPickupPoint $pickupPoint): self
    {
        $this->pickupPoints[] = $pickupPoint;

        return $this;
    }
}
