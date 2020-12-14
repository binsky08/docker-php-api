<?php

declare(strict_types=1);

namespace Docker\API\Model;

class BuildPrunePostResponse200
{
    /**
     * Disk space reclaimed in bytes.
     *
     * @var int|null
     */
    protected $spaceReclaimed;

    /**
     * Disk space reclaimed in bytes.
     */
    public function getSpaceReclaimed(): ?int
    {
        return $this->spaceReclaimed;
    }

    /**
     * Disk space reclaimed in bytes.
     */
    public function setSpaceReclaimed(?int $spaceReclaimed): self
    {
        $this->spaceReclaimed = $spaceReclaimed;

        return $this;
    }
}
