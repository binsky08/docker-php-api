<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginConfigInterface
{
    /**
     * @var PluginInterfaceType[]
     */
    protected $types;
    /**
     * @var string
     */
    protected $socket;

    /**
     * @return PluginInterfaceType[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param PluginInterfaceType[] $types
     */
    public function setTypes(array $types): self
    {
        $this->types = $types;

        return $this;
    }

    public function getSocket(): string
    {
        return $this->socket;
    }

    public function setSocket(string $socket): self
    {
        $this->socket = $socket;

        return $this;
    }
}
