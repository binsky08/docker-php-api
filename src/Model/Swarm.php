<?php

declare(strict_types=1);

namespace Docker\API\Model;

class Swarm
{
    /**
     * The ID of the swarm.
     *
     * @var string|null
     */
    protected $iD;
    /**
     * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
     * The client must send the version number along with the modified specification when updating these objects.
     * This approach ensures safe concurrency and determinism in that the change on the object
     * may not be applied if the version number has changed from the last read. In other words,
     * if two update requests specify the same base version, only one of the requests can succeed.
     * As a result, two separate update requests that happen at the same time will not
     * unintentionally overwrite each other.
     *
     * @var ObjectVersion|null
     */
    protected $version;
    /**
     * Date and time at which the swarm was initialised in.
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Date and time at which the swarm was last updated in.
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec|null
     */
    protected $spec;
    /**
     * Information about the issuer of leaf TLS certificates and the trusted root CA certificate.
     *
     * @var TLSInfo|null
     */
    protected $tLSInfo;
    /**
     * Whether there is currently a root CA rotation in progress for the swarm.
     *
     * @var bool|null
     */
    protected $rootRotationInProgress;
    /**
     * JoinTokens contains the tokens workers and managers need to join the swarm.
     *
     * @var JoinTokens|null
     */
    protected $joinTokens;

    /**
     * The ID of the swarm.
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * The ID of the swarm.
     */
    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
     * The client must send the version number along with the modified specification when updating these objects.
     * This approach ensures safe concurrency and determinism in that the change on the object
     * may not be applied if the version number has changed from the last read. In other words,
     * if two update requests specify the same base version, only one of the requests can succeed.
     * As a result, two separate update requests that happen at the same time will not
     * unintentionally overwrite each other.
     */
    public function getVersion(): ?ObjectVersion
    {
        return $this->version;
    }

    /**
     * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
     * The client must send the version number along with the modified specification when updating these objects.
     * This approach ensures safe concurrency and determinism in that the change on the object
     * may not be applied if the version number has changed from the last read. In other words,
     * if two update requests specify the same base version, only one of the requests can succeed.
     * As a result, two separate update requests that happen at the same time will not
     * unintentionally overwrite each other.
     */
    public function setVersion(?ObjectVersion $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Date and time at which the swarm was initialised in.
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Date and time at which the swarm was initialised in.
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time at which the swarm was last updated in.
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Date and time at which the swarm was last updated in.
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * User modifiable swarm configuration.
     */
    public function getSpec(): ?SwarmSpec
    {
        return $this->spec;
    }

    /**
     * User modifiable swarm configuration.
     */
    public function setSpec(?SwarmSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Information about the issuer of leaf TLS certificates and the trusted root CA certificate.
     */
    public function getTLSInfo(): ?TLSInfo
    {
        return $this->tLSInfo;
    }

    /**
     * Information about the issuer of leaf TLS certificates and the trusted root CA certificate.
     */
    public function setTLSInfo(?TLSInfo $tLSInfo): self
    {
        $this->tLSInfo = $tLSInfo;

        return $this;
    }

    /**
     * Whether there is currently a root CA rotation in progress for the swarm.
     */
    public function getRootRotationInProgress(): ?bool
    {
        return $this->rootRotationInProgress;
    }

    /**
     * Whether there is currently a root CA rotation in progress for the swarm.
     */
    public function setRootRotationInProgress(?bool $rootRotationInProgress): self
    {
        $this->rootRotationInProgress = $rootRotationInProgress;

        return $this;
    }

    /**
     * JoinTokens contains the tokens workers and managers need to join the swarm.
     */
    public function getJoinTokens(): ?JoinTokens
    {
        return $this->joinTokens;
    }

    /**
     * JoinTokens contains the tokens workers and managers need to join the swarm.
     */
    public function setJoinTokens(?JoinTokens $joinTokens): self
    {
        $this->joinTokens = $joinTokens;

        return $this;
    }
}
