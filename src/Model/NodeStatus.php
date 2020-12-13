<?php

declare(strict_types=1);

namespace Docker\API\Model;

class NodeStatus
{
    /**
     * NodeState represents the state of a node.
     *
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $message;
    /**
     * IP address of the node.
     *
     * @var string
     */
    protected $addr;

    /**
     * NodeState represents the state of a node.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * NodeState represents the state of a node.
     */
    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * IP address of the node.
     */
    public function getAddr(): string
    {
        return $this->addr;
    }

    /**
     * IP address of the node.
     */
    public function setAddr(string $addr): self
    {
        $this->addr = $addr;

        return $this;
    }
}
