<?php

namespace Svix\Internal\Endpoint;

class V1IntegrationUpdate extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $integ_id;
    /**
     * Update an integration.
     *
     * @param string $appId The app's ID or UID
     * @param string $integId The integ's ID
     * @param \Svix\Internal\Model\IntegrationUpdate $requestBody 
     */
    public function __construct(string $appId, string $integId, \Svix\Internal\Model\IntegrationUpdate $requestBody)
    {
        $this->app_id = $appId;
        $this->integ_id = $integId;
        $this->body = $requestBody;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{app_id}', '{integ_id}'], [$this->app_id, $this->integ_id], '/api/v1/app/{app_id}/integration/{integ_id}/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Svix\Internal\Model\IntegrationUpdate) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateBadRequestException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateForbiddenException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateNotFoundException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateConflictException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\IntegrationOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\IntegrationOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationUpdateBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationUpdateUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationUpdateForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationUpdateNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationUpdateConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationUpdateUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationUpdateTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}