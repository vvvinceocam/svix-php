<?php

namespace Svix\Internal\Endpoint;

class V1MessageAttemptGet extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $msg_id;
    protected $attempt_id;
    /**
     * `msg_id`: Use a message id or a message `eventId`
     *
     * @param string $appId The app's ID or UID
     * @param string $msgId The msg's ID or UID
     * @param string $attemptId The attempt's ID
     */
    public function __construct(string $appId, string $msgId, string $attemptId)
    {
        $this->app_id = $appId;
        $this->msg_id = $msgId;
        $this->attempt_id = $attemptId;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{app_id}', '{msg_id}', '{attempt_id}'], [$this->app_id, $this->msg_id, $this->attempt_id], '/api/v1/app/{app_id}/msg/{msg_id}/attempt/{attempt_id}/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageAttemptOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\MessageAttemptOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}