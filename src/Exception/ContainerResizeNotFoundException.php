<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class ContainerResizeNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('no such container');
    }
}
