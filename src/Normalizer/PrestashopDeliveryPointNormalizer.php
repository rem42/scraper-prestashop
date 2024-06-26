<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Normalizer;

use Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt\PrestashopTntOfficielDeliveryPoint;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class PrestashopDeliveryPointNormalizer implements DenormalizerInterface
{
    private ObjectNormalizer $normalizer;

    public function __construct(ObjectNormalizer $normalizer)
    {
        $this->normalizer = $normalizer;
    }

    /**
     * @param array<string, string> $context
     */
    public function denormalize($data, string $type, ?string $format = null, array $context = [])
    {
        if (!\is_string($data)) {
            return $data;
        }
        $data = unserialize($data, [PrestashopTntOfficielDeliveryPoint::class]);
        return $this->normalizer->denormalize($data, PrestashopTntOfficielDeliveryPoint::class);
    }

    /**
     * @param array<string, string> $context
     */
    public function supportsDenormalization($data, string $type, ?string $format = null, array $context = []): bool
    {
        return PrestashopTntOfficielDeliveryPoint::class === $type;
    }
}
