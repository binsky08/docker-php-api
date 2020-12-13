<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SecretSpec
{
    /**
     * User-defined name of the secret.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-3.2)).
     * data to store as secret.
     *
     * This field is only used to _create_ a secret, and is not returned by
     * other endpoints.
     *
     * @var string
     */
    protected $data;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    protected $driver;

    /**
     * User-defined name of the secret.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * User-defined name of the secret.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels(): iterable
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     */
    public function setLabels(iterable $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-3.2)).
     * data to store as secret.
     *
     * This field is only used to _create_ a secret, and is not returned by
     * other endpoints.
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-3.2)).
     * data to store as secret.
     *
     * This field is only used to _create_ a secret, and is not returned by
     * other endpoints.
     */
    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Driver represents a driver (network, logging, secrets).
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * Driver represents a driver (network, logging, secrets).
     */
    public function setDriver(Driver $driver): self
    {
        $this->driver = $driver;

        return $this;
    }
}
