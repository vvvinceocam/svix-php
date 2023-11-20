<?php

namespace Svix\Internal\Endpoint;

class V1MessageAttemptGetHeaders extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $msg_id;
    protected $attempt_id;
    /**
     * Calculate and return headers used on a given message attempt
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
        return str_replace(array('{app_id}', '{msg_id}', '{attempt_id}'), array($this->app_id, $this->msg_id, $this->attempt_id), '/api/v1/app/{app_id}/msg/{msg_id}/attempt/{attempt_id}/headers/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageAttemptHeadersOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\MessageAttemptHeadersOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetHeadersBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetHeadersUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetHeadersForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetHeadersNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetHeadersConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetHeadersUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptGetHeadersTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('HTTPBearer');
    }
}