<?php

declare(strict_types=1);

namespace Docker\API\Endpoint;

class ContainerUpdate extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    protected $id;

    /**
     * Change various configuration options of a container without having to recreate it.
     *
     * @param string $id ID or name of the container
     */
    public function __construct(string $id, \Docker\API\Model\ContainersIdUpdatePostBody $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }

    use \Docker\API\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return \str_replace(['{id}'], [$this->id], '/containers/{id}/update');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Docker\API\Model\ContainersIdUpdatePostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ContainerUpdateNotFoundException
     * @throws \Docker\API\Exception\ContainerUpdateInternalServerErrorException
     *
     * @return \Docker\API\Model\ContainersIdUpdatePostResponse200|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\ContainersIdUpdatePostResponse200', 'json');
        }
        if (404 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\ContainerUpdateNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\ContainerUpdateInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
