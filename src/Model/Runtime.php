<?php

declare(strict_types=1);

namespace Docker\API\Model;

class Runtime
{
    /**
     * Name and, optional, path, of the OCI executable binary.
     *
     * If the path is omitted, the daemon searches the host's `$PATH` for the
     * binary and uses the first result.
     *
     * @var string
     */
    protected $path;
    /**
     * List of command-line arguments to pass to the runtime when invoked.
     *
     * @var string[]|null
     */
    protected $runtimeArgs;

    /**
     * Name and, optional, path, of the OCI executable binary.
     *
     * If the path is omitted, the daemon searches the host's `$PATH` for the
     * binary and uses the first result.
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Name and, optional, path, of the OCI executable binary.
     *
     * If the path is omitted, the daemon searches the host's `$PATH` for the
     * binary and uses the first result.
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * List of command-line arguments to pass to the runtime when invoked.
     *
     * @return string[]|null
     */
    public function getRuntimeArgs(): ?array
    {
        return $this->runtimeArgs;
    }

    /**
     * List of command-line arguments to pass to the runtime when invoked.
     *
     * @param string[]|null $runtimeArgs
     */
    public function setRuntimeArgs(?array $runtimeArgs): self
    {
        $this->runtimeArgs = $runtimeArgs;

        return $this;
    }
}
