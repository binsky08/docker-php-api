<?php

declare(strict_types=1);

namespace Docker\API\Endpoint;

class ExecStart extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    protected $id;

    /**
     * Starts a previously set up exec instance. If detach is true, this endpoint.
     * returns immediately after starting the command. Otherwise, it sets up an
     * interactive session with the command.
     *
     * @param string $id Exec instance ID
     */
    public function __construct(string $id, \Docker\API\Model\ExecIdStartPostBody $requestBody)
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
        return \str_replace(['{id}'], [$this->id], '/exec/{id}/start');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Docker\API\Model\ExecIdStartPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (404 === $status) {
        }
        if (409 === $status) {
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
