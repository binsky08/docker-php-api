<?php

declare(strict_types=1);

namespace Docker\API\Model;

class VersionGetResponse200
{
    /**
     * @var VersionGetResponse200Platform
     */
    protected $platform;
    /**
     * @var VersionGetResponse200ComponentsItem[]
     */
    protected $components;
    /**
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $apiVersion;
    /**
     * @var string
     */
    protected $minAPIVersion;
    /**
     * @var string
     */
    protected $gitCommit;
    /**
     * @var string
     */
    protected $goVersion;
    /**
     * @var string
     */
    protected $os;
    /**
     * @var string
     */
    protected $arch;
    /**
     * @var string
     */
    protected $kernelVersion;
    /**
     * @var bool
     */
    protected $experimental;
    /**
     * @var string
     */
    protected $buildTime;

    public function getPlatform(): VersionGetResponse200Platform
    {
        return $this->platform;
    }

    public function setPlatform(VersionGetResponse200Platform $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * @return VersionGetResponse200ComponentsItem[]
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param VersionGetResponse200ComponentsItem[] $components
     */
    public function setComponents(array $components): self
    {
        $this->components = $components;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    public function setApiVersion(string $apiVersion): self
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    public function getMinAPIVersion(): string
    {
        return $this->minAPIVersion;
    }

    public function setMinAPIVersion(string $minAPIVersion): self
    {
        $this->minAPIVersion = $minAPIVersion;

        return $this;
    }

    public function getGitCommit(): string
    {
        return $this->gitCommit;
    }

    public function setGitCommit(string $gitCommit): self
    {
        $this->gitCommit = $gitCommit;

        return $this;
    }

    public function getGoVersion(): string
    {
        return $this->goVersion;
    }

    public function setGoVersion(string $goVersion): self
    {
        $this->goVersion = $goVersion;

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

    public function getArch(): string
    {
        return $this->arch;
    }

    public function setArch(string $arch): self
    {
        $this->arch = $arch;

        return $this;
    }

    public function getKernelVersion(): string
    {
        return $this->kernelVersion;
    }

    public function setKernelVersion(string $kernelVersion): self
    {
        $this->kernelVersion = $kernelVersion;

        return $this;
    }

    public function getExperimental(): bool
    {
        return $this->experimental;
    }

    public function setExperimental(bool $experimental): self
    {
        $this->experimental = $experimental;

        return $this;
    }

    public function getBuildTime(): string
    {
        return $this->buildTime;
    }

    public function setBuildTime(string $buildTime): self
    {
        $this->buildTime = $buildTime;

        return $this;
    }
}
