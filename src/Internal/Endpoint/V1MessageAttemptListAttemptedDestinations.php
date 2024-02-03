<?php

namespace Svix\Internal\Endpoint;

class V1MessageAttemptListAttemptedDestinations extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $msg_id;
    /**
    * List endpoints attempted by a given message. Additionally includes metadata about the latest message attempt.
    By default, endpoints are listed in ascending order by ID.
    *
    * @param string $appId The app's ID or UID
    * @param string $msgId The msg's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
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
        return str_replace(['{app_id}', '{msg_id}'], [$this->app_id, $this->msg_id], '/api/v1/app/{app_id}/msg/{msg_id}/endpoint/');
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
        $optionsResolver->setDefined(['limit', 'iterator']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('iterator', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseMessageEndpointOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\ListResponseMessageEndpointOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}