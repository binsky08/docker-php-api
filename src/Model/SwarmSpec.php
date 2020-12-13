<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SwarmSpec
{
    /**
     * Name of the swarm.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * Orchestration configuration.
     *
     * @var SwarmSpecOrchestration|null
     */
    protected $orchestration;
    /**
     * Raft configuration.
     *
     * @var SwarmSpecRaft
     */
    protected $raft;
    /**
     * Dispatcher configuration.
     *
     * @var SwarmSpecDispatcher|null
     */
    protected $dispatcher;
    /**
     * CA configuration.
     *
     * @var SwarmSpecCAConfig|null
     */
    protected $cAConfig;
    /**
     * Parameters related to encryption-at-rest.
     *
     * @var SwarmSpecEncryptionConfig
     */
    protected $encryptionConfig;
    /**
     * Defaults for creating tasks in this cluster.
     *
     * @var SwarmSpecTaskDefaults
     */
    protected $taskDefaults;

    /**
     * Name of the swarm.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the swarm.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels(): iterable
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     */
    public function setLabels(iterable $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Orchestration configuration.
     */
    public function getOrchestration(): ?SwarmSpecOrchestration
    {
        return $this->orchestration;
    }

    /**
     * Orchestration configuration.
     */
    public function setOrchestration(?SwarmSpecOrchestration $orchestration): self
    {
        $this->orchestration = $orchestration;

        return $this;
    }

    /**
     * Raft configuration.
     */
    public function getRaft(): SwarmSpecRaft
    {
        return $this->raft;
    }

    /**
     * Raft configuration.
     */
    public function setRaft(SwarmSpecRaft $raft): self
    {
        $this->raft = $raft;

        return $this;
    }

    /**
     * Dispatcher configuration.
     */
    public function getDispatcher(): ?SwarmSpecDispatcher
    {
        return $this->dispatcher;
    }

    /**
     * Dispatcher configuration.
     */
    public function setDispatcher(?SwarmSpecDispatcher $dispatcher): self
    {
        $this->dispatcher = $dispatcher;

        return $this;
    }

    /**
     * CA configuration.
     */
    public function getCAConfig(): ?SwarmSpecCAConfig
    {
        return $this->cAConfig;
    }

    /**
     * CA configuration.
     */
    public function setCAConfig(?SwarmSpecCAConfig $cAConfig): self
    {
        $this->cAConfig = $cAConfig;

        return $this;
    }

    /**
     * Parameters related to encryption-at-rest.
     */
    public function getEncryptionConfig(): SwarmSpecEncryptionConfig
    {
        return $this->encryptionConfig;
    }

    /**
     * Parameters related to encryption-at-rest.
     */
    public function setEncryptionConfig(SwarmSpecEncryptionConfig $encryptionConfig): self
    {
        $this->encryptionConfig = $encryptionConfig;

        return $this;
    }

    /**
     * Defaults for creating tasks in this cluster.
     */
    public function getTaskDefaults(): SwarmSpecTaskDefaults
    {
        return $this->taskDefaults;
    }

    /**
     * Defaults for creating tasks in this cluster.
     */
    public function setTaskDefaults(SwarmSpecTaskDefaults $taskDefaults): self
    {
        $this->taskDefaults = $taskDefaults;

        return $this;
    }
}
