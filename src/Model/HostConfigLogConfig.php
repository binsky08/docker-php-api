<?php

declare(strict_types=1);

namespace Docker\API\Model;

class HostConfigLogConfig
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string[]
     */
    protected $config;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getConfig(): iterable
    {
        return $this->config;
    }

    /**
     * @param string[] $config
     */
    public function setConfig(iterable $config): self
    {
        $this->config = $config;

        return $this;
    }
}
