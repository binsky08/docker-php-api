<?php

declare(strict_types=1);

namespace Docker\API\Endpoint;

class DistributionInspect extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    protected $name;

    /**
     * Return image digest and platform information by contacting the registry.
     *
     * @param string $name Image name or id
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    use \Docker\API\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return \str_replace(['{name}'], [$this->name], '/distribution/{name}/json');
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
     * @throws \Docker\API\Exception\DistributionInspectUnauthorizedException
     * @throws \Docker\API\Exception\DistributionInspectInternalServerErrorException
     *
     * @return \Docker\API\Model\DistributionNameJsonGetResponse200|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\DistributionNameJsonGetResponse200', 'json');
        }
        if (401 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\DistributionInspectUnauthorizedException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\DistributionInspectInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
