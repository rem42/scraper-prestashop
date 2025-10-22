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
        if(PrestashopItem::class === $type && \is_string($data)) {
            $prestashopItem = new PrestashopItem();
            $prestashopItem
                ->setValue($data)
            ;
            return $prestashopItem;
        }

        if(PrestashopItem::class === $type && \is_array($data)) {
            $prestashopItem = new PrestashopItem();
            $prestashopItem
                ->setId((int) $data['id'])
                ->setValue($data['value'])
            ;
            return $prestashopItem;
        }

        if(PrestashopItem::class."[]" === $type && \is_array($data)) {
            $prestashopItems = array_values(array_filter(array_map(function ($item) {
                return $this->denormalize($item, PrestashopItem::class);
            }, $data)));

            return $prestashopItems;
        }

        return PrestashopItem::class === $type ? null : [];
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
