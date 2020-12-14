<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ImageID
{
    /**
     * @var string|null
     */
    protected $iD;

    public function getID(): ?string
    {
        return $this->iD;
    }

    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }
}
