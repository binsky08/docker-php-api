<?php

declare(strict_types=1);

namespace Docker\API\Model;

class DeviceMapping
{
    /**
     * @var string
     */
    protected $pathOnHost;
    /**
     * @var string
     */
    protected $pathInContainer;
    /**
     * @var string
     */
    protected $cgroupPermissions;

    public function getPathOnHost(): string
    {
        return $this->pathOnHost;
    }

    public function setPathOnHost(string $pathOnHost): self
    {
        $this->pathOnHost = $pathOnHost;

        return $this;
    }

    public function getPathInContainer(): string
    {
        return $this->pathInContainer;
    }

    public function setPathInContainer(string $pathInContainer): self
    {
        $this->pathInContainer = $pathInContainer;

        return $this;
    }

    public function getCgroupPermissions(): string
    {
        return $this->cgroupPermissions;
    }

    public function setCgroupPermissions(string $cgroupPermissions): self
    {
        $this->cgroupPermissions = $cgroupPermissions;

        return $this;
    }
}
