<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ContainerSummaryItemHostConfig
{
    /**
     * @var string|null
     */
    protected $networkMode;

    public function getNetworkMode(): ?string
    {
        return $this->networkMode;
    }

    public function setNetworkMode(?string $networkMode): self
    {
        $this->networkMode = $networkMode;

        return $this;
    }
}
