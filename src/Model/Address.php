<?php

declare(strict_types=1);

namespace Docker\API\Model;

class Address
{
    /**
     * IP address.
     *
     * @var string
     */
    protected $addr;
    /**
     * Mask length of the IP address.
     *
     * @var int
     */
    protected $prefixLen;

    /**
     * IP address.
     */
    public function getAddr(): string
    {
        return $this->addr;
    }

    /**
     * IP address.
     */
    public function setAddr(string $addr): self
    {
        $this->addr = $addr;

        return $this;
    }

    /**
     * Mask length of the IP address.
     */
    public function getPrefixLen(): int
    {
        return $this->prefixLen;
    }

    /**
     * Mask length of the IP address.
     */
    public function setPrefixLen(int $prefixLen): self
    {
        $this->prefixLen = $prefixLen;

        return $this;
    }
}
