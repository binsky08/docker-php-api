<?php

declare(strict_types=1);

namespace Docker\API\Model;

class EngineDescriptionPluginsItem
{
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $name;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

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
