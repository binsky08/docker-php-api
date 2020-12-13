<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ContainersIdChangesGetResponse200Item
{
    /**
     * Path to file that has changed.
     *
     * @var string
     */
    protected $path;
    /**
     * Kind of change.
     *
     * @var int
     */
    protected $kind;

    /**
     * Path to file that has changed.
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Path to file that has changed.
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Kind of change.
     */
    public function getKind(): int
    {
        return $this->kind;
    }

    /**
     * Kind of change.
     */
    public function setKind(int $kind): self
    {
        $this->kind = $kind;

        return $this;
    }
}
