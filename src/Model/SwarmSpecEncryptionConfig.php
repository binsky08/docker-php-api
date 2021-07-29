<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SwarmSpecEncryptionConfig
{
    /**
     * If set, generate a key and use it to lock data stored on the
     * managers.
     *
     * @var bool|null
     */
    protected $autoLockManagers;

    /**
     * If set, generate a key and use it to lock data stored on the
     * managers.
     */
    public function getAutoLockManagers(): ?bool
    {
        return $this->autoLockManagers;
    }

    /**
     * If set, generate a key and use it to lock data stored on the
     * managers.
     */
    public function setAutoLockManagers(?bool $autoLockManagers): self
    {
        $this->autoLockManagers = $autoLockManagers;

        return $this;
    }
}
