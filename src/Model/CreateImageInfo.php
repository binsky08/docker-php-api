<?php

declare(strict_types=1);

namespace Docker\API\Model;

class CreateImageInfo
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $error;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $progress;
    /**
     * @var ProgressDetail
     */
    protected $progressDetail;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getError(): string
    {
        return $this->error;
    }

    public function setError(string $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getProgress(): string
    {
        return $this->progress;
    }

    public function setProgress(string $progress): self
    {
        $this->progress = $progress;

        return $this;
    }

    public function getProgressDetail(): ProgressDetail
    {
        return $this->progressDetail;
    }

    public function setProgressDetail(ProgressDetail $progressDetail): self
    {
        $this->progressDetail = $progressDetail;

        return $this;
    }
}
