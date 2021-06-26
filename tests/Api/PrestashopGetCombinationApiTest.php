<?php

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopAssociations;
use Scraper\ScraperPrestashop\Entity\PrestashopCombination;
use Scraper\ScraperPrestashop\Entity\PrestashopCombinations;
use Scraper\ScraperPrestashop\Entity\PrestashopImage;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOptionValue;

/**
 * @internal
 */
class PrestashopGetCombinationApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopCombination $result */
        $result = $this->executeGetApi(
            'combinations',
            1,
            200,
            'combination.json'
        );

        $this->assertInstanceOf(PrestashopCombination::class, $result);

        $this->assertEquals(1, $result->getId());
        $this->assertEquals(1, $result->getIdProduct());

        $this->assertInstanceOf(\DateTimeInterface::class, $result->getAvailableDate());
        $this->assertInstanceOf(PrestashopAssociations::class, $result->getAssociations());

        $this->assertCount(2, $result->getAssociations()->getProductOptionValues());
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->getAssociations()->getProductOptionValues()->first());

        $this->assertCount(1, $result->getAssociations()->getImages());
        $this->assertInstanceOf(PrestashopImage::class, $result->getAssociations()->getImages()->first());
    }

    public function testList(): void
    {
        /** @var PrestashopCombinations $result */
        $result = $this->executeGetApi(
            'combinations',
            null,
            200,
            'combinations.json'
        );

        $this->assertInstanceOf(PrestashopCombinations::class, $result);
        $this->assertCount(2, $result->getCombinations());
        $this->assertInstanceOf(PrestashopCombination::class, $result->getCombinations()->first());
    }
}
