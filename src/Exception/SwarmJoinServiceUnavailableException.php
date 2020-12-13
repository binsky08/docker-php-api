<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class SwarmJoinServiceUnavailableException extends \RuntimeException implements ServerException
{
    private $errorResponse;

    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('node is already part of a swarm', 503);
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}
