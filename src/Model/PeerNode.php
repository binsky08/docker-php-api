<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PeerNode
{
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @var string
     */
    protected $nodeID;
    /**
     * IP address and ports at which this node can be reached.
     *
     * @var string
     */
    protected $addr;

    /**
     * Unique identifier of for this node in the swarm.
     */
    public function getNodeID(): string
    {
        return $this->nodeID;
    }

    /**
     * Unique identifier of for this node in the swarm.
     */
    public function setNodeID(string $nodeID): self
    {
        $this->nodeID = $nodeID;

        return $this;
    }

    /**
     * IP address and ports at which this node can be reached.
     */
    public function getAddr(): string
    {
        return $this->addr;
    }

    /**
     * IP address and ports at which this node can be reached.
     */
    public function setAddr(string $addr): self
    {
        $this->addr = $addr;

        return $this;
    }
}
