<?php

declare(strict_types=1);

namespace Docker\API\Model;

class Image
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string[]
     */
    protected $repoTags;
    /**
     * @var string[]
     */
    protected $repoDigests;
    /**
     * @var string
     */
    protected $parent;
    /**
     * @var string
     */
    protected $comment;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $container;
    /**
     * Configuration for a container that is portable between hosts.
     *
     * @var ContainerConfig
     */
    protected $containerConfig;
    /**
     * @var string
     */
    protected $dockerVersion;
    /**
     * @var string
     */
    protected $author;
    /**
     * Configuration for a container that is portable between hosts.
     *
     * @var ContainerConfig
     */
    protected $config;
    /**
     * @var string
     */
    protected $architecture;
    /**
     * @var string
     */
    protected $os;
    /**
     * @var string
     */
    protected $osVersion;
    /**
     * @var int
     */
    protected $size;
    /**
     * @var int
     */
    protected $virtualSize;
    /**
     * Information about a container's graph driver.
     *
     * @var GraphDriverData
     */
    protected $graphDriver;
    /**
     * @var ImageRootFS
     */
    protected $rootFS;
    /**
     * @var ImageMetadata
     */
    protected $metadata;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

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

    public function getParent(): string
    {
        return $this->parent;
    }

    public function setParent(string $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getCreated(): string
    {
        return $this->created;
    }

    public function setCreated(string $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getContainer(): string
    {
        return $this->container;
    }

    public function setContainer(string $container): self
    {
        $this->container = $container;

        return $this;
    }

    /**
     * Configuration for a container that is portable between hosts.
     */
    public function getContainerConfig(): ContainerConfig
    {
        return $this->containerConfig;
    }

    /**
     * Configuration for a container that is portable between hosts.
     */
    public function setContainerConfig(ContainerConfig $containerConfig): self
    {
        $this->containerConfig = $containerConfig;

        return $this;
    }

    public function getDockerVersion(): string
    {
        return $this->dockerVersion;
    }

    public function setDockerVersion(string $dockerVersion): self
    {
        $this->dockerVersion = $dockerVersion;

        return $this;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Configuration for a container that is portable between hosts.
     */
    public function getConfig(): ContainerConfig
    {
        return $this->config;
    }

    /**
     * Configuration for a container that is portable between hosts.
     */
    public function setConfig(ContainerConfig $config): self
    {
        $this->config = $config;

        return $this;
    }

    public function getArchitecture(): string
    {
        return $this->architecture;
    }

    public function setArchitecture(string $architecture): self
    {
        $this->architecture = $architecture;

        return $this;
    }

    public function getOs(): string
    {
        return $this->os;
    }

    public function setOs(string $os): self
    {
        $this->os = $os;

        return $this;
    }

    public function getOsVersion(): string
    {
        return $this->osVersion;
    }

    public function setOsVersion(string $osVersion): self
    {
        $this->osVersion = $osVersion;

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
     * Information about a container's graph driver.
     */
    public function getGraphDriver(): GraphDriverData
    {
        return $this->graphDriver;
    }

    /**
     * Information about a container's graph driver.
     */
    public function setGraphDriver(GraphDriverData $graphDriver): self
    {
        $this->graphDriver = $graphDriver;

        return $this;
    }

    public function getRootFS(): ImageRootFS
    {
        return $this->rootFS;
    }

    public function setRootFS(ImageRootFS $rootFS): self
    {
        $this->rootFS = $rootFS;

        return $this;
    }

    public function getMetadata(): ImageMetadata
    {
        return $this->metadata;
    }

    public function setMetadata(ImageMetadata $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }
}
