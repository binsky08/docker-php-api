<?php

declare(strict_types=1);

namespace Docker\API\Model;

class JoinTokens
{
    /**
     * The token workers can use to join the swarm.
     *
     * @var string
     */
    protected $worker;
    /**
     * The token managers can use to join the swarm.
     *
     * @var string
     */
    protected $manager;

    /**
     * The token workers can use to join the swarm.
     */
    public function getWorker(): string
    {
        return $this->worker;
    }

    /**
     * The token workers can use to join the swarm.
     */
    public function setWorker(string $worker): self
    {
        $this->worker = $worker;

        return $this;
    }

    /**
     * The token managers can use to join the swarm.
     */
    public function getManager(): string
    {
        return $this->manager;
    }

    /**
     * The token managers can use to join the swarm.
     */
    public function setManager(string $manager): self
    {
        $this->manager = $manager;

        return $this;
    }
}
