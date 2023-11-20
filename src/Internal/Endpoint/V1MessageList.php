<?php

namespace Svix\Internal\Endpoint;

class V1MessageList extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    /**
    * List all of the application's messages.
    
    The `before` and `after` parameters let you filter all items created before or after a certain date. These can be used alongside an iterator to paginate over results
    within a certain window.
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    *
    * @param string $appId The app's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var string $channel Filter response based on the channel
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var bool $with_content When `true` message payloads are included in the response
    *     @var array $event_types Filter response based on the event type
    * }
    */
    public function __construct(string $appId, array $queryParameters = array())
    {
        $this->app_id = $appId;
        $this->queryParameters = $queryParameters;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{app_id}'), array($this->app_id), '/api/v1/app/{app_id}/msg/');
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
        $optionsResolver->setDefined(array('limit', 'iterator', 'channel', 'before', 'after', 'with_content', 'event_types'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('with_content' => true));
        $optionsResolver->addAllowedTypes('limit', array('int'));
        $optionsResolver->addAllowedTypes('iterator', array('string', 'null'));
        $optionsResolver->addAllowedTypes('channel', array('string', 'null'));
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
     * @throws \Svix\Internal\Exception\V1MessageListBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageListUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageListForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageListNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageListConflictException
     * @throws \Svix\Internal\Exception\V1MessageListUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageListTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseMessageOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\ListResponseMessageOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageListBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageListUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageListForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageListNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageListConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageListUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageListTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('HTTPBearer');
    }
}