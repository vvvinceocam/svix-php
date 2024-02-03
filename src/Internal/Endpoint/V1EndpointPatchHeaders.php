<?php

namespace Svix\Internal\Endpoint;

class V1EndpointPatchHeaders extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $endpoint_id;
    /**
     * Partially set the additional headers to be sent with the webhook
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\EndpointHeadersPatchIn $requestBody 
     */
    public function __construct(string $appId, string $endpointId, \Svix\Internal\Model\EndpointHeadersPatchIn $requestBody)
    {
        $this->app_id = $appId;
        $this->endpoint_id = $endpointId;
        $this->body = $requestBody;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(['{app_id}', '{endpoint_id}'], [$this->app_id, $this->endpoint_id], '/api/v1/app/{app_id}/endpoint/{endpoint_id}/headers/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Svix\Internal\Model\EndpointHeadersPatchIn) {
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
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersConflictException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersTooManyRequestsException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EndpointPatchHeadersBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EndpointPatchHeadersUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EndpointPatchHeadersForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EndpointPatchHeadersNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EndpointPatchHeadersConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EndpointPatchHeadersUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EndpointPatchHeadersTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}