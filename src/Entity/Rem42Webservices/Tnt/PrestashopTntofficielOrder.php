<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt;

final class PrestashopTntofficielOrder
{
    public ?int $id = null;
    public ?int $idOrder = null;
    public ?PrestashopTntOfficielDeliveryPoint $deliveryPoint = null;
    public ?bool $isShipped = null;
    public ?string $pickupNumber = null;
    public ?\DateTimeInterface $shippingDate = null;
    public ?string $dueDate = null;
    public ?\DateTimeInterface $startDate = null;
}
