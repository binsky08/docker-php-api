<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class PutContainerArchiveForbiddenException extends ForbiddenException
{
    /**
     * @var \Docker\API\Model\ErrorResponse
     */
    private $errorResponse;

    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Permission denied, the volume or container rootfs is marked as read-only.');
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse(): \Docker\API\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
