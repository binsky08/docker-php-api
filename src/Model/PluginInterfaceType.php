<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginInterfaceType
{
    /**
     * @var string
     */
    protected $prefix;
    /**
     * @var string
     */
    protected $capability;
    /**
     * @var string
     */
    protected $version;

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function setPrefix(string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getCapability(): string
    {
        return $this->capability;
    }

    public function setCapability(string $capability): self
    {
        $this->capability = $capability;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }
}
