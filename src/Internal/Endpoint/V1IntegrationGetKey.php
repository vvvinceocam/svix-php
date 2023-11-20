<?php

namespace Svix\Internal\Endpoint;

class V1IntegrationGetKey extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $integ_id;
    /**
     * Get an integration's key.
     *
     * @param string $appId The app's ID or UID
     * @param string $integId The integ's ID
     */
    public function __construct(string $appId, string $integId)
    {
        $this->app_id = $appId;
        $this->integ_id = $integId;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{app_id}', '{integ_id}'), array($this->app_id, $this->integ_id), '/api/v1/app/{app_id}/integration/{integ_id}/key/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyBadRequestException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyUnauthorizedException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyForbiddenException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyNotFoundException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyConflictException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\IntegrationKeyOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\IntegrationKeyOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationGetKeyBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationGetKeyUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationGetKeyForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationGetKeyNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationGetKeyConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationGetKeyUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1IntegrationGetKeyTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('HTTPBearer');
    }
}