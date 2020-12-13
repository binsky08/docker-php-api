<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginSettings
{
    /**
     * @var PluginMount[]
     */
    protected $mounts;
    /**
     * @var string[]
     */
    protected $env;
    /**
     * @var string[]
     */
    protected $args;
    /**
     * @var PluginDevice[]
     */
    protected $devices;

    /**
     * @return PluginMount[]
     */
    public function getMounts(): array
    {
        return $this->mounts;
    }

    /**
     * @param PluginMount[] $mounts
     */
    public function setMounts(array $mounts): self
    {
        $this->mounts = $mounts;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getEnv(): array
    {
        return $this->env;
    }

    /**
     * @param string[] $env
     */
    public function setEnv(array $env): self
    {
        $this->env = $env;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getArgs(): array
    {
        return $this->args;
    }

    /**
     * @param string[] $args
     */
    public function setArgs(array $args): self
    {
        $this->args = $args;

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
