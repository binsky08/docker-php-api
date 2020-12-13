<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServiceSpecModeReplicated
{
    /**
     * @var int
     */
    protected $replicas;

    public function getReplicas(): int
    {
        return $this->replicas;
    }

    public function setReplicas(int $replicas): self
    {
        $this->replicas = $replicas;

        return $this;
    }
}
