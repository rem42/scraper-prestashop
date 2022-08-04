<?php declare(strict_types=1);

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

        $this->assertEquals(1, $result->id);
        $this->assertEquals(1, $result->idProduct);

        $this->assertInstanceOf(\DateTimeInterface::class, $result->availableDate);
        $this->assertInstanceOf(PrestashopAssociations::class, $result->associations);

        $this->assertCount(2, $result->associations->productOptionValues);
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->associations->productOptionValues[0]);

        $this->assertCount(1, $result->associations->images);
        $this->assertInstanceOf(PrestashopImage::class, $result->associations->images[0]);
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
        $this->assertCount(2, $result->combinations);
        $this->assertInstanceOf(PrestashopCombination::class, $result->combinations[0]);
    }
}
