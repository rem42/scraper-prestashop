<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBody;
use Scraper\ScraperPrestashop\Entity\PrestashopPut;
use Scraper\ScraperPrestashop\Factory\SerializerFactory;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

#[Scraper(method: Method::PUT)]
class PrestashopPutRequest extends PrestashopRequest implements RequestBody
{
    protected PrestashopPut $prestashopPut;

    public function getPrestashopPut(): PrestashopPut
    {
        return $this->prestashopPut;
    }

    public function setPrestashopPut(PrestashopPut $prestashopPut): self
    {
        $this->prestashopPut = $prestashopPut;

        return $this;
    }

    public function getBody()
    {
        $serializer = SerializerFactory::create();

        return $serializer->serialize($this->prestashopPut, 'xml', [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
        ]);
    }
}
