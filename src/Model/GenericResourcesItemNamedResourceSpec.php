<?php

declare(strict_types=1);

namespace Docker\API\Model;

class GenericResourcesItemNamedResourceSpec
{
    /**
     * @var string|null
     */
    protected $kind;
    /**
     * @var string|null
     */
    protected $value;

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(?string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
