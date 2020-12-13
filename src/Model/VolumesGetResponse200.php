<?php

declare(strict_types=1);

namespace Docker\API\Model;

class VolumesGetResponse200
{
    /**
     * List of volumes.
     *
     * @var Volume[]
     */
    protected $volumes;
    /**
     * Warnings that occurred when fetching the list of volumes.
     *
     * @var string[]
     */
    protected $warnings;

    /**
     * List of volumes.
     *
     * @return Volume[]
     */
    public function getVolumes(): array
    {
        return $this->volumes;
    }

    /**
     * List of volumes.
     *
     * @param Volume[] $volumes
     */
    public function setVolumes(array $volumes): self
    {
        $this->volumes = $volumes;

        return $this;
    }

    /**
     * Warnings that occurred when fetching the list of volumes.
     *
     * @return string[]
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }

    /**
     * Warnings that occurred when fetching the list of volumes.
     *
     * @param string[] $warnings
     */
    public function setWarnings(array $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }
}
