<?php

declare(strict_types=1);

namespace Docker\API\Model;

class VersionGetResponse200ComponentsItem
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $version;
    /**
     * @var VersionGetResponse200ComponentsItemDetails|null
     */
    protected $details;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getDetails(): ?VersionGetResponse200ComponentsItemDetails
    {
        return $this->details;
    }

    public function setDetails(?VersionGetResponse200ComponentsItemDetails $details): self
    {
        $this->details = $details;

        return $this;
    }
}
