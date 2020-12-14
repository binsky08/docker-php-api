<?php

declare(strict_types=1);

namespace Docker\API\Model;

class PluginConfigUser
{
    /**
     * @var int|null
     */
    protected $uID;
    /**
     * @var int|null
     */
    protected $gID;

    public function getUID(): ?int
    {
        return $this->uID;
    }

    public function setUID(?int $uID): self
    {
        $this->uID = $uID;

        return $this;
    }

    public function getGID(): ?int
    {
        return $this->gID;
    }

    public function setGID(?int $gID): self
    {
        $this->gID = $gID;

        return $this;
    }
}
