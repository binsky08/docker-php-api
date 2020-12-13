<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class ImageBuildBadRequestException extends \RuntimeException implements ClientException
{
    private $errorResponse;

    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Bad parameter', 400);
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}
