<?php

declare(strict_types=1);

namespace Docker\API\Endpoint;

class PutContainerArchive extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    use \Docker\API\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Upload a tar archive to be extracted to a path in the filesystem of container id.
     *
     * @param string                                                 $id              ID or name of the container
     * @param string|resource|\Psr\Http\Message\StreamInterface|null $requestBody
     * @param array                                                  $queryParameters {
     *
     *     @var string $path path to a directory in the container to extract the archive’s contents into
     *     @var string $noOverwriteDirNonDir if `1`, `true`, or `True` then it will be an error if unpacking the
     * given content would cause an existing directory to be replaced with
     * a non-directory and vice versa
     *     @var string $copyUIDGID If `1`, `true`, then it will copy UID/GID maps to the dest file or
     * dir
     *
     * }
     */
    public function __construct(string $id, $requestBody = null, array $queryParameters = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return \str_replace(['{id}'], [$this->id], '/containers/{id}/archive');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['application/x-tar']], $this->body];
        }
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['application/octet-stream']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['path', 'noOverwriteDirNonDir', 'copyUIDGID']);
        $optionsResolver->setRequired(['path']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('path', ['string']);
        $optionsResolver->setAllowedTypes('noOverwriteDirNonDir', ['string']);
        $optionsResolver->setAllowedTypes('copyUIDGID', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\PutContainerArchiveBadRequestException
     * @throws \Docker\API\Exception\PutContainerArchiveForbiddenException
     * @throws \Docker\API\Exception\PutContainerArchiveNotFoundException
     * @throws \Docker\API\Exception\PutContainerArchiveInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if ((null === $contentType) === false && (400 === $status && false !== \mb_strpos($contentType, 'application/json'))) {
            throw new \Docker\API\Exception\PutContainerArchiveBadRequestException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if ((null === $contentType) === false && (403 === $status && false !== \mb_strpos($contentType, 'application/json'))) {
            throw new \Docker\API\Exception\PutContainerArchiveForbiddenException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if ((null === $contentType) === false && (404 === $status && false !== \mb_strpos($contentType, 'application/json'))) {
            throw new \Docker\API\Exception\PutContainerArchiveNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if ((null === $contentType) === false && (500 === $status && false !== \mb_strpos($contentType, 'application/json'))) {
            throw new \Docker\API\Exception\PutContainerArchiveInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
