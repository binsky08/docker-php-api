<?php

declare(strict_types=1);

namespace Docker\API\Model;

class GenericResourcesItemDiscreteResourceSpec
{
    /**
     * @var string|null
     */
    protected $kind;
    /**
     * @var int|null
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

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(?int $value): self
    {
        $this->value = $value;

        return $this;
    }
}
