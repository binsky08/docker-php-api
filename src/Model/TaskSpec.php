<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpec
{
    /**
     * Invalid when specified with `ContainerSpec`. *(Experimental release only.)*.
     *
     * @var TaskSpecPluginSpec|null
     */
    protected $pluginSpec;
    /**
     * Invalid when specified with `PluginSpec`.
     *
     * @var TaskSpecContainerSpec|null
     */
    protected $containerSpec;
    /**
     * Resource requirements which apply to each individual container created as part of the service.
     *
     * @var TaskSpecResources|null
     */
    protected $resources;
    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     *
     * @var TaskSpecRestartPolicy|null
     */
    protected $restartPolicy;
    /**
     * @var TaskSpecPlacement|null
     */
    protected $placement;
    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     *
     * @var int|null
     */
    protected $forceUpdate;
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @var string|null
     */
    protected $runtime;
    /**
     * @var TaskSpecNetworksItem[]|null
     */
    protected $networks;
    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     *
     * @var TaskSpecLogDriver|null
     */
    protected $logDriver;

    /**
     * Invalid when specified with `ContainerSpec`. *(Experimental release only.)*.
     */
    public function getPluginSpec(): ?TaskSpecPluginSpec
    {
        return $this->pluginSpec;
    }

    /**
     * Invalid when specified with `ContainerSpec`. *(Experimental release only.)*.
     */
    public function setPluginSpec(?TaskSpecPluginSpec $pluginSpec): self
    {
        $this->pluginSpec = $pluginSpec;

        return $this;
    }

    /**
     * Invalid when specified with `PluginSpec`.
     */
    public function getContainerSpec(): ?TaskSpecContainerSpec
    {
        return $this->containerSpec;
    }

    /**
     * Invalid when specified with `PluginSpec`.
     */
    public function setContainerSpec(?TaskSpecContainerSpec $containerSpec): self
    {
        $this->containerSpec = $containerSpec;

        return $this;
    }

    /**
     * Resource requirements which apply to each individual container created as part of the service.
     */
    public function getResources(): ?TaskSpecResources
    {
        return $this->resources;
    }

    /**
     * Resource requirements which apply to each individual container created as part of the service.
     */
    public function setResources(?TaskSpecResources $resources): self
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     */
    public function getRestartPolicy(): ?TaskSpecRestartPolicy
    {
        return $this->restartPolicy;
    }

    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     */
    public function setRestartPolicy(?TaskSpecRestartPolicy $restartPolicy): self
    {
        $this->restartPolicy = $restartPolicy;

        return $this;
    }

    public function getPlacement(): ?TaskSpecPlacement
    {
        return $this->placement;
    }

    public function setPlacement(?TaskSpecPlacement $placement): self
    {
        $this->placement = $placement;

        return $this;
    }

    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     */
    public function getForceUpdate(): ?int
    {
        return $this->forceUpdate;
    }

    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     */
    public function setForceUpdate(?int $forceUpdate): self
    {
        $this->forceUpdate = $forceUpdate;

        return $this;
    }

    /**
     * Runtime is the type of runtime specified for the task executor.
     */
    public function getRuntime(): ?string
    {
        return $this->runtime;
    }

    /**
     * Runtime is the type of runtime specified for the task executor.
     */
    public function setRuntime(?string $runtime): self
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * @return TaskSpecNetworksItem[]|null
     */
    public function getNetworks(): ?array
    {
        return $this->networks;
    }

    /**
     * @param TaskSpecNetworksItem[]|null $networks
     */
    public function setNetworks(?array $networks): self
    {
        $this->networks = $networks;

        return $this;
    }

    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     */
    public function getLogDriver(): ?TaskSpecLogDriver
    {
        return $this->logDriver;
    }

    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     */
    public function setLogDriver(?TaskSpecLogDriver $logDriver): self
    {
        $this->logDriver = $logDriver;

        return $this;
    }
}
