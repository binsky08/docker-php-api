<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ServiceUpdateResponse
{
    /**
     * Optional warning messages.
     *
     * @var string[]
     */
    protected $warnings;

    /**
     * Optional warning messages.
     *
     * @return string[]
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }

    /**
     * Optional warning messages.
     *
     * @param string[] $warnings
     */
    public function setWarnings(array $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }
}
