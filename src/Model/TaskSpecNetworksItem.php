<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecNetworksItem
{
    /**
     * @var string|null
     */
    protected $target;
    /**
     * @var string[]|null
     */
    protected $aliases;

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAliases(): ?array
    {
        return $this->aliases;
    }

    /**
     * @param string[]|null $aliases
     */
    public function setAliases(?array $aliases): self
    {
        $this->aliases = $aliases;

        return $this;
    }
}
