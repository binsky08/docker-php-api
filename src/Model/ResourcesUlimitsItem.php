<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ResourcesUlimitsItem
{
    /**
     * Name of ulimit.
     *
     * @var string
     */
    protected $name;
    /**
     * Soft limit.
     *
     * @var int
     */
    protected $soft;
    /**
     * Hard limit.
     *
     * @var int
     */
    protected $hard;

    /**
     * Name of ulimit.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of ulimit.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Soft limit.
     */
    public function getSoft(): int
    {
        return $this->soft;
    }

    /**
     * Soft limit.
     */
    public function setSoft(int $soft): self
    {
        $this->soft = $soft;

        return $this;
    }

    /**
     * Hard limit.
     */
    public function getHard(): int
    {
        return $this->hard;
    }

    /**
     * Hard limit.
     */
    public function setHard(int $hard): self
    {
        $this->hard = $hard;

        return $this;
    }
}
