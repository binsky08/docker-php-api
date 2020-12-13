<?php

declare(strict_types=1);

namespace Docker\API\Model;

class Network
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $scope;
    /**
     * @var string
     */
    protected $driver;
    /**
     * @var bool
     */
    protected $enableIPv6;
    /**
     * @var IPAM
     */
    protected $iPAM;
    /**
     * @var bool
     */
    protected $internal;
    /**
     * @var bool
     */
    protected $attachable;
    /**
     * @var bool
     */
    protected $ingress;
    /**
     * @var NetworkContainer[]
     */
    protected $containers;
    /**
     * @var string[]
     */
    protected $options;
    /**
     * @var string[]
     */
    protected $labels;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCreated(): string
    {
        return $this->created;
    }

    public function setCreated(string $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function setScope(string $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    public function getDriver(): string
    {
        return $this->driver;
    }

    public function setDriver(string $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    public function getEnableIPv6(): bool
    {
        return $this->enableIPv6;
    }

    public function setEnableIPv6(bool $enableIPv6): self
    {
        $this->enableIPv6 = $enableIPv6;

        return $this;
    }

    public function getIPAM(): IPAM
    {
        return $this->iPAM;
    }

    public function setIPAM(IPAM $iPAM): self
    {
        $this->iPAM = $iPAM;

        return $this;
    }

    public function getInternal(): bool
    {
        return $this->internal;
    }

    public function setInternal(bool $internal): self
    {
        $this->internal = $internal;

        return $this;
    }

    public function getAttachable(): bool
    {
        return $this->attachable;
    }

    public function setAttachable(bool $attachable): self
    {
        $this->attachable = $attachable;

        return $this;
    }

    public function getIngress(): bool
    {
        return $this->ingress;
    }

    public function setIngress(bool $ingress): self
    {
        $this->ingress = $ingress;

        return $this;
    }

    /**
     * @return NetworkContainer[]
     */
    public function getContainers(): iterable
    {
        return $this->containers;
    }

    /**
     * @param NetworkContainer[] $containers
     */
    public function setContainers(iterable $containers): self
    {
        $this->containers = $containers;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOptions(): iterable
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     */
    public function setOptions(iterable $options): self
    {
        $this->options = $options;

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
}
