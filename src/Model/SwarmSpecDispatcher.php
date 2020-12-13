<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SwarmSpecDispatcher
{
    /**
     * The delay for an agent to send a heartbeat to the dispatcher.
     *
     * @var int
     */
    protected $heartbeatPeriod;

    /**
     * The delay for an agent to send a heartbeat to the dispatcher.
     */
    public function getHeartbeatPeriod(): int
    {
        return $this->heartbeatPeriod;
    }

    /**
     * The delay for an agent to send a heartbeat to the dispatcher.
     */
    public function setHeartbeatPeriod(int $heartbeatPeriod): self
    {
        $this->heartbeatPeriod = $heartbeatPeriod;

        return $this;
    }
}
