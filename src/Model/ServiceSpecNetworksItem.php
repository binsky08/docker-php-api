<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServiceSpecNetworksItem
{
    /**
     * @var string
     */
    protected $target;
    /**
     * @var string[]
     */
    protected $aliases;

    public function getTarget(): string
    {
        return $this->target;
    }

    public function setTarget(string $target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAliases(): array
    {
        return $this->aliases;
    }

    /**
     * @param string[] $aliases
     */
    public function setAliases(array $aliases): self
    {
        $this->aliases = $aliases;

        return $this;
    }
}
