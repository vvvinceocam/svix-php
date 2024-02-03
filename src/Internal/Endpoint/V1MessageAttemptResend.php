<?php

namespace Svix\Internal\Endpoint;

class V1MessageAttemptResend extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $msg_id;
    protected $endpoint_id;
    /**
     * Resend a message to the specified endpoint.
     *
     * @param string $appId The app's ID or UID
     * @param string $msgId The msg's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     */
    public function __construct(string $appId, string $msgId, string $endpointId, array $headerParameters = [])
    {
        $this->app_id = $appId;
        $this->msg_id = $msgId;
        $this->endpoint_id = $endpointId;
        $this->headerParameters = $headerParameters;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{app_id}', '{msg_id}', '{endpoint_id}'], [$this->app_id, $this->msg_id, $this->endpoint_id], '/api/v1/app/{app_id}/msg/{msg_id}/endpoint/{endpoint_id}/resend/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendTooManyRequestsException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptResendBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptResendUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptResendForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptResendNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptResendConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptResendUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptResendTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}