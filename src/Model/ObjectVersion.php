<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ObjectVersion
{
    /**
     * @var int
     */
    protected $index;

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }
}
