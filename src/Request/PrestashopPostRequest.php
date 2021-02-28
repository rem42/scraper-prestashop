<?php

namespace Scraper\ScraperPrestashop\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestBody;
use Scraper\ScraperPrestashop\Entity\PrestashopPost;
use Scraper\ScraperPrestashop\Factory\SerializerFactory;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

/**
 * @Scraper(method="POST")
 */
class PrestashopPostRequest extends PrestashopRequest implements RequestBody
{
    protected PrestashopPost $prestashopPost;

    public function __construct(string $host, string $key, string $resource)
    {
        parent::__construct($host, $key, $resource);
        $this->prestashopPost = new PrestashopPost();
    }

    public function getPrestashopPost(): PrestashopPost
    {
        return $this->prestashopPost;
    }

    public function getBody()
    {
        $serializer = SerializerFactory::create();

        return $serializer->serialize($this->prestashopPost, 'xml', [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
        ]);
    }
}
