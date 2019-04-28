<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopStates
{
    /**
     * @var ArrayCollection|PrestashopState[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopState>")
     * @Serializer\SerializedName("states")
     */
    protected $states;

    /**
     * @return ArrayCollection|PrestashopState[]
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * @param ArrayCollection|PrestashopState[] $states
     *
     * @return $this
     */
    public function setStates($states)
    {
        $this->states = $states;
        return $this;
    }
}
