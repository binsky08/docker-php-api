<?php

declare(strict_types=1);

namespace Docker\API\Model;

class MountBindOptions
{
    /**
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     *
     * @var string
     */
    protected $propagation;

    /**
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     */
    public function getPropagation(): string
    {
        return $this->propagation;
    }

    /**
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     */
    public function setPropagation(string $propagation): self
    {
        $this->propagation = $propagation;

        return $this;
    }
}
