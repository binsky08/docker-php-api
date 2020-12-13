<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ThrottleDevice
{
    /**
     * Device path.
     *
     * @var string
     */
    protected $path;
    /**
     * Rate.
     *
     * @var int
     */
    protected $rate;

    /**
     * Device path.
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Device path.
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Rate.
     */
    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * Rate.
     */
    public function setRate(int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }
}
