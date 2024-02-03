<?php

namespace Svix\Internal\Endpoint;

class V1MessageAttemptListByEndpointDeprecated extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $msg_id;
    protected $endpoint_id;
    /**
    * DEPRECATED: please use list_attempts with endpoint_id as a query parameter instead.
    
    List the message attempts for a particular endpoint.
    
    Returning the endpoint.
    
    The `before` parameter lets you filter all items created before a certain date and is ignored if an iterator is passed.
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    *
    * @param string $appId The app's ID or UID
    * @param string $msgId The msg's ID or UID
    * @param string $endpointId The ep's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var string $channel Filter response based on the channel
    *     @var int $status Filter response based on the delivery status
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var array $event_types Filter response based on the event type
    * }
    */
    public function __construct(string $appId, string $msgId, string $endpointId, array $queryParameters = [])
    {
        $this->app_id = $appId;
        $this->msg_id = $msgId;
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
        return str_replace(['{app_id}', '{msg_id}', '{endpoint_id}'], [$this->app_id, $this->msg_id, $this->endpoint_id], '/api/v1/app/{app_id}/msg/{msg_id}/endpoint/{endpoint_id}/attempt/');
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
        $optionsResolver->setDefined(['limit', 'iterator', 'channel', 'status', 'before', 'after', 'event_types']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('iterator', ['string', 'null']);
        $optionsResolver->addAllowedTypes('channel', ['string', 'null']);
        $optionsResolver->addAllowedTypes('status', ['int']);
        $optionsResolver->addAllowedTypes('before', ['string', 'null']);
        $optionsResolver->addAllowedTypes('after', ['string', 'null']);
        $optionsResolver->addAllowedTypes('event_types', ['array', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseMessageAttemptEndpointOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\ListResponseMessageAttemptEndpointOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}