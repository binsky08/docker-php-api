<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServiceUpdateStatus
{
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $startedAt;
    /**
     * @var string
     */
    protected $completedAt;
    /**
     * @var string
     */
    protected $message;

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getStartedAt(): string
    {
        return $this->startedAt;
    }

    public function setStartedAt(string $startedAt): self
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    public function getCompletedAt(): string
    {
        return $this->completedAt;
    }

    public function setCompletedAt(string $completedAt): self
    {
        $this->completedAt = $completedAt;

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
}
