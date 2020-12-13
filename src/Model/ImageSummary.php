<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ImageSummary
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $parentId;
    /**
     * @var string[]
     */
    protected $repoTags;
    /**
     * @var string[]
     */
    protected $repoDigests;
    /**
     * @var int
     */
    protected $created;
    /**
     * @var int
     */
    protected $size;
    /**
     * @var int
     */
    protected $sharedSize;
    /**
     * @var int
     */
    protected $virtualSize;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var int
     */
    protected $containers;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getParentId(): string
    {
        return $this->parentId;
    }

    public function setParentId(string $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRepoTags(): array
    {
        return $this->repoTags;
    }

    /**
     * @param string[] $repoTags
     */
    public function setRepoTags(array $repoTags): self
    {
        $this->repoTags = $repoTags;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRepoDigests(): array
    {
        return $this->repoDigests;
    }

    /**
     * @param string[] $repoDigests
     */
    public function setRepoDigests(array $repoDigests): self
    {
        $this->repoDigests = $repoDigests;

        return $this;
    }

    public function getCreated(): int
    {
        return $this->created;
    }

    public function setCreated(int $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getSharedSize(): int
    {
        return $this->sharedSize;
    }

    public function setSharedSize(int $sharedSize): self
    {
        $this->sharedSize = $sharedSize;

        return $this;
    }

    public function getVirtualSize(): int
    {
        return $this->virtualSize;
    }

    public function setVirtualSize(int $virtualSize): self
    {
        $this->virtualSize = $virtualSize;

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

    public function getContainers(): int
    {
        return $this->containers;
    }

    public function setContainers(int $containers): self
    {
        $this->containers = $containers;

        return $this;
    }
}
