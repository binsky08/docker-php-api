<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginConfigInterface
{
    /**
     * @var PluginInterfaceType[]|null
     */
    protected $types;
    /**
     * @var string|null
     */
    protected $socket;

    /**
     * @return PluginInterfaceType[]|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }

    /**
     * @param PluginInterfaceType[]|null $types
     */
    public function setTypes(?array $types): self
    {
        $this->types = $types;

        return $this;
    }

    public function getSocket(): ?string
    {
        return $this->socket;
    }

    public function setSocket(?string $socket): self
    {
        $this->socket = $socket;

        return $this;
    }
}
