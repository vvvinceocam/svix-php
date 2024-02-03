<?php

namespace Svix\Internal\Endpoint;

class V1EventTypeCreate extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    /**
    * Create new or unarchive existing event type.
    
    Unarchiving an event type will allow endpoints to filter on it and messages to be sent with it.
    Endpoints filtering on the event type before archival will continue to filter on it.
    This operation does not preserve the description and schemas.
    *
    * @param \Svix\Internal\Model\EventTypeIn $requestBody 
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    */
    public function __construct(\Svix\Internal\Model\EventTypeIn $requestBody, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/api/v1/event-type/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Svix\Internal\Model\EventTypeIn) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['idempotency-key']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('idempotency-key', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1EventTypeCreateBadRequestException
     * @throws \Svix\Internal\Exception\V1EventTypeCreateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EventTypeCreateForbiddenException
     * @throws \Svix\Internal\Exception\V1EventTypeCreateNotFoundException
     * @throws \Svix\Internal\Exception\V1EventTypeCreateConflictException
     * @throws \Svix\Internal\Exception\V1EventTypeCreateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EventTypeCreateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EventTypeOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\EventTypeOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeCreateBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeCreateUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeCreateForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeCreateNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeCreateConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeCreateUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeCreateTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}