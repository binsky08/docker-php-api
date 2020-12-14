<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServiceSpecMode
{
    /**
     * @var ServiceSpecModeReplicated|null
     */
    protected $replicated;
    /**
     * @var ServiceSpecModeGlobal|null
     */
    protected $global;

    public function getReplicated(): ?ServiceSpecModeReplicated
    {
        return $this->replicated;
    }

    public function setReplicated(?ServiceSpecModeReplicated $replicated): self
    {
        $this->replicated = $replicated;

        return $this;
    }

    public function getGlobal(): ?ServiceSpecModeGlobal
    {
        return $this->global;
    }

    public function setGlobal(?ServiceSpecModeGlobal $global): self
    {
        $this->global = $global;

        return $this;
    }
}
