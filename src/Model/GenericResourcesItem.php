<?php

declare(strict_types=1);

namespace Docker\API\Model;

class GenericResourcesItem
{
    /**
     * @var GenericResourcesItemNamedResourceSpec
     */
    protected $namedResourceSpec;
    /**
     * @var GenericResourcesItemDiscreteResourceSpec
     */
    protected $discreteResourceSpec;

    public function getNamedResourceSpec(): GenericResourcesItemNamedResourceSpec
    {
        return $this->namedResourceSpec;
    }

    public function setNamedResourceSpec(GenericResourcesItemNamedResourceSpec $namedResourceSpec): self
    {
        $this->namedResourceSpec = $namedResourceSpec;

        return $this;
    }

    public function getDiscreteResourceSpec(): GenericResourcesItemDiscreteResourceSpec
    {
        return $this->discreteResourceSpec;
    }

    public function setDiscreteResourceSpec(GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec): self
    {
        $this->discreteResourceSpec = $discreteResourceSpec;

        return $this;
    }
}
