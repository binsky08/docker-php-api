<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginsNameUpgradePostBodyItem
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string[]
     */
    protected $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    /**
     * @return string[]
     */
    public function getValue(): array
    {
        return $this->value;
    }

    /**
     * @param string[] $value
     */
    public function setValue(array $value): self
    {
        $this->value = $value;

        return $this;
    }
}
