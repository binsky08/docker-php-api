<?php

declare(strict_types=1);

namespace Docker\API\Endpoint;

class ServiceDelete extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    protected $id;

    /**
     * @param string $id ID or name of service
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    use \Docker\API\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return \str_replace(['{id}'], [$this->id], '/services/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ServiceDeleteNotFoundException
     * @throws \Docker\API\Exception\ServiceDeleteInternalServerErrorException
     * @throws \Docker\API\Exception\ServiceDeleteServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (404 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\ServiceDeleteNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\ServiceDeleteInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\ServiceDeleteServiceUnavailableException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
