<?php

namespace Svix\Internal\Endpoint;

class V1MessageAttemptListByMsg extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $msg_id;
    /**
    * List attempts by message id
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    *
    * @param string $appId The app's ID or UID
    * @param string $msgId The msg's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var int $status Filter response based on the delivery status
    *     @var int $status_code_class Filter response based on the HTTP status code
    *     @var string $channel Filter response based on the channel
    *     @var string $endpoint_id Filter the attempts based on the attempted endpoint
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var bool $with_content When `true` attempt content is included in the response
    *     @var array $event_types Filter response based on the event type
    * }
    */
    public function __construct(string $appId, string $msgId, array $queryParameters = [])
    {
        $this->app_id = $appId;
        $this->msg_id = $msgId;
        $this->queryParameters = $queryParameters;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{app_id}', '{msg_id}'], [$this->app_id, $this->msg_id], '/api/v1/app/{app_id}/attempt/msg/{msg_id}/');
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
        $optionsResolver->setDefined(['limit', 'iterator', 'status', 'status_code_class', 'channel', 'endpoint_id', 'before', 'after', 'with_content', 'event_types']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['with_content' => true]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('iterator', ['string', 'null']);
        $optionsResolver->addAllowedTypes('status', ['int']);
        $optionsResolver->addAllowedTypes('status_code_class', ['int']);
        $optionsResolver->addAllowedTypes('channel', ['string', 'null']);
        $optionsResolver->addAllowedTypes('endpoint_id', ['string', 'null']);
        $optionsResolver->addAllowedTypes('before', ['string', 'null']);
        $optionsResolver->addAllowedTypes('after', ['string', 'null']);
        $optionsResolver->addAllowedTypes('with_content', ['bool']);
        $optionsResolver->setNormalizer('with_content', \Closure::fromCallable([new \Svix\CustomQueryResolvers\BoolCustomQueryResolver(), '__invoke']));
        $optionsResolver->addAllowedTypes('event_types', ['array', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgTooManyRequestsException
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
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}