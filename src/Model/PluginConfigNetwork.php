<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginConfigNetwork
{
    /**
     * @var string|null
     */
    protected $type;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
