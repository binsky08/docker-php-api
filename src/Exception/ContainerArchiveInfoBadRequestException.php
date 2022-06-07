<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class ContainerArchiveInfoBadRequestException extends BadRequestException
{
    /**
     * @var \Docker\API\Model\ContainersIdArchiveHeadResponse400
     */
    private $containersIdArchiveHeadResponse400;

    public function __construct(\Docker\API\Model\ContainersIdArchiveHeadResponse400 $containersIdArchiveHeadResponse400)
    {
        parent::__construct('Bad parameter');
        $this->containersIdArchiveHeadResponse400 = $containersIdArchiveHeadResponse400;
    }

    public function getContainersIdArchiveHeadResponse400(): \Docker\API\Model\ContainersIdArchiveHeadResponse400
    {
        return $this->containersIdArchiveHeadResponse400;
    }
}
