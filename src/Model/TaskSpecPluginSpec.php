<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecPluginSpec
{
    /**
     * The name or 'alias' to use for the plugin.
     *
     * @var string
     */
    protected $name;
    /**
     * The plugin image reference to use.
     *
     * @var string
     */
    protected $remote;
    /**
     * Disable the plugin once scheduled.
     *
     * @var bool
     */
    protected $disabled;
    /**
     * @var TaskSpecPluginSpecPluginPrivilegeItem[]
     */
    protected $pluginPrivilege;

    /**
     * The name or 'alias' to use for the plugin.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name or 'alias' to use for the plugin.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The plugin image reference to use.
     */
    public function getRemote(): string
    {
        return $this->remote;
    }

    /**
     * The plugin image reference to use.
     */
    public function setRemote(string $remote): self
    {
        $this->remote = $remote;

        return $this;
    }

    /**
     * Disable the plugin once scheduled.
     */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * Disable the plugin once scheduled.
     */
    public function setDisabled(bool $disabled): self
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * @return TaskSpecPluginSpecPluginPrivilegeItem[]
     */
    public function getPluginPrivilege(): array
    {
        return $this->pluginPrivilege;
    }

    /**
     * @param TaskSpecPluginSpecPluginPrivilegeItem[] $pluginPrivilege
     */
    public function setPluginPrivilege(array $pluginPrivilege): self
    {
        $this->pluginPrivilege = $pluginPrivilege;

        return $this;
    }
}
