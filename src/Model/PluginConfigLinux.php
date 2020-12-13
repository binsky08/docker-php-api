<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginConfigLinux
{
    /**
     * @var string[]
     */
    protected $capabilities;
    /**
     * @var bool
     */
    protected $allowAllDevices;
    /**
     * @var PluginDevice[]
     */
    protected $devices;

    /**
     * @return string[]
     */
    public function getCapabilities(): array
    {
        return $this->capabilities;
    }

    /**
     * @param string[] $capabilities
     */
    public function setCapabilities(array $capabilities): self
    {
        $this->capabilities = $capabilities;

        return $this;
    }

    public function getAllowAllDevices(): bool
    {
        return $this->allowAllDevices;
    }

    public function setAllowAllDevices(bool $allowAllDevices): self
    {
        $this->allowAllDevices = $allowAllDevices;

        return $this;
    }

    /**
     * @return PluginDevice[]
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * @param PluginDevice[] $devices
     */
    public function setDevices(array $devices): self
    {
        $this->devices = $devices;

        return $this;
    }
}
