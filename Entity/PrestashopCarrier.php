<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopCarrier
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    protected $id;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("deleted")
     */
    protected $deleted;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("is_module")
     */
    protected $isModule;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_tax_rules_group")
     */
    protected $idTaxRulesGroup;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_reference")
     */
    protected $idReference;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    protected $active;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("is_free")
     */
    protected $isFree;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("url")
     */
    protected $url;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("shipping_handling")
     */
    protected $shippingHandling;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("shipping_external")
     */
    protected $shippingExternal;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("range_behavior")
     */
    protected $rangeBehavior;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("shipping_method")
     */
    protected $shippingMethod;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("max_width")
     */
    protected $maxWidth;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("max_height")
     */
    protected $maxHeight;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("max_depth")
     */
    protected $maxDepth;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("max_weight")
     */
    protected $maxWeight;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("grade")
     */
    protected $grade;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("external_module_name")
     */
    protected $externalModuleName;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("need_range")
     */
    protected $needRange;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("position")
     */
    protected $position;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("delay")
     */
    protected $delay;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId(?int $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleted(): ?bool
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     *
     * @return $this
     */
    public function setDeleted(?bool $deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @return bool
     */
    public function isModule(): ?bool
    {
        return $this->isModule;
    }

    /**
     * @param bool $isModule
     *
     * @return $this
     */
    public function setIsModule(?bool $isModule)
    {
        $this->isModule = $isModule;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdTaxRulesGroup(): ?int
    {
        return $this->idTaxRulesGroup;
    }

    /**
     * @param int $idTaxRulesGroup
     *
     * @return $this
     */
    public function setIdTaxRulesGroup(?int $idTaxRulesGroup)
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdReference(): ?int
    {
        return $this->idReference;
    }

    /**
     * @param int $idReference
     *
     * @return $this
     */
    public function setIdReference(?int $idReference)
    {
        $this->idReference = $idReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return $this
     */
    public function setActive(?bool $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFree(): ?bool
    {
        return $this->isFree;
    }

    /**
     * @param bool $isFree
     *
     * @return $this
     */
    public function setIsFree(?bool $isFree)
    {
        $this->isFree = $isFree;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl(?string $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingHandling(): ?int
    {
        return $this->shippingHandling;
    }

    /**
     * @param int $shippingHandling
     *
     * @return $this
     */
    public function setShippingHandling(?int $shippingHandling)
    {
        $this->shippingHandling = $shippingHandling;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingExternal(): ?int
    {
        return $this->shippingExternal;
    }

    /**
     * @param int $shippingExternal
     *
     * @return $this
     */
    public function setShippingExternal(?int $shippingExternal)
    {
        $this->shippingExternal = $shippingExternal;
        return $this;
    }

    /**
     * @return int
     */
    public function getRangeBehavior(): ?int
    {
        return $this->rangeBehavior;
    }

    /**
     * @param int $rangeBehavior
     *
     * @return $this
     */
    public function setRangeBehavior(?int $rangeBehavior)
    {
        $this->rangeBehavior = $rangeBehavior;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingMethod(): ?int
    {
        return $this->shippingMethod;
    }

    /**
     * @param int $shippingMethod
     *
     * @return $this
     */
    public function setShippingMethod(?int $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxWidth(): ?int
    {
        return $this->maxWidth;
    }

    /**
     * @param int $maxWidth
     *
     * @return $this
     */
    public function setMaxWidth(?int $maxWidth)
    {
        $this->maxWidth = $maxWidth;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxHeight(): ?int
    {
        return $this->maxHeight;
    }

    /**
     * @param int $maxHeight
     *
     * @return $this
     */
    public function setMaxHeight(?int $maxHeight)
    {
        $this->maxHeight = $maxHeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDepth(): ?int
    {
        return $this->maxDepth;
    }

    /**
     * @param int $maxDepth
     *
     * @return $this
     */
    public function setMaxDepth(?int $maxDepth)
    {
        $this->maxDepth = $maxDepth;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxWeight(): ?float
    {
        return $this->maxWeight;
    }

    /**
     * @param float $maxWeight
     *
     * @return $this
     */
    public function setMaxWeight(?float $maxWeight)
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getGrade(): ?int
    {
        return $this->grade;
    }

    /**
     * @param int $grade
     *
     * @return $this
     */
    public function setGrade(?int $grade)
    {
        $this->grade = $grade;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalModuleName(): ?string
    {
        return $this->externalModuleName;
    }

    /**
     * @param string $externalModuleName
     *
     * @return $this
     */
    public function setExternalModuleName(?string $externalModuleName)
    {
        $this->externalModuleName = $externalModuleName;
        return $this;
    }

    /**
     * @return int
     */
    public function getNeedRange(): ?int
    {
        return $this->needRange;
    }

    /**
     * @param int $needRange
     *
     * @return $this
     */
    public function setNeedRange(?int $needRange)
    {
        $this->needRange = $needRange;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return $this
     */
    public function setPosition(?int $position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getDelay(): ?string
    {
        return $this->delay;
    }

    /**
     * @param string $delay
     *
     * @return $this
     */
    public function setDelay(?string $delay)
    {
        $this->delay = $delay;
        return $this;
    }
}
