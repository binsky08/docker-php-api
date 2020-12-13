<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecContainerSpecPrivileges
{
    /**
     * CredentialSpec for managed service account (Windows only).
     *
     * @var TaskSpecContainerSpecPrivilegesCredentialSpec
     */
    protected $credentialSpec;
    /**
     * SELinux labels of the container.
     *
     * @var TaskSpecContainerSpecPrivilegesSELinuxContext
     */
    protected $sELinuxContext;

    /**
     * CredentialSpec for managed service account (Windows only).
     */
    public function getCredentialSpec(): TaskSpecContainerSpecPrivilegesCredentialSpec
    {
        return $this->credentialSpec;
    }

    /**
     * CredentialSpec for managed service account (Windows only).
     */
    public function setCredentialSpec(TaskSpecContainerSpecPrivilegesCredentialSpec $credentialSpec): self
    {
        $this->credentialSpec = $credentialSpec;

        return $this;
    }

    /**
     * SELinux labels of the container.
     */
    public function getSELinuxContext(): TaskSpecContainerSpecPrivilegesSELinuxContext
    {
        return $this->sELinuxContext;
    }

    /**
     * SELinux labels of the container.
     */
    public function setSELinuxContext(TaskSpecContainerSpecPrivilegesSELinuxContext $sELinuxContext): self
    {
        $this->sELinuxContext = $sELinuxContext;

        return $this;
    }
}
