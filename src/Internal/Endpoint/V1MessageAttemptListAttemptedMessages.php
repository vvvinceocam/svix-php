<?php

namespace Svix\Internal\Endpoint;

class V1MessageAttemptListAttemptedMessages extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $endpoint_id;
    /**
    * List messages for a particular endpoint. Additionally includes metadata about the latest message attempt.
    
    The `before` parameter lets you filter all items created before a certain date and is ignored if an iterator is passed.
    
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
    *     @var string $channel Filter response based on the channel
    *     @var int $status Filter response based on the delivery status
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var bool $with_content When `true` message payloads are included in the response
    *     @var array $event_types Filter response based on the event type
    * }
    */
    public function __construct(string $appId, string $endpointId, array $queryParameters = array())
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
        return str_replace(array('{app_id}', '{endpoint_id}'), array($this->app_id, $this->endpoint_id), '/api/v1/app/{app_id}/endpoint/{endpoint_id}/msg/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('limit', 'iterator', 'channel', 'status', 'before', 'after', 'with_content', 'event_types'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('with_content' => true));
        $optionsResolver->addAllowedTypes('limit', array('int'));
        $optionsResolver->addAllowedTypes('iterator', array('string', 'null'));
        $optionsResolver->addAllowedTypes('channel', array('string', 'null'));
        $optionsResolver->addAllowedTypes('status', array('int'));
        $optionsResolver->addAllowedTypes('before', array('string', 'null'));
        $optionsResolver->addAllowedTypes('after', array('string', 'null'));
        $optionsResolver->addAllowedTypes('with_content', array('bool'));
        $optionsResolver->setNormalizer('with_content', \Closure::fromCallable(array(new \Svix\CustomQueryResolvers\BoolCustomQueryResolver(), '__invoke')));
        $optionsResolver->addAllowedTypes('event_types', array('array', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseEndpointMessageOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\ListResponseEndpointMessageOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('HTTPBearer');
    }
}