<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginConfig
{
    /**
     * Docker Version used to create the plugin.
     *
     * @var string
     */
    protected $dockerVersion;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $documentation;
    /**
     * The interface between Docker and the plugin.
     *
     * @var PluginConfigInterface
     */
    protected $interface;
    /**
     * @var string[]
     */
    protected $entrypoint;
    /**
     * @var string
     */
    protected $workDir;
    /**
     * @var PluginConfigUser
     */
    protected $user;
    /**
     * @var PluginConfigNetwork
     */
    protected $network;
    /**
     * @var PluginConfigLinux
     */
    protected $linux;
    /**
     * @var string
     */
    protected $propagatedMount;
    /**
     * @var bool
     */
    protected $ipcHost;
    /**
     * @var bool
     */
    protected $pidHost;
    /**
     * @var PluginMount[]
     */
    protected $mounts;
    /**
     * @var PluginEnv[]
     */
    protected $env;
    /**
     * @var PluginConfigArgs
     */
    protected $args;
    /**
     * @var PluginConfigRootfs
     */
    protected $rootfs;

    /**
     * Docker Version used to create the plugin.
     */
    public function getDockerVersion(): string
    {
        return $this->dockerVersion;
    }

    /**
     * Docker Version used to create the plugin.
     */
    public function setDockerVersion(string $dockerVersion): self
    {
        $this->dockerVersion = $dockerVersion;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDocumentation(): string
    {
        return $this->documentation;
    }

    public function setDocumentation(string $documentation): self
    {
        $this->documentation = $documentation;

        return $this;
    }

    /**
     * The interface between Docker and the plugin.
     */
    public function getInterface(): PluginConfigInterface
    {
        return $this->interface;
    }

    /**
     * The interface between Docker and the plugin.
     */
    public function setInterface(PluginConfigInterface $interface): self
    {
        $this->interface = $interface;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getEntrypoint(): array
    {
        return $this->entrypoint;
    }

    /**
     * @param string[] $entrypoint
     */
    public function setEntrypoint(array $entrypoint): self
    {
        $this->entrypoint = $entrypoint;

        return $this;
    }

    public function getWorkDir(): string
    {
        return $this->workDir;
    }

    public function setWorkDir(string $workDir): self
    {
        $this->workDir = $workDir;

        return $this;
    }

    public function getUser(): PluginConfigUser
    {
        return $this->user;
    }

    public function setUser(PluginConfigUser $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getNetwork(): PluginConfigNetwork
    {
        return $this->network;
    }

    public function setNetwork(PluginConfigNetwork $network): self
    {
        $this->network = $network;

        return $this;
    }

    public function getLinux(): PluginConfigLinux
    {
        return $this->linux;
    }

    public function setLinux(PluginConfigLinux $linux): self
    {
        $this->linux = $linux;

        return $this;
    }

    public function getPropagatedMount(): string
    {
        return $this->propagatedMount;
    }

    public function setPropagatedMount(string $propagatedMount): self
    {
        $this->propagatedMount = $propagatedMount;

        return $this;
    }

    public function getIpcHost(): bool
    {
        return $this->ipcHost;
    }

    public function setIpcHost(bool $ipcHost): self
    {
        $this->ipcHost = $ipcHost;

        return $this;
    }

    public function getPidHost(): bool
    {
        return $this->pidHost;
    }

    public function setPidHost(bool $pidHost): self
    {
        $this->pidHost = $pidHost;

        return $this;
    }

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
     * @return PluginEnv[]
     */
    public function getEnv(): array
    {
        return $this->env;
    }

    /**
     * @param PluginEnv[] $env
     */
    public function setEnv(array $env): self
    {
        $this->env = $env;

        return $this;
    }

    public function getArgs(): PluginConfigArgs
    {
        return $this->args;
    }

    public function setArgs(PluginConfigArgs $args): self
    {
        $this->args = $args;

        return $this;
    }

    public function getRootfs(): PluginConfigRootfs
    {
        return $this->rootfs;
    }

    public function setRootfs(PluginConfigRootfs $rootfs): self
    {
        $this->rootfs = $rootfs;

        return $this;
    }
}
