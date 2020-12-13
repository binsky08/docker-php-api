<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ContainersIdUpdatePostResponse200
{
    /**
     * @var string[]
     */
    protected $warnings;

    /**
     * @return string[]
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }

    /**
     * @param string[] $warnings
     */
    public function setWarnings(array $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }
}
