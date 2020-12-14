<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecPlacementPreferencesItemSpread
{
    /**
     * label descriptor, such as `engine.labels.az`.
     *
     * @var string|null
     */
    protected $spreadDescriptor;

    /**
     * label descriptor, such as `engine.labels.az`.
     */
    public function getSpreadDescriptor(): ?string
    {
        return $this->spreadDescriptor;
    }

    /**
     * label descriptor, such as `engine.labels.az`.
     */
    public function setSpreadDescriptor(?string $spreadDescriptor): self
    {
        $this->spreadDescriptor = $spreadDescriptor;

        return $this;
    }
}
