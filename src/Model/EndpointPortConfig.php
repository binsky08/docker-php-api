<?php

declare(strict_types=1);

namespace Docker\API\Model;

class EndpointPortConfig
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $protocol;
    /**
     * The port inside the container.
     *
     * @var int
     */
    protected $targetPort;
    /**
     * The port on the swarm hosts.
     *
     * @var int
     */
    protected $publishedPort;
    /**
     * The mode in which port is published.
     *
     * <p><br /></p>
     *
     * - "ingress" makes the target port accessible on on every node,
     * regardless of whether there is a task for the service running on
     * that node or not.
     * - "host" bypasses the routing mesh and publish the port directly on
     * the swarm node where that service is running.
     *
     * @var string
     */
    protected $publishMode = 'ingress';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getProtocol(): string
    {
        return $this->protocol;
    }

    public function setProtocol(string $protocol): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * The port inside the container.
     */
    public function getTargetPort(): int
    {
        return $this->targetPort;
    }

    /**
     * The port inside the container.
     */
    public function setTargetPort(int $targetPort): self
    {
        $this->targetPort = $targetPort;

        return $this;
    }

    /**
     * The port on the swarm hosts.
     */
    public function getPublishedPort(): int
    {
        return $this->publishedPort;
    }

    /**
     * The port on the swarm hosts.
     */
    public function setPublishedPort(int $publishedPort): self
    {
        $this->publishedPort = $publishedPort;

        return $this;
    }

    /**
     * The mode in which port is published.
     *
     * <p><br /></p>
     *
     * - "ingress" makes the target port accessible on on every node,
     * regardless of whether there is a task for the service running on
     * that node or not.
     * - "host" bypasses the routing mesh and publish the port directly on
     * the swarm node where that service is running.
     */
    public function getPublishMode(): string
    {
        return $this->publishMode;
    }

    /**
     * The mode in which port is published.
     *
     * <p><br /></p>
     *
     * - "ingress" makes the target port accessible on on every node,
     * regardless of whether there is a task for the service running on
     * that node or not.
     * - "host" bypasses the routing mesh and publish the port directly on
     * the swarm node where that service is running.
     */
    public function setPublishMode(string $publishMode): self
    {
        $this->publishMode = $publishMode;

        return $this;
    }
}
