<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ErrorResponse
{
    /**
     * The error message.
     *
     * @var string|null
     */
    protected $message;

    /**
     * The error message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * The error message.
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
