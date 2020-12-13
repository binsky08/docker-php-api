<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecPlacementPreferencesItem
{
    /**
     * @var TaskSpecPlacementPreferencesItemSpread
     */
    protected $spread;

    public function getSpread(): TaskSpecPlacementPreferencesItemSpread
    {
        return $this->spread;
    }

    public function setSpread(TaskSpecPlacementPreferencesItemSpread $spread): self
    {
        $this->spread = $spread;

        return $this;
    }
}
