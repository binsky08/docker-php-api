<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ContainerSummaryItemNetworkSettings
{
    /**
     * @var EndpointSettings[]
     */
    protected $networks;

    /**
     * @return EndpointSettings[]
     */
    public function getNetworks(): iterable
    {
        return $this->networks;
    }

    /**
     * @param EndpointSettings[] $networks
     */
    public function setNetworks(iterable $networks): self
    {
        $this->networks = $networks;

        return $this;
    }
}
