<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SwarmSpecTaskDefaultsLogDriver
{
    /**
     * The log driver to use as a default for new tasks.
     *
     * @var string
     */
    protected $name;
    /**
     * Driver-specific options for the selectd log driver, specified.
     * as key/value pairs.
     *
     * @var string[]
     */
    protected $options;

    /**
     * The log driver to use as a default for new tasks.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The log driver to use as a default for new tasks.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Driver-specific options for the selectd log driver, specified.
     * as key/value pairs.
     *
     * @return string[]
     */
    public function getOptions(): iterable
    {
        return $this->options;
    }

    /**
     * Driver-specific options for the selectd log driver, specified.
     * as key/value pairs.
     *
     * @param string[] $options
     */
    public function setOptions(iterable $options): self
    {
        $this->options = $options;

        return $this;
    }
}
