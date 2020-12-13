<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ImageMetadata
{
    /**
     * @var string
     */
    protected $lastTagTime;

    public function getLastTagTime(): string
    {
        return $this->lastTagTime;
    }

    public function setLastTagTime(string $lastTagTime): self
    {
        $this->lastTagTime = $lastTagTime;

        return $this;
    }
}
