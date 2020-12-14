<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ProgressDetail
{
    /**
     * @var int|null
     */
    protected $current;
    /**
     * @var int|null
     */
    protected $total;

    public function getCurrent(): ?int
    {
        return $this->current;
    }

    public function setCurrent(?int $current): self
    {
        $this->current = $current;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }
}
