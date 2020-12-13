<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SwarmSpecOrchestration
{
    /**
     * The number of historic tasks to keep per instance or node. If negative, never remove completed or failed tasks.
     *
     * @var int
     */
    protected $taskHistoryRetentionLimit;

    /**
     * The number of historic tasks to keep per instance or node. If negative, never remove completed or failed tasks.
     */
    public function getTaskHistoryRetentionLimit(): int
    {
        return $this->taskHistoryRetentionLimit;
    }

    /**
     * The number of historic tasks to keep per instance or node. If negative, never remove completed or failed tasks.
     */
    public function setTaskHistoryRetentionLimit(int $taskHistoryRetentionLimit): self
    {
        $this->taskHistoryRetentionLimit = $taskHistoryRetentionLimit;

        return $this;
    }
}
