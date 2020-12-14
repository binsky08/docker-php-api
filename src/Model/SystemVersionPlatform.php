<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SystemVersionPlatform
{
    /**
     * @var string|null
     */
    protected $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
