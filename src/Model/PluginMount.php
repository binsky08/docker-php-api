<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginMount
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
    protected $settable;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var string
     */
    protected $destination;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string[]
     */
    protected $options;

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
    public function getSettable(): array
    {
        return $this->settable;
    }

    /**
     * @param string[] $settable
     */
    public function setSettable(array $settable): self
    {
        $this->settable = $settable;

        return $this;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

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
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }
}
