<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Socolissimo;

final class PrestashopDeliveryInfos
{
    /** @var array<int, self> */
    public array $deliveryInfos = [];

    public function addDeliveryInfo(self $deliveryInfo): self
    {
        $this->deliveryInfos[] = $deliveryInfo;

        return $this;
    }
}
