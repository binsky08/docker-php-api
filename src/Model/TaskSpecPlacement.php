<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecPlacement
{
    /**
     * An array of constraints.
     *
     * @var string[]
     */
    protected $constraints;
    /**
     * Preferences provide a way to make the scheduler aware of factors such as topology. They are provided in order from highest to lowest precedence.
     *
     * @var TaskSpecPlacementPreferencesItem[]
     */
    protected $preferences;
    /**
     * Platforms stores all the platforms that the service's image can.
     * run on. This field is used in the platform filter for scheduling.
     * If empty, then the platform filter is off, meaning there are no
     * scheduling restrictions.
     *
     * @var Platform[]
     */
    protected $platforms;

    /**
     * An array of constraints.
     *
     * @return string[]
     */
    public function getConstraints(): array
    {
        return $this->constraints;
    }

    /**
     * An array of constraints.
     *
     * @param string[] $constraints
     */
    public function setConstraints(array $constraints): self
    {
        $this->constraints = $constraints;

        return $this;
    }

    /**
     * Preferences provide a way to make the scheduler aware of factors such as topology. They are provided in order from highest to lowest precedence.
     *
     * @return TaskSpecPlacementPreferencesItem[]
     */
    public function getPreferences(): array
    {
        return $this->preferences;
    }

    /**
     * Preferences provide a way to make the scheduler aware of factors such as topology. They are provided in order from highest to lowest precedence.
     *
     * @param TaskSpecPlacementPreferencesItem[] $preferences
     */
    public function setPreferences(array $preferences): self
    {
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * Platforms stores all the platforms that the service's image can.
     * run on. This field is used in the platform filter for scheduling.
     * If empty, then the platform filter is off, meaning there are no
     * scheduling restrictions.
     *
     * @return Platform[]
     */
    public function getPlatforms(): array
    {
        return $this->platforms;
    }

    /**
     * Platforms stores all the platforms that the service's image can.
     * run on. This field is used in the platform filter for scheduling.
     * If empty, then the platform filter is off, meaning there are no
     * scheduling restrictions.
     *
     * @param Platform[] $platforms
     */
    public function setPlatforms(array $platforms): self
    {
        $this->platforms = $platforms;

        return $this;
    }
}
