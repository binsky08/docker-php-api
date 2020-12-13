<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecLogDriver
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $options;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOptions(): iterable
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     */
    public function setOptions(iterable $options): self
    {
        $this->options = $options;

        return $this;
    }
}
