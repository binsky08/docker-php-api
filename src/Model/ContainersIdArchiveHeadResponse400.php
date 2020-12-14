<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ContainersIdArchiveHeadResponse400
{
    /**
     * Represents an error.
     *
     * @var ErrorResponse|null
     */
    protected $errorResponse;
    /**
     * The error message. Either "must specify path parameter" (path cannot be empty) or "not a directory" (path was asserted to be a directory but exists as a file).
     *
     * @var string|null
     */
    protected $message;

    /**
     * Represents an error.
     */
    public function getErrorResponse(): ?ErrorResponse
    {
        return $this->errorResponse;
    }

    /**
     * Represents an error.
     */
    public function setErrorResponse(?ErrorResponse $errorResponse): self
    {
        $this->errorResponse = $errorResponse;

        return $this;
    }

    /**
     * The error message. Either "must specify path parameter" (path cannot be empty) or "not a directory" (path was asserted to be a directory but exists as a file).
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * The error message. Either "must specify path parameter" (path cannot be empty) or "not a directory" (path was asserted to be a directory but exists as a file).
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
