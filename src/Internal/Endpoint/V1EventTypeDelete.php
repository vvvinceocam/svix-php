<?php

namespace Svix\Internal\Endpoint;

class V1EventTypeDelete extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $event_type_name;
    /**
    * Archive an event type.
    
    Endpoints already configured to filter on an event type will continue to do so after archival.
    However, new messages can not be sent with it and endpoints can not filter on it.
    An event type can be unarchived with the
    [create operation](#operation/create_event_type_api_v1_event_type__post).
    *
    * @param string $eventTypeName The event type's name
    * @param array $queryParameters {
    *     @var bool $expunge By default event types are archived when "deleted". Passing this to `true` deletes them entirely.
    * }
    */
    public function __construct(string $eventTypeName, array $queryParameters = array())
    {
        $this->event_type_name = $eventTypeName;
        $this->queryParameters = $queryParameters;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{event_type_name}'), array($this->event_type_name), '/api/v1/event-type/{event_type_name}/');
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
        $optionsResolver->setDefined(array('expunge'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('expunge' => false));
        $optionsResolver->addAllowedTypes('expunge', array('bool'));
        $optionsResolver->setNormalizer('expunge', \Closure::fromCallable(array(new \Svix\CustomQueryResolvers\BoolCustomQueryResolver(), '__invoke')));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1EventTypeDeleteBadRequestException
     * @throws \Svix\Internal\Exception\V1EventTypeDeleteUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EventTypeDeleteForbiddenException
     * @throws \Svix\Internal\Exception\V1EventTypeDeleteNotFoundException
     * @throws \Svix\Internal\Exception\V1EventTypeDeleteConflictException
     * @throws \Svix\Internal\Exception\V1EventTypeDeleteUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EventTypeDeleteTooManyRequestsException
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
            throw new \Svix\Internal\Exception\V1EventTypeDeleteBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeDeleteUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeDeleteForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeDeleteNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeDeleteConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeDeleteUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1EventTypeDeleteTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('HTTPBearer');
    }
}