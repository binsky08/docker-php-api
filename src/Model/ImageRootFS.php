<?php

declare(strict_types=1);

namespace Docker\API\Model;

class ImageRootFS
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string[]
     */
    protected $layers;
    /**
     * @var string
     */
    protected $baseLayer;

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
    public function getLayers(): array
    {
        return $this->layers;
    }

    /**
     * @param string[] $layers
     */
    public function setLayers(array $layers): self
    {
        $this->layers = $layers;

        return $this;
    }

    public function getBaseLayer(): string
    {
        return $this->baseLayer;
    }

    public function setBaseLayer(string $baseLayer): self
    {
        $this->baseLayer = $baseLayer;

        return $this;
    }
}
