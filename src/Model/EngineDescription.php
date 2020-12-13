<?php

declare(strict_types=1);

namespace Docker\API\Model;

class EngineDescription
{
    /**
     * @var string
     */
    protected $engineVersion;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var EngineDescriptionPluginsItem[]
     */
    protected $plugins;

    public function getEngineVersion(): string
    {
        return $this->engineVersion;
    }

    public function setEngineVersion(string $engineVersion): self
    {
        $this->engineVersion = $engineVersion;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabels(): iterable
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     */
    public function setLabels(iterable $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return EngineDescriptionPluginsItem[]
     */
    public function getPlugins(): array
    {
        return $this->plugins;
    }

    /**
     * @param EngineDescriptionPluginsItem[] $plugins
     */
    public function setPlugins(array $plugins): self
    {
        $this->plugins = $plugins;

        return $this;
    }
}
