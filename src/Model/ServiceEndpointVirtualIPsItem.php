<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServiceEndpointVirtualIPsItem
{
    /**
     * @var string|null
     */
    protected $networkID;
    /**
     * @var string|null
     */
    protected $addr;

    public function getNetworkID(): ?string
    {
        return $this->networkID;
    }

    public function setNetworkID(?string $networkID): self
    {
        $this->networkID = $networkID;

        return $this;
    }

    public function getAddr(): ?string
    {
        return $this->addr;
    }

    public function setAddr(?string $addr): self
    {
        $this->addr = $addr;

        return $this;
    }
}
