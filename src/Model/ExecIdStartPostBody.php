<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ExecIdStartPostBody
{
    /**
     * Detach from the command.
     *
     * @var bool
     */
    protected $detach;
    /**
     * Allocate a pseudo-TTY.
     *
     * @var bool
     */
    protected $tty;

    /**
     * Detach from the command.
     */
    public function getDetach(): bool
    {
        return $this->detach;
    }

    /**
     * Detach from the command.
     */
    public function setDetach(bool $detach): self
    {
        $this->detach = $detach;

        return $this;
    }

    /**
     * Allocate a pseudo-TTY.
     */
    public function getTty(): bool
    {
        return $this->tty;
    }

    /**
     * Allocate a pseudo-TTY.
     */
    public function setTty(bool $tty): self
    {
        $this->tty = $tty;

        return $this;
    }
}
