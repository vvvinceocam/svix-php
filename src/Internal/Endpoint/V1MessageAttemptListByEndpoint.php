<?php

namespace Svix\Internal\Endpoint;

class V1MessageAttemptListByEndpoint extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $endpoint_id;
    /**
    * List attempts by endpoint id
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    *
    * @param string $appId The app's ID or UID
    * @param string $endpointId The ep's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var int $status Filter response based on the delivery status
    *     @var int $status_code_class Filter response based on the HTTP status code
    *     @var string $channel Filter response based on the channel
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var bool $with_content When `true` attempt content is included in the response
    *     @var bool $with_msg When `true`, the message information is included in the response
    *     @var array $event_types Filter response based on the event type
    * }
    */
    public function __construct(string $appId, string $endpointId, array $queryParameters = [])
    {
        $this->app_id = $appId;
        $this->endpoint_id = $endpointId;
        $this->queryParameters = $queryParameters;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{app_id}', '{endpoint_id}'], [$this->app_id, $this->endpoint_id], '/api/v1/app/{app_id}/attempt/endpoint/{endpoint_id}/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['limit', 'iterator', 'status', 'status_code_class', 'channel', 'before', 'after', 'with_content', 'with_msg', 'event_types']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['with_content' => true, 'with_msg' => false]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('iterator', ['string', 'null']);
        $optionsResolver->addAllowedTypes('status', ['int']);
        $optionsResolver->addAllowedTypes('status_code_class', ['int']);
        $optionsResolver->addAllowedTypes('channel', ['string', 'null']);
        $optionsResolver->addAllowedTypes('before', ['string', 'null']);
        $optionsResolver->addAllowedTypes('after', ['string', 'null']);
        $optionsResolver->addAllowedTypes('with_content', ['bool']);
        $optionsResolver->setNormalizer('with_content', \Closure::fromCallable([new \Svix\CustomQueryResolvers\BoolCustomQueryResolver(), '__invoke']));
        $optionsResolver->addAllowedTypes('with_msg', ['bool']);
        $optionsResolver->setNormalizer('with_msg', \Closure::fromCallable([new \Svix\CustomQueryResolvers\BoolCustomQueryResolver(), '__invoke']));
        $optionsResolver->addAllowedTypes('event_types', ['array', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseMessageAttemptOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\ListResponseMessageAttemptOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}