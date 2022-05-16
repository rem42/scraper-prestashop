<?php

namespace Scraper\ScraperPrestashop\Normalizer;

use Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt\PrestashopTntOfficielDeliveryPoint;
use Symfony\Component\Serializer\Normalizer\ContextAwareDenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class PrestashopDeliveryPointNormalizer implements ContextAwareDenormalizerInterface
{
    private ObjectNormalizer $normalizer;

    public function __construct(ObjectNormalizer $normalizer)
    {
        $this->normalizer = $normalizer;
    }

    /**
     * @param array<string, string> $context
     */
    public function denormalize($data, string $type, string $format = null, array $context = [])
    {
        $data = unserialize($data, [PrestashopTntOfficielDeliveryPoint::class]);
        return $this->normalizer->denormalize($data, PrestashopTntOfficielDeliveryPoint::class);
    }

    /**
     * @param array<string, string> $context
     */
    public function supportsDenormalization($data, string $type, string $format = null, array $context = []): bool
    {
        return PrestashopTntOfficielDeliveryPoint::class === $type;
    }
}
