<?php

declare(strict_types=1);

namespace Docker\API\Model;

class IdResponse
{
    /**
     * The id of the newly created object.
     *
     * @var string
     */
    protected $id;

    /**
     * The id of the newly created object.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The id of the newly created object.
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
}
