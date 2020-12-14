<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SwarmSpecCAConfigExternalCAsItem
{
    /**
     * Protocol for communication with the external CA (currently.
     * only `cfssl` is supported).
     *
     * @var string|null
     */
    protected $protocol = 'cfssl';
    /**
     * URL where certificate signing requests should be sent.
     *
     * @var string|null
     */
    protected $uRL;
    /**
     * An object with key/value pairs that are interpreted as.
     * protocol-specific options for the external CA driver.
     *
     * @var string[]|null
     */
    protected $options;
    /**
     * The root CA certificate (in PEM format) this external CA uses.
     * to issue TLS certificates (assumed to be to the current swarm
     * root CA certificate if not provided).
     *
     * @var string|null
     */
    protected $cACert;

    /**
     * Protocol for communication with the external CA (currently.
     * only `cfssl` is supported).
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    /**
     * Protocol for communication with the external CA (currently.
     * only `cfssl` is supported).
     */
    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * URL where certificate signing requests should be sent.
     */
    public function getURL(): ?string
    {
        return $this->uRL;
    }

    /**
     * URL where certificate signing requests should be sent.
     */
    public function setURL(?string $uRL): self
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * An object with key/value pairs that are interpreted as.
     * protocol-specific options for the external CA driver.
     *
     * @return string[]|null
     */
    public function getOptions(): ?iterable
    {
        return $this->options;
    }

    /**
     * An object with key/value pairs that are interpreted as.
     * protocol-specific options for the external CA driver.
     *
     * @param string[]|null $options
     */
    public function setOptions(?iterable $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * The root CA certificate (in PEM format) this external CA uses.
     * to issue TLS certificates (assumed to be to the current swarm
     * root CA certificate if not provided).
     */
    public function getCACert(): ?string
    {
        return $this->cACert;
    }

    /**
     * The root CA certificate (in PEM format) this external CA uses.
     * to issue TLS certificates (assumed to be to the current swarm
     * root CA certificate if not provided).
     */
    public function setCACert(?string $cACert): self
    {
        $this->cACert = $cACert;

        return $this;
    }
}
