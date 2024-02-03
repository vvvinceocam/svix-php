<?php

namespace Svix\Internal\Endpoint;

class V1MessageAttemptExpungeContent extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $msg_id;
    protected $attempt_id;
    /**
     * Deletes the given attempt's response body. Useful when an endpoint accidentally returned sensitive content.
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
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{app_id}', '{msg_id}', '{attempt_id}'], [$this->app_id, $this->msg_id, $this->attempt_id], '/api/v1/app/{app_id}/msg/{msg_id}/attempt/{attempt_id}/content/');
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
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentTooManyRequestsException
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
            throw new \Svix\Internal\Exception\V1MessageAttemptExpungeContentBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptExpungeContentUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptExpungeContentForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptExpungeContentNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptExpungeContentConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptExpungeContentUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptExpungeContentTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}