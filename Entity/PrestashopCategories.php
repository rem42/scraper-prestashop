<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopCategories
{
    /**
     * @var ArrayCollection|PrestashopCategory[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopCategory>")
     * @Serializer\SerializedName("categories")
     */
    protected $categories;

    /**
     * @return ArrayCollection|PrestashopCategory[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param ArrayCollection|PrestashopCategory[] $categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }
}
