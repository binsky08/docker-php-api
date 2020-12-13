<?php

declare(strict_types=1);

namespace Docker\API\Model;

class DistributionNameJsonGetResponse200PlatformsItem
{
    /**
     * @var string
     */
    protected $architecture;
    /**
     * @var string
     */
    protected $oS;
    /**
     * @var string
     */
    protected $oSVersion;
    /**
     * @var string[]
     */
    protected $oSFeatures;
    /**
     * @var string
     */
    protected $variant;
    /**
     * @var string[]
     */
    protected $features;

    public function getArchitecture(): string
    {
        return $this->architecture;
    }

    public function setArchitecture(string $architecture): self
    {
        $this->architecture = $architecture;

        return $this;
    }

    public function getOS(): string
    {
        return $this->oS;
    }

    public function setOS(string $oS): self
    {
        $this->oS = $oS;

        return $this;
    }

    public function getOSVersion(): string
    {
        return $this->oSVersion;
    }

    public function setOSVersion(string $oSVersion): self
    {
        $this->oSVersion = $oSVersion;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOSFeatures(): array
    {
        return $this->oSFeatures;
    }

    /**
     * @param string[] $oSFeatures
     */
    public function setOSFeatures(array $oSFeatures): self
    {
        $this->oSFeatures = $oSFeatures;

        return $this;
    }

    public function getVariant(): string
    {
        return $this->variant;
    }

    public function setVariant(string $variant): self
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFeatures(): array
    {
        return $this->features;
    }

    /**
     * @param string[] $features
     */
    public function setFeatures(array $features): self
    {
        $this->features = $features;

        return $this;
    }
}
