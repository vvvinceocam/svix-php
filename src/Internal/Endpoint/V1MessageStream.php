<?php

namespace Svix\Internal\Endpoint;

class V1MessageStream extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    /**
     * Reads the stream of created messages for an application
     *
     * @param string $appId The app's ID or UID
     * @param array $queryParameters {
     *     @var int $limit Limit the number of returned items
     *     @var string $iterator The iterator returned from a prior invocation
     *     @var array $event_types Filter response based on the event type
     *     @var array $channels Filter response based on the event type
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
        return str_replace(array('{app_id}'), array($this->app_id), '/api/v1/app/{app_id}/events/');
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
        $optionsResolver->setDefined(array('limit', 'iterator', 'event_types', 'channels'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('limit', array('int'));
        $optionsResolver->addAllowedTypes('iterator', array('string', 'null'));
        $optionsResolver->addAllowedTypes('event_types', array('array', 'null'));
        $optionsResolver->addAllowedTypes('channels', array('array', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1MessageStreamBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageStreamUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageStreamForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageStreamNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageStreamConflictException
     * @throws \Svix\Internal\Exception\V1MessageStreamUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageStreamTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageStreamOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\MessageStreamOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageStreamBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageStreamUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageStreamForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageStreamNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageStreamConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageStreamUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageStreamTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('HTTPBearer');
    }
}