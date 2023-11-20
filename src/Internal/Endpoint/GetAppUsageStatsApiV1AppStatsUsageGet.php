<?php

namespace Svix\Internal\Endpoint;

class GetAppUsageStatsApiV1AppStatsUsageGet extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    /**
     * Get basic statistics for all applications.
     *
     * @param array $queryParameters {
     *     @var string $since Filter the range to data after this date
     *     @var string $until Filter the range to data before this date
     *     @var int $limit Limit the number of returned items
     *     @var string $iterator The iterator to use (depends on the chosen ordering)
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/api/v1/app/stats/usage/';
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
        $optionsResolver->setDefined(array('since', 'until', 'limit', 'iterator'));
        $optionsResolver->setRequired(array('since', 'until'));
        $optionsResolver->setDefaults(array('limit' => 50));
        $optionsResolver->addAllowedTypes('since', array('string'));
        $optionsResolver->addAllowedTypes('until', array('string'));
        $optionsResolver->addAllowedTypes('limit', array('int', 'null'));
        $optionsResolver->addAllowedTypes('iterator', array('string', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetBadRequestException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetUnauthorizedException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetForbiddenException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetNotFoundException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetConflictException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseApplicationStats
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\ListResponseApplicationStats', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('HTTPBearer');
    }
}