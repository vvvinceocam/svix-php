<?php

namespace Svix\Internal\Endpoint;

class CreateMessageAttemptForEndpoint extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $endpoint_id;
    /**
    * Creates and sends a message to the specified endpoint. The message attempt and response from the endpoint is returned.
    FIXME: use MessageIn for expediency, even though the `application` parameter is unused. Since this endpoint isn't publicly documented anyway, it should be fine
    *
    * @param string $appId The app's ID or UID
    * @param string $endpointId The ep's ID or UID
    * @param \Svix\Internal\Model\MessageIn $requestBody 
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    */
    public function __construct(string $appId, string $endpointId, \Svix\Internal\Model\MessageIn $requestBody, array $headerParameters = array())
    {
        $this->app_id = $appId;
        $this->endpoint_id = $endpointId;
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
        return str_replace(array('{app_id}', '{endpoint_id}'), array($this->app_id, $this->endpoint_id), '/api/v1/app/{app_id}/endpoint/{endpoint_id}/msg/test-attempt/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Svix\Internal\Model\MessageIn) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('idempotency-key'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('idempotency-key', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointBadRequestException
     * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointUnauthorizedException
     * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointForbiddenException
     * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointNotFoundException
     * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointConflictException
     * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointUnprocessableEntityException
     * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageAttemptOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\MessageAttemptOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\CreateMessageAttemptForEndpointBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\CreateMessageAttemptForEndpointUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\CreateMessageAttemptForEndpointForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\CreateMessageAttemptForEndpointNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\CreateMessageAttemptForEndpointConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\CreateMessageAttemptForEndpointUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\CreateMessageAttemptForEndpointTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('HTTPBearer');
    }
}