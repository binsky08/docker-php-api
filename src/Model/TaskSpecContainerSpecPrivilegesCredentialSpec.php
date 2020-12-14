<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecContainerSpecPrivilegesCredentialSpec
{
    /**
     * Load credential spec from this file. The file is read by the daemon, and must be present in the.
     * `CredentialSpecs` subdirectory in the docker data directory, which defaults to
     * `C:\ProgramData\Docker\` on Windows.
     *
     * For example, specifying `spec.json` loads `C:\ProgramData\Docker\CredentialSpecs\spec.json`.
     *
     * <p><br /></p>
     *
     * > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
     *
     * @var string|null
     */
    protected $file;
    /**
     * Load credential spec from this value in the Windows registry. The specified registry value must be.
     * located in:
     *
     * `HKLM\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Virtualization\Containers\CredentialSpecs`
     *
     * <p><br /></p>
     *
     *
     * > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
     *
     * @var string|null
     */
    protected $registry;

    /**
     * Load credential spec from this file. The file is read by the daemon, and must be present in the.
     * `CredentialSpecs` subdirectory in the docker data directory, which defaults to
     * `C:\ProgramData\Docker\` on Windows.
     *
     * For example, specifying `spec.json` loads `C:\ProgramData\Docker\CredentialSpecs\spec.json`.
     *
     * <p><br /></p>
     *
     * > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * Load credential spec from this file. The file is read by the daemon, and must be present in the.
     * `CredentialSpecs` subdirectory in the docker data directory, which defaults to
     * `C:\ProgramData\Docker\` on Windows.
     *
     * For example, specifying `spec.json` loads `C:\ProgramData\Docker\CredentialSpecs\spec.json`.
     *
     * <p><br /></p>
     *
     * > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
     */
    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Load credential spec from this value in the Windows registry. The specified registry value must be.
     * located in:
     *
     * `HKLM\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Virtualization\Containers\CredentialSpecs`
     *
     * <p><br /></p>
     *
     *
     * > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
     */
    public function getRegistry(): ?string
    {
        return $this->registry;
    }

    /**
     * Load credential spec from this value in the Windows registry. The specified registry value must be.
     * located in:
     *
     * `HKLM\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Virtualization\Containers\CredentialSpecs`
     *
     * <p><br /></p>
     *
     *
     * > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
     */
    public function setRegistry(?string $registry): self
    {
        $this->registry = $registry;

        return $this;
    }
}
