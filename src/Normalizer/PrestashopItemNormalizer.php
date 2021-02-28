<?php

namespace Scraper\ScraperPrestashop\Normalizer;

use Scraper\ScraperPrestashop\Entity\PrestashopItem;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class PrestashopItemNormalizer implements DenormalizerInterface
{
    /**
     * @return PrestashopItem|PrestashopItem[]
     */
    public function denormalize($data, string $type, string $format = null, array $context = [])
    {
        $prestashopItem = new PrestashopItem();
        $prestashopItem
            ->setValue($data)
        ;
        return PrestashopItem::class === $type ? $prestashopItem : [$prestashopItem];
    }

    public function supportsDenormalization($data, string $type, string $format = null)
    {
        return !\is_array($data)
            && (PrestashopItem::class === $type || PrestashopItem::class . '[]' === $type);
    }
}
