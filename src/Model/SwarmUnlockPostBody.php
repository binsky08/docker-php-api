<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SwarmUnlockPostBody
{
    /**
     * The swarm's unlock key.
     *
     * @var string|null
     */
    protected $unlockKey;

    /**
     * The swarm's unlock key.
     */
    public function getUnlockKey(): ?string
    {
        return $this->unlockKey;
    }

    /**
     * The swarm's unlock key.
     */
    public function setUnlockKey(?string $unlockKey): self
    {
        $this->unlockKey = $unlockKey;

        return $this;
    }
}
