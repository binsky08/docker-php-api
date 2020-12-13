<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ConfigsCreatePostBody
{
    /**
     * User-defined name of the config.
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
     * config data.
     *
     * @var string
     */
    protected $data;

    /**
     * User-defined name of the config.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * User-defined name of the config.
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
     * config data.
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-3.2)).
     * config data.
     */
    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }
}
