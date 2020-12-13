<?php

declare(strict_types=1);

namespace Docker\API\Model;

class NetworksPrunePostResponse200
{
    /**
     * Networks that were deleted.
     *
     * @var string[]
     */
    protected $networksDeleted;

    /**
     * Networks that were deleted.
     *
     * @return string[]
     */
    public function getNetworksDeleted(): array
    {
        return $this->networksDeleted;
    }

    /**
     * Networks that were deleted.
     *
     * @param string[] $networksDeleted
     */
    public function setNetworksDeleted(array $networksDeleted): self
    {
        $this->networksDeleted = $networksDeleted;

        return $this;
    }
}
