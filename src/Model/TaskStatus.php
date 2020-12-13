<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskStatus
{
    /**
     * @var string
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $err;
    /**
     * @var TaskStatusContainerStatus
     */
    protected $containerStatus;

    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    public function setTimestamp(string $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

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

    public function getErr(): string
    {
        return $this->err;
    }

    public function setErr(string $err): self
    {
        $this->err = $err;

        return $this;
    }

    public function getContainerStatus(): TaskStatusContainerStatus
    {
        return $this->containerStatus;
    }

    public function setContainerStatus(TaskStatusContainerStatus $containerStatus): self
    {
        $this->containerStatus = $containerStatus;

        return $this;
    }
}
