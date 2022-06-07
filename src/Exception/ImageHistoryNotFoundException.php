<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class ImageHistoryNotFoundException extends NotFoundException
{
    /**
     * @var \Docker\API\Model\ErrorResponse
     */
    private $errorResponse;

    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('No such image');
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse(): \Docker\API\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
