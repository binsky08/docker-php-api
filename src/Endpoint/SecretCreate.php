<?php

declare(strict_types=1);

namespace Docker\API\Endpoint;

class SecretCreate extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    public function __construct(\Docker\API\Model\SecretsCreatePostBody $requestBody)
    {
        $this->body = $requestBody;
    }

    use \Docker\API\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/secrets/create';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Docker\API\Model\SecretsCreatePostBody) {
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
     * @throws \Docker\API\Exception\SecretCreateConflictException
     * @throws \Docker\API\Exception\SecretCreateInternalServerErrorException
     * @throws \Docker\API\Exception\SecretCreateServiceUnavailableException
     *
     * @return \Docker\API\Model\IdResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\IdResponse', 'json');
        }
        if (409 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\SecretCreateConflictException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\SecretCreateInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\SecretCreateServiceUnavailableException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
