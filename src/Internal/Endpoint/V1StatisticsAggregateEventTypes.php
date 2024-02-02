<?php

namespace Svix\Internal\Endpoint;

class V1StatisticsAggregateEventTypes extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/api/v1/stats/usage/event-types/';
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
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesBadRequestException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesUnauthorizedException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesForbiddenException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesNotFoundException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesConflictException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\AggregateEventTypesOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (202 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\AggregateEventTypesOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1StatisticsAggregateEventTypesBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1StatisticsAggregateEventTypesUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1StatisticsAggregateEventTypesForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1StatisticsAggregateEventTypesNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1StatisticsAggregateEventTypesConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1StatisticsAggregateEventTypesUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1StatisticsAggregateEventTypesTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('HTTPBearer');
    }
}