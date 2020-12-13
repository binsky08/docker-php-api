<?php

declare(strict_types=1);

namespace Docker\API\Model;

class Port
{
    /**
     * @var string
     */
    protected $iP;
    /**
     * Port on the container.
     *
     * @var int
     */
    protected $privatePort;
    /**
     * Port exposed on the host.
     *
     * @var int
     */
    protected $publicPort;
    /**
     * @var string
     */
    protected $type;

    public function getIP(): string
    {
        return $this->iP;
    }

    public function setIP(string $iP): self
    {
        $this->iP = $iP;

        return $this;
    }

    /**
     * Port on the container.
     */
    public function getPrivatePort(): int
    {
        return $this->privatePort;
    }

    /**
     * Port on the container.
     */
    public function setPrivatePort(int $privatePort): self
    {
        $this->privatePort = $privatePort;

        return $this;
    }

    /**
     * Port exposed on the host.
     */
    public function getPublicPort(): int
    {
        return $this->publicPort;
    }

    /**
     * Port exposed on the host.
     */
    public function setPublicPort(int $publicPort): self
    {
        $this->publicPort = $publicPort;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
