<?php

declare(strict_types=1);

namespace Docker\API\Model;

class GraphDriverData
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $data;

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
    public function getData(): iterable
    {
        return $this->data;
    }

    /**
     * @param string[] $data
     */
    public function setData(iterable $data): self
    {
        $this->data = $data;

        return $this;
    }
}
