<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class ContainerArchiveNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Container or path does not exist');
    }
}
