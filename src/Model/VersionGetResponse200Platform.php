<?php

declare(strict_types=1);

namespace Docker\API\Model;

class VersionGetResponse200Platform
{
    /**
     * @var string
     */
    protected $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
