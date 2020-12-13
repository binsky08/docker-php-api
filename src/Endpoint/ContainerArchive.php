<?php

declare(strict_types=1);

namespace Docker\API\Endpoint;

class ContainerArchive extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    protected $id;

    /**
     * Get a tar archive of a resource in the filesystem of container id.
     *
     * @param string $id              ID or name of the container
     * @param array  $queryParameters {
     *
     *     @var string $path Resource in the container’s filesystem to archive.
     * }
     */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }

    use \Docker\API\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return \str_replace(['{id}'], [$this->id], '/containers/{id}/archive');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['path']);
        $optionsResolver->setRequired(['path']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('path', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ContainerArchiveNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (400 === $status) {
        }
        if (404 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\ContainerArchiveNotFoundException();
        }
        if (500 === $status) {
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
