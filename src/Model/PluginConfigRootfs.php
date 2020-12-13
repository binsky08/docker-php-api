<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginConfigRootfs
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string[]
     */
    protected $diffIds;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDiffIds(): array
    {
        return $this->diffIds;
    }

    /**
     * @param string[] $diffIds
     */
    public function setDiffIds(array $diffIds): self
    {
        $this->diffIds = $diffIds;

        return $this;
    }
}
