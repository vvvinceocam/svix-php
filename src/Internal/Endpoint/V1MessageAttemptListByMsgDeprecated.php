<?php

namespace Svix\Internal\Endpoint;

class V1MessageAttemptListByMsgDeprecated extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $msg_id;
    /**
    * Deprecated: Please use "List Attempts by Endpoint" and "List Attempts by Msg" instead.
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    `msg_id`: Use a message id or a message `eventId`
    *
    * @param string $appId The app's ID or UID
    * @param string $msgId The msg's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var string $endpoint_id Filter the attempts based on the attempted endpoint
    *     @var string $channel Filter response based on the channel
    *     @var int $status Filter response based on the delivery status
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var int $status_code_class Filter response based on the HTTP status code
    *     @var array $event_types Filter response based on the event type
    * }
    */
    public function __construct(string $appId, string $msgId, array $queryParameters = array())
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
        return str_replace(array('{app_id}', '{msg_id}'), array($this->app_id, $this->msg_id), '/api/v1/app/{app_id}/msg/{msg_id}/attempt/');
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
        $optionsResolver->setDefined(array('limit', 'iterator', 'endpoint_id', 'channel', 'status', 'before', 'after', 'status_code_class', 'event_types'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('limit', array('int'));
        $optionsResolver->addAllowedTypes('iterator', array('string', 'null'));
        $optionsResolver->addAllowedTypes('endpoint_id', array('string', 'null'));
        $optionsResolver->addAllowedTypes('channel', array('string', 'null'));
        $optionsResolver->addAllowedTypes('status', array('int'));
        $optionsResolver->addAllowedTypes('before', array('string', 'null'));
        $optionsResolver->addAllowedTypes('after', array('string', 'null'));
        $optionsResolver->addAllowedTypes('status_code_class', array('int'));
        $optionsResolver->addAllowedTypes('event_types', array('array', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedTooManyRequestsException
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
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('HTTPBearer');
    }
}