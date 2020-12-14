<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecLogDriver
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string[]|null
     */
    protected $options;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getOptions(): ?iterable
    {
        return $this->options;
    }

    /**
     * @param string[]|null $options
     */
    public function setOptions(?iterable $options): self
    {
        $this->options = $options;

        return $this;
    }
}
