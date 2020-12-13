<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServicesCreatePostResponse201
{
    /**
     * The ID of the created service.
     *
     * @var string
     */
    protected $iD;
    /**
     * Optional warning message.
     *
     * @var string
     */
    protected $warning;

    /**
     * The ID of the created service.
     */
    public function getID(): string
    {
        return $this->iD;
    }

    /**
     * The ID of the created service.
     */
    public function setID(string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Optional warning message.
     */
    public function getWarning(): string
    {
        return $this->warning;
    }

    /**
     * Optional warning message.
     */
    public function setWarning(string $warning): self
    {
        $this->warning = $warning;

        return $this;
    }
}
