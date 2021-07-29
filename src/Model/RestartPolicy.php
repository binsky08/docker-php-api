<?php

declare(strict_types=1);

namespace Docker\API\Model;

class RestartPolicy
{
    /**
     * - Empty string means not to restart
     * - `always` Always restart
     * - `unless-stopped` Restart always except when the user has manually stopped the container
     * - `on-failure` Restart only when the container exit code is non-zero.
     *
     * @var string|null
     */
    protected $name;
    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     *
     * @var int|null
     */
    protected $maximumRetryCount;

    /**
     * - Empty string means not to restart
     * - `always` Always restart
     * - `unless-stopped` Restart always except when the user has manually stopped the container
     * - `on-failure` Restart only when the container exit code is non-zero.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * - Empty string means not to restart
     * - `always` Always restart
     * - `unless-stopped` Restart always except when the user has manually stopped the container
     * - `on-failure` Restart only when the container exit code is non-zero.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     */
    public function getMaximumRetryCount(): ?int
    {
        return $this->maximumRetryCount;
    }

    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     */
    public function setMaximumRetryCount(?int $maximumRetryCount): self
    {
        $this->maximumRetryCount = $maximumRetryCount;

        return $this;
    }
}
