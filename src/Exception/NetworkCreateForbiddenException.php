<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class NetworkCreateForbiddenException extends \RuntimeException implements ClientException
{
    private $errorResponse;

    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('operation not supported for pre-defined networks', 403);
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}
