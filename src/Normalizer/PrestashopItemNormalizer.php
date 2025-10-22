<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Normalizer;

use Scraper\ScraperPrestashop\Entity\PrestashopItem;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class PrestashopItemNormalizer implements DenormalizerInterface
{
    /**
     * @param array<string, string> $context
     *
     * @return PrestashopItem|array<PrestashopItem>
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (!\is_string($data)) {
            return [];
        }
        $prestashopItem = new PrestashopItem();
        $prestashopItem
            ->setValue($data)
        ;
        return PrestashopItem::class === $type ? $prestashopItem : [$prestashopItem];
    }

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return !\is_array($data)
            && (PrestashopItem::class === $type || PrestashopItem::class . '[]' === $type);
    }

    public function getSupportedTypes(?string $format): array
    {
        return ['*' => true];
    }
}
