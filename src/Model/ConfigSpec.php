<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ConfigSpec
{
    /**
     * User-defined name of the config.
     *
     * @var string|null
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-3.2)).
     * config data.
     *
     * @var string|null
     */
    protected $data;

    /**
     * User-defined name of the config.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * User-defined name of the config.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return string[]|null
     */
    public function getLabels(): ?iterable
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param string[]|null $labels
     */
    public function setLabels(?iterable $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-3.2)).
     * config data.
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-3.2)).
     * config data.
     */
    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }
}
