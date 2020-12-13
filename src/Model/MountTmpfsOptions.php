<?php

declare(strict_types=1);

namespace Docker\API\Model;

class MountTmpfsOptions
{
    /**
     * The size for the tmpfs mount in bytes.
     *
     * @var int
     */
    protected $sizeBytes;
    /**
     * The permission mode for the tmpfs mount in an integer.
     *
     * @var int
     */
    protected $mode;

    /**
     * The size for the tmpfs mount in bytes.
     */
    public function getSizeBytes(): int
    {
        return $this->sizeBytes;
    }

    /**
     * The size for the tmpfs mount in bytes.
     */
    public function setSizeBytes(int $sizeBytes): self
    {
        $this->sizeBytes = $sizeBytes;

        return $this;
    }

    /**
     * The permission mode for the tmpfs mount in an integer.
     */
    public function getMode(): int
    {
        return $this->mode;
    }

    /**
     * The permission mode for the tmpfs mount in an integer.
     */
    public function setMode(int $mode): self
    {
        $this->mode = $mode;

        return $this;
    }
}
