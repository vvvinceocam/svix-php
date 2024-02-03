<?php

namespace Svix\Internal;

class Client extends \Svix\Internal\Runtime\Client\Client
{
    /**
     * List of all the organization's applications.
     *
     * @param array $queryParameters {
     *     @var int $limit Limit the number of returned items
     *     @var string $iterator The iterator returned from a prior invocation
     *     @var string $order The sorting order of the returned items
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1ApplicationListBadRequestException
     * @throws \Svix\Internal\Exception\V1ApplicationListUnauthorizedException
     * @throws \Svix\Internal\Exception\V1ApplicationListForbiddenException
     * @throws \Svix\Internal\Exception\V1ApplicationListNotFoundException
     * @throws \Svix\Internal\Exception\V1ApplicationListConflictException
     * @throws \Svix\Internal\Exception\V1ApplicationListUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1ApplicationListTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseApplicationOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1ApplicationList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1ApplicationList($queryParameters), $fetch);
    }
    /**
     * Create a new application.
     *
     * @param \Svix\Internal\Model\ApplicationIn $requestBody 
     * @param array $queryParameters {
     *     @var bool $get_if_exists Get an existing application, or create a new one if doesn't exist. It's two separate functions in the libs.
     * }
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1ApplicationCreateBadRequestException
     * @throws \Svix\Internal\Exception\V1ApplicationCreateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1ApplicationCreateForbiddenException
     * @throws \Svix\Internal\Exception\V1ApplicationCreateNotFoundException
     * @throws \Svix\Internal\Exception\V1ApplicationCreateConflictException
     * @throws \Svix\Internal\Exception\V1ApplicationCreateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1ApplicationCreateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ApplicationOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1ApplicationCreate(\Svix\Internal\Model\ApplicationIn $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1ApplicationCreate($requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get basic statistics for all applications.
     *
     * @param array $queryParameters {
     *     @var string $since Filter the range to data after this date
     *     @var string $until Filter the range to data before this date
     *     @var int $limit Limit the number of returned items
     *     @var string $iterator The iterator to use (depends on the chosen ordering)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetBadRequestException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetUnauthorizedException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetForbiddenException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetNotFoundException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetConflictException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\GetAppUsageStatsApiV1AppStatsUsageGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseApplicationStats|\Psr\Http\Message\ResponseInterface
     */
    public function getAppUsageStatsApiV1AppStatsUsageGet(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\GetAppUsageStatsApiV1AppStatsUsageGet($queryParameters), $fetch);
    }
    /**
     * Delete an application.
     *
     * @param string $appId The app's ID or UID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1ApplicationDeleteBadRequestException
     * @throws \Svix\Internal\Exception\V1ApplicationDeleteUnauthorizedException
     * @throws \Svix\Internal\Exception\V1ApplicationDeleteForbiddenException
     * @throws \Svix\Internal\Exception\V1ApplicationDeleteNotFoundException
     * @throws \Svix\Internal\Exception\V1ApplicationDeleteConflictException
     * @throws \Svix\Internal\Exception\V1ApplicationDeleteUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1ApplicationDeleteTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1ApplicationDelete(string $appId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1ApplicationDelete($appId), $fetch);
    }
    /**
     * Get an application.
     *
     * @param string $appId The app's ID or UID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1ApplicationGetBadRequestException
     * @throws \Svix\Internal\Exception\V1ApplicationGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1ApplicationGetForbiddenException
     * @throws \Svix\Internal\Exception\V1ApplicationGetNotFoundException
     * @throws \Svix\Internal\Exception\V1ApplicationGetConflictException
     * @throws \Svix\Internal\Exception\V1ApplicationGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1ApplicationGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ApplicationOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1ApplicationGet(string $appId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1ApplicationGet($appId), $fetch);
    }
    /**
     * Partially update an application.
     *
     * @param string $appId The app's ID or UID
     * @param \Svix\Internal\Model\ApplicationPatch $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1ApplicationPatchBadRequestException
     * @throws \Svix\Internal\Exception\V1ApplicationPatchUnauthorizedException
     * @throws \Svix\Internal\Exception\V1ApplicationPatchForbiddenException
     * @throws \Svix\Internal\Exception\V1ApplicationPatchNotFoundException
     * @throws \Svix\Internal\Exception\V1ApplicationPatchConflictException
     * @throws \Svix\Internal\Exception\V1ApplicationPatchUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1ApplicationPatchTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ApplicationOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1ApplicationPatch(string $appId, \Svix\Internal\Model\ApplicationPatch $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1ApplicationPatch($appId, $requestBody), $fetch);
    }
    /**
     * Update an application.
     *
     * @param string $appId The app's ID or UID
     * @param \Svix\Internal\Model\ApplicationIn $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1ApplicationUpdateBadRequestException
     * @throws \Svix\Internal\Exception\V1ApplicationUpdateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1ApplicationUpdateForbiddenException
     * @throws \Svix\Internal\Exception\V1ApplicationUpdateNotFoundException
     * @throws \Svix\Internal\Exception\V1ApplicationUpdateConflictException
     * @throws \Svix\Internal\Exception\V1ApplicationUpdateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1ApplicationUpdateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ApplicationOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1ApplicationUpdate(string $appId, \Svix\Internal\Model\ApplicationIn $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1ApplicationUpdate($appId, $requestBody), $fetch);
    }
    /**
    * List attempts by endpoint id
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    *
    * @param string $appId The app's ID or UID
    * @param string $endpointId The ep's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var int $status Filter response based on the delivery status
    *     @var int $status_code_class Filter response based on the HTTP status code
    *     @var string $channel Filter response based on the channel
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var bool $with_content When `true` attempt content is included in the response
    *     @var bool $with_msg When `true`, the message information is included in the response
    *     @var array $event_types Filter response based on the event type
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointBadRequestException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointUnauthorizedException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointForbiddenException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointNotFoundException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointConflictException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\ListResponseMessageAttemptOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1MessageAttemptListByEndpoint(string $appId, string $endpointId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageAttemptListByEndpoint($appId, $endpointId, $queryParameters), $fetch);
    }
    /**
    * List attempts by message id
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    *
    * @param string $appId The app's ID or UID
    * @param string $msgId The msg's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var int $status Filter response based on the delivery status
    *     @var int $status_code_class Filter response based on the HTTP status code
    *     @var string $channel Filter response based on the channel
    *     @var string $endpoint_id Filter the attempts based on the attempted endpoint
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var bool $with_content When `true` attempt content is included in the response
    *     @var array $event_types Filter response based on the event type
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgBadRequestException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgUnauthorizedException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgForbiddenException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgNotFoundException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgConflictException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\ListResponseMessageAttemptOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1MessageAttemptListByMsg(string $appId, string $msgId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageAttemptListByMsg($appId, $msgId, $queryParameters), $fetch);
    }
    /**
     * List the application's endpoints.
     *
     * @param string $appId The app's ID or UID
     * @param array $queryParameters {
     *     @var int $limit Limit the number of returned items
     *     @var string $iterator The iterator returned from a prior invocation
     *     @var string $order The sorting order of the returned items
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointListBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointListUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointListForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointListNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointListConflictException
     * @throws \Svix\Internal\Exception\V1EndpointListUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointListTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseEndpointOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointList(string $appId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointList($appId, $queryParameters), $fetch);
    }
    /**
    * Create a new endpoint for the application.
    
    When `secret` is `null` the secret is automatically generated (recommended)
    *
    * @param string $appId The app's ID or UID
    * @param \Svix\Internal\Model\EndpointIn $requestBody 
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1EndpointCreateBadRequestException
    * @throws \Svix\Internal\Exception\V1EndpointCreateUnauthorizedException
    * @throws \Svix\Internal\Exception\V1EndpointCreateForbiddenException
    * @throws \Svix\Internal\Exception\V1EndpointCreateNotFoundException
    * @throws \Svix\Internal\Exception\V1EndpointCreateConflictException
    * @throws \Svix\Internal\Exception\V1EndpointCreateUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1EndpointCreateTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\EndpointOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1EndpointCreate(string $appId, \Svix\Internal\Model\EndpointIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointCreate($appId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Delete an endpoint.
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointDeleteBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointDeleteUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointDeleteForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointDeleteNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointDeleteConflictException
     * @throws \Svix\Internal\Exception\V1EndpointDeleteUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointDeleteTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointDelete(string $appId, string $endpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointDelete($appId, $endpointId), $fetch);
    }
    /**
     * Get an endpoint.
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointGetBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointGetForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointGetNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointGetConflictException
     * @throws \Svix\Internal\Exception\V1EndpointGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EndpointOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointGet(string $appId, string $endpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointGet($appId, $endpointId), $fetch);
    }
    /**
     * Partially update an endpoint.
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\EndpointPatch $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointPatchBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointPatchUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointPatchForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointPatchNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointPatchConflictException
     * @throws \Svix\Internal\Exception\V1EndpointPatchUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointPatchTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EndpointOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointPatch(string $appId, string $endpointId, \Svix\Internal\Model\EndpointPatch $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointPatch($appId, $endpointId, $requestBody), $fetch);
    }
    /**
     * Update an endpoint.
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\EndpointUpdate $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointUpdateBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateConflictException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EndpointOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointUpdate(string $appId, string $endpointId, \Svix\Internal\Model\EndpointUpdate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointUpdate($appId, $endpointId, $requestBody), $fetch);
    }
    /**
     * Get the additional headers to be sent with the webhook
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointGetHeadersBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointGetHeadersUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointGetHeadersForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointGetHeadersNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointGetHeadersConflictException
     * @throws \Svix\Internal\Exception\V1EndpointGetHeadersUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointGetHeadersTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EndpointHeadersOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointGetHeaders(string $appId, string $endpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointGetHeaders($appId, $endpointId), $fetch);
    }
    /**
     * Partially set the additional headers to be sent with the webhook
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\EndpointHeadersPatchIn $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersConflictException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointPatchHeadersTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointPatchHeaders(string $appId, string $endpointId, \Svix\Internal\Model\EndpointHeadersPatchIn $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointPatchHeaders($appId, $endpointId, $requestBody), $fetch);
    }
    /**
     * Set the additional headers to be sent with the webhook
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\EndpointHeadersIn $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointUpdateHeadersBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateHeadersUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateHeadersForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateHeadersNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateHeadersConflictException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateHeadersUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointUpdateHeadersTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointUpdateHeaders(string $appId, string $endpointId, \Svix\Internal\Model\EndpointHeadersIn $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointUpdateHeaders($appId, $endpointId, $requestBody), $fetch);
    }
    /**
    * List messages for a particular endpoint. Additionally includes metadata about the latest message attempt.
    
    The `before` parameter lets you filter all items created before a certain date and is ignored if an iterator is passed.
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    *
    * @param string $appId The app's ID or UID
    * @param string $endpointId The ep's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var string $channel Filter response based on the channel
    *     @var int $status Filter response based on the delivery status
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var bool $with_content When `true` message payloads are included in the response
    *     @var array $event_types Filter response based on the event type
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesBadRequestException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesUnauthorizedException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesForbiddenException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesNotFoundException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesConflictException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedMessagesTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\ListResponseEndpointMessageOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1MessageAttemptListAttemptedMessages(string $appId, string $endpointId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageAttemptListAttemptedMessages($appId, $endpointId, $queryParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointBadRequestException
    * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointUnauthorizedException
    * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointForbiddenException
    * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointNotFoundException
    * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointConflictException
    * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointUnprocessableEntityException
    * @throws \Svix\Internal\Exception\CreateMessageAttemptForEndpointTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\MessageAttemptOut|\Psr\Http\Message\ResponseInterface
    */
    public function createMessageAttemptForEndpoint(string $appId, string $endpointId, \Svix\Internal\Model\MessageIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\CreateMessageAttemptForEndpoint($appId, $endpointId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Resend all failed messages since a given time.
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\RecoverIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointRecoverBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointRecoverUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointRecoverForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointRecoverNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointRecoverConflictException
     * @throws \Svix\Internal\Exception\V1EndpointRecoverUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointRecoverTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\RecoverOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointRecover(string $appId, string $endpointId, \Svix\Internal\Model\RecoverIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointRecover($appId, $endpointId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Replays messages to the endpoint. Only messages that were created after `since` will be sent. Messages that were previously sent to the endpoint are not resent.
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\ReplayIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointReplayBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointReplayUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointReplayForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointReplayNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointReplayConflictException
     * @throws \Svix\Internal\Exception\V1EndpointReplayUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointReplayTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ReplayOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointReplay(string $appId, string $endpointId, \Svix\Internal\Model\ReplayIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointReplay($appId, $endpointId, $requestBody, $headerParameters), $fetch);
    }
    /**
    * Get the endpoint's signing secret.
    
    This is used to verify the authenticity of the webhook.
    For more information please refer to [the consuming webhooks docs](https://docs.svix.com/consuming-webhooks/).
    *
    * @param string $appId The app's ID or UID
    * @param string $endpointId The ep's ID or UID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1EndpointGetSecretBadRequestException
    * @throws \Svix\Internal\Exception\V1EndpointGetSecretUnauthorizedException
    * @throws \Svix\Internal\Exception\V1EndpointGetSecretForbiddenException
    * @throws \Svix\Internal\Exception\V1EndpointGetSecretNotFoundException
    * @throws \Svix\Internal\Exception\V1EndpointGetSecretConflictException
    * @throws \Svix\Internal\Exception\V1EndpointGetSecretUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1EndpointGetSecretTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\EndpointSecretOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1EndpointGetSecret(string $appId, string $endpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointGetSecret($appId, $endpointId), $fetch);
    }
    /**
     * Rotates the endpoint's signing secret.  The previous secret will be valid for the next 24 hours.
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\EndpointSecretRotateIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointRotateSecretBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointRotateSecretUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointRotateSecretForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointRotateSecretNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointRotateSecretConflictException
     * @throws \Svix\Internal\Exception\V1EndpointRotateSecretUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointRotateSecretTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointRotateSecret(string $appId, string $endpointId, \Svix\Internal\Model\EndpointSecretRotateIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointRotateSecret($appId, $endpointId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Send an example message for event
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\EventExampleIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointSendExampleBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointSendExampleUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointSendExampleForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointSendExampleNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointSendExampleConflictException
     * @throws \Svix\Internal\Exception\V1EndpointSendExampleUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointSendExampleTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointSendExample(string $appId, string $endpointId, \Svix\Internal\Model\EventExampleIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointSendExample($appId, $endpointId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Get basic statistics for the endpoint.
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param array $queryParameters {
     *     @var string $since Filter the range to data starting from this date
     *     @var string $until Filter the range to data ending by this date
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointGetStatsBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointGetStatsUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointGetStatsForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointGetStatsNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointGetStatsConflictException
     * @throws \Svix\Internal\Exception\V1EndpointGetStatsUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointGetStatsTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EndpointStats|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointGetStats(string $appId, string $endpointId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointGetStats($appId, $endpointId, $queryParameters), $fetch);
    }
    /**
     * Get the transformation code associated with this endpoint
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointTransformationGetBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationGetForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationGetNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationGetConflictException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EndpointTransformationOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointTransformationGet(string $appId, string $endpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointTransformationGet($appId, $endpointId), $fetch);
    }
    /**
     * Set or unset the transformation code associated with this endpoint
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\EndpointTransformationIn $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointTransformationPartialUpdateBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationPartialUpdateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationPartialUpdateForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationPartialUpdateNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationPartialUpdateConflictException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationPartialUpdateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationPartialUpdateTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointTransformationPartialUpdate(string $appId, string $endpointId, \Svix\Internal\Model\EndpointTransformationIn $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointTransformationPartialUpdate($appId, $endpointId, $requestBody), $fetch);
    }
    /**
     * Simulate running the transformation on the payload and code
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param \Svix\Internal\Model\EndpointTransformationSimulateIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EndpointTransformationSimulateBadRequestException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationSimulateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationSimulateForbiddenException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationSimulateNotFoundException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationSimulateConflictException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationSimulateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EndpointTransformationSimulateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EndpointTransformationSimulateOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EndpointTransformationSimulate(string $appId, string $endpointId, \Svix\Internal\Model\EndpointTransformationSimulateIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EndpointTransformationSimulate($appId, $endpointId, $requestBody, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1MessageStreamBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageStreamUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageStreamForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageStreamNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageStreamConflictException
     * @throws \Svix\Internal\Exception\V1MessageStreamUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageStreamTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageStreamOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1MessageStream(string $appId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageStream($appId, $queryParameters), $fetch);
    }
    /**
     * Handles a raw inbound webhook for the application.
     *
     * @param string $appId The app's ID or UID
     * @param string $inboundToken 
     * @param string $requestBody 
     * @param array $queryParameters {
     *     @var string $event_type The event type's name
     * }
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1InboundMsgBadRequestException
     * @throws \Svix\Internal\Exception\V1InboundMsgUnauthorizedException
     * @throws \Svix\Internal\Exception\V1InboundMsgForbiddenException
     * @throws \Svix\Internal\Exception\V1InboundMsgNotFoundException
     * @throws \Svix\Internal\Exception\V1InboundMsgConflictException
     * @throws \Svix\Internal\Exception\V1InboundMsgUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1InboundMsgTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1InboundMsg(string $appId, string $inboundToken, string $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1InboundMsg($appId, $inboundToken, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * Invalidates the previous inbound url (if one exists), producing a new inbound
    URL for this app
    *
    * @param string $appId The app's ID or UID
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1InboundRotateUrlBadRequestException
    * @throws \Svix\Internal\Exception\V1InboundRotateUrlUnauthorizedException
    * @throws \Svix\Internal\Exception\V1InboundRotateUrlForbiddenException
    * @throws \Svix\Internal\Exception\V1InboundRotateUrlNotFoundException
    * @throws \Svix\Internal\Exception\V1InboundRotateUrlConflictException
    * @throws \Svix\Internal\Exception\V1InboundRotateUrlUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1InboundRotateUrlTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\RotatedUrlOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1InboundRotateUrl(string $appId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1InboundRotateUrl($appId, $headerParameters), $fetch);
    }
    /**
     * List the application's integrations.
     *
     * @param string $appId The app's ID or UID
     * @param array $queryParameters {
     *     @var int $limit Limit the number of returned items
     *     @var string $iterator The iterator returned from a prior invocation
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1IntegrationListBadRequestException
     * @throws \Svix\Internal\Exception\V1IntegrationListUnauthorizedException
     * @throws \Svix\Internal\Exception\V1IntegrationListForbiddenException
     * @throws \Svix\Internal\Exception\V1IntegrationListNotFoundException
     * @throws \Svix\Internal\Exception\V1IntegrationListConflictException
     * @throws \Svix\Internal\Exception\V1IntegrationListUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1IntegrationListTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseIntegrationOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1IntegrationList(string $appId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1IntegrationList($appId, $queryParameters), $fetch);
    }
    /**
     * Create an integration.
     *
     * @param string $appId The app's ID or UID
     * @param \Svix\Internal\Model\IntegrationIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1IntegrationCreateBadRequestException
     * @throws \Svix\Internal\Exception\V1IntegrationCreateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1IntegrationCreateForbiddenException
     * @throws \Svix\Internal\Exception\V1IntegrationCreateNotFoundException
     * @throws \Svix\Internal\Exception\V1IntegrationCreateConflictException
     * @throws \Svix\Internal\Exception\V1IntegrationCreateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1IntegrationCreateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\IntegrationOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1IntegrationCreate(string $appId, \Svix\Internal\Model\IntegrationIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1IntegrationCreate($appId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Delete an integration.
     *
     * @param string $appId The app's ID or UID
     * @param string $integId The integ's ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1IntegrationDeleteBadRequestException
     * @throws \Svix\Internal\Exception\V1IntegrationDeleteUnauthorizedException
     * @throws \Svix\Internal\Exception\V1IntegrationDeleteForbiddenException
     * @throws \Svix\Internal\Exception\V1IntegrationDeleteNotFoundException
     * @throws \Svix\Internal\Exception\V1IntegrationDeleteConflictException
     * @throws \Svix\Internal\Exception\V1IntegrationDeleteUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1IntegrationDeleteTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1IntegrationDelete(string $appId, string $integId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1IntegrationDelete($appId, $integId), $fetch);
    }
    /**
     * Get an integration.
     *
     * @param string $appId The app's ID or UID
     * @param string $integId The integ's ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1IntegrationGetBadRequestException
     * @throws \Svix\Internal\Exception\V1IntegrationGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1IntegrationGetForbiddenException
     * @throws \Svix\Internal\Exception\V1IntegrationGetNotFoundException
     * @throws \Svix\Internal\Exception\V1IntegrationGetConflictException
     * @throws \Svix\Internal\Exception\V1IntegrationGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1IntegrationGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\IntegrationOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1IntegrationGet(string $appId, string $integId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1IntegrationGet($appId, $integId), $fetch);
    }
    /**
     * Update an integration.
     *
     * @param string $appId The app's ID or UID
     * @param string $integId The integ's ID
     * @param \Svix\Internal\Model\IntegrationUpdate $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateBadRequestException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateForbiddenException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateNotFoundException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateConflictException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1IntegrationUpdateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\IntegrationOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1IntegrationUpdate(string $appId, string $integId, \Svix\Internal\Model\IntegrationUpdate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1IntegrationUpdate($appId, $integId, $requestBody), $fetch);
    }
    /**
     * Get an integration's key.
     *
     * @param string $appId The app's ID or UID
     * @param string $integId The integ's ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyBadRequestException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyUnauthorizedException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyForbiddenException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyNotFoundException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyConflictException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1IntegrationGetKeyTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\IntegrationKeyOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1IntegrationGetKey(string $appId, string $integId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1IntegrationGetKey($appId, $integId), $fetch);
    }
    /**
     * Rotate the integration's key. The previous key will be immediately revoked.
     *
     * @param string $appId The app's ID or UID
     * @param string $integId The integ's ID
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1IntegrationRotateKeyBadRequestException
     * @throws \Svix\Internal\Exception\V1IntegrationRotateKeyUnauthorizedException
     * @throws \Svix\Internal\Exception\V1IntegrationRotateKeyForbiddenException
     * @throws \Svix\Internal\Exception\V1IntegrationRotateKeyNotFoundException
     * @throws \Svix\Internal\Exception\V1IntegrationRotateKeyConflictException
     * @throws \Svix\Internal\Exception\V1IntegrationRotateKeyUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1IntegrationRotateKeyTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\IntegrationKeyOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1IntegrationRotateKey(string $appId, string $integId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1IntegrationRotateKey($appId, $integId, $headerParameters), $fetch);
    }
    /**
    * List all of the application's messages.
    
    The `before` and `after` parameters let you filter all items created before or after a certain date. These can be used alongside an iterator to paginate over results
    within a certain window.
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    *
    * @param string $appId The app's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var string $channel Filter response based on the channel
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var bool $with_content When `true` message payloads are included in the response
    *     @var string $tag Filter messages matching the provided tag
    *     @var array $event_types Filter response based on the event type
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1MessageListBadRequestException
    * @throws \Svix\Internal\Exception\V1MessageListUnauthorizedException
    * @throws \Svix\Internal\Exception\V1MessageListForbiddenException
    * @throws \Svix\Internal\Exception\V1MessageListNotFoundException
    * @throws \Svix\Internal\Exception\V1MessageListConflictException
    * @throws \Svix\Internal\Exception\V1MessageListUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1MessageListTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\ListResponseMessageOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1MessageList(string $appId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageList($appId, $queryParameters), $fetch);
    }
    /**
    * Creates a new message and dispatches it to all of the application's endpoints.
    
    The `eventId` is an optional custom unique ID. It's verified to be unique only up to a day, after that no verification will be made.
    If a message with the same `eventId` already exists for any application in your environment, a 409 conflict error will be returned.
    
    The `eventType` indicates the type and schema of the event. All messages of a certain `eventType` are expected to have the same schema. Endpoints can choose to only listen to specific event types.
    Messages can also have `channels`, which similar to event types let endpoints filter by them. Unlike event types, messages can have multiple channels, and channels don't imply a specific message content or schema.
    
    The `payload` property is the webhook's body (the actual webhook message). Svix supports payload sizes of up to ~350kb, though it's generally a good idea to keep webhook payloads small, probably no larger than 40kb.
    *
    * @param string $appId The app's ID or UID
    * @param \Svix\Internal\Model\MessageIn $requestBody 
    * @param array $queryParameters {
    *     @var bool $with_content When `true` message payloads are included in the response
    * }
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1MessageCreateBadRequestException
    * @throws \Svix\Internal\Exception\V1MessageCreateUnauthorizedException
    * @throws \Svix\Internal\Exception\V1MessageCreateForbiddenException
    * @throws \Svix\Internal\Exception\V1MessageCreateNotFoundException
    * @throws \Svix\Internal\Exception\V1MessageCreateConflictException
    * @throws \Svix\Internal\Exception\V1MessageCreateRequestEntityTooLargeException
    * @throws \Svix\Internal\Exception\V1MessageCreateUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1MessageCreateTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\MessageOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1MessageCreate(string $appId, \Svix\Internal\Model\MessageIn $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageCreate($appId, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get a message by its ID or eventID.
     *
     * @param string $appId The app's ID or UID
     * @param string $msgId The msg's ID or UID
     * @param array $queryParameters {
     *     @var bool $with_content When `true` message payloads are included in the response
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1MessageGetBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageGetForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageGetNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageGetConflictException
     * @throws \Svix\Internal\Exception\V1MessageGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1MessageGet(string $appId, string $msgId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageGet($appId, $msgId, $queryParameters), $fetch);
    }
    /**
    * Deprecated: Please use "List Attempts by Endpoint" and "List Attempts by Msg" instead.
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    `msg_id`: Use a message id or a message `eventId`
    *
    * @param string $appId The app's ID or UID
    * @param string $msgId The msg's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var string $endpoint_id Filter the attempts based on the attempted endpoint
    *     @var string $channel Filter response based on the channel
    *     @var int $status Filter response based on the delivery status
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var int $status_code_class Filter response based on the HTTP status code
    *     @var array $event_types Filter response based on the event type
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedBadRequestException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedUnauthorizedException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedForbiddenException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedNotFoundException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedConflictException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByMsgDeprecatedTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\ListResponseMessageAttemptOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1MessageAttemptListByMsgDeprecated(string $appId, string $msgId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageAttemptListByMsgDeprecated($appId, $msgId, $queryParameters), $fetch);
    }
    /**
     * `msg_id`: Use a message id or a message `eventId`
     *
     * @param string $appId The app's ID or UID
     * @param string $msgId The msg's ID or UID
     * @param string $attemptId The attempt's ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageAttemptOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1MessageAttemptGet(string $appId, string $msgId, string $attemptId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageAttemptGet($appId, $msgId, $attemptId), $fetch);
    }
    /**
     * Deletes the given attempt's response body. Useful when an endpoint accidentally returned sensitive content.
     *
     * @param string $appId The app's ID or UID
     * @param string $msgId The msg's ID or UID
     * @param string $attemptId The attempt's ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptExpungeContentTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1MessageAttemptExpungeContent(string $appId, string $msgId, string $attemptId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageAttemptExpungeContent($appId, $msgId, $attemptId), $fetch);
    }
    /**
     * Calculate and return headers used on a given message attempt
     *
     * @param string $appId The app's ID or UID
     * @param string $msgId The msg's ID or UID
     * @param string $attemptId The attempt's ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptGetHeadersTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageAttemptHeadersOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1MessageAttemptGetHeaders(string $appId, string $msgId, string $attemptId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageAttemptGetHeaders($appId, $msgId, $attemptId), $fetch);
    }
    /**
    * Delete the given message's payload. Useful in cases when a message was accidentally sent with sensitive content.
    
    The message can't be replayed or resent once its payload has been deleted or expired.
    *
    * @param string $appId The app's ID or UID
    * @param string $msgId The msg's ID or UID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1MessageExpungeContentBadRequestException
    * @throws \Svix\Internal\Exception\V1MessageExpungeContentUnauthorizedException
    * @throws \Svix\Internal\Exception\V1MessageExpungeContentForbiddenException
    * @throws \Svix\Internal\Exception\V1MessageExpungeContentNotFoundException
    * @throws \Svix\Internal\Exception\V1MessageExpungeContentConflictException
    * @throws \Svix\Internal\Exception\V1MessageExpungeContentUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1MessageExpungeContentTooManyRequestsException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function v1MessageExpungeContent(string $appId, string $msgId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageExpungeContent($appId, $msgId), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsBadRequestException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsUnauthorizedException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsForbiddenException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsNotFoundException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsConflictException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListAttemptedDestinationsTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\ListResponseMessageEndpointOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1MessageAttemptListAttemptedDestinations(string $appId, string $msgId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageAttemptListAttemptedDestinations($appId, $msgId, $queryParameters), $fetch);
    }
    /**
    * DEPRECATED: please use list_attempts with endpoint_id as a query parameter instead.
    
    List the message attempts for a particular endpoint.
    
    Returning the endpoint.
    
    The `before` parameter lets you filter all items created before a certain date and is ignored if an iterator is passed.
    
    Note that by default this endpoint is limited to retrieving 90 days' worth of data
    relative to now or, if an iterator is provided, 90 days before/after the time indicated
    by the iterator ID. If you require data beyond those time ranges, you will need to explicitly
    set the `before` or `after` parameter as appropriate.
    
    *
    * @param string $appId The app's ID or UID
    * @param string $msgId The msg's ID or UID
    * @param string $endpointId The ep's ID or UID
    * @param array $queryParameters {
    *     @var int $limit Limit the number of returned items
    *     @var string $iterator The iterator returned from a prior invocation
    *     @var string $channel Filter response based on the channel
    *     @var int $status Filter response based on the delivery status
    *     @var string $before Only include items created before a certain date
    *     @var string $after Only include items created after a certain date
    *     @var array $event_types Filter response based on the event type
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedBadRequestException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedUnauthorizedException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedForbiddenException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedNotFoundException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedConflictException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1MessageAttemptListByEndpointDeprecatedTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\ListResponseMessageAttemptEndpointOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1MessageAttemptListByEndpointDeprecated(string $appId, string $msgId, string $endpointId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageAttemptListByEndpointDeprecated($appId, $msgId, $endpointId, $queryParameters), $fetch);
    }
    /**
     * Resend a message to the specified endpoint.
     *
     * @param string $appId The app's ID or UID
     * @param string $msgId The msg's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendConflictException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageAttemptResendTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1MessageAttemptResend(string $appId, string $msgId, string $endpointId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageAttemptResend($appId, $msgId, $endpointId, $headerParameters), $fetch);
    }
    /**
     * Get a message raw payload by its ID or eventID.
     *
     * @param string $appId The app's ID or UID
     * @param string $msgId The msg's ID or UID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1MessageGetRawPayloadBadRequestException
     * @throws \Svix\Internal\Exception\V1MessageGetRawPayloadUnauthorizedException
     * @throws \Svix\Internal\Exception\V1MessageGetRawPayloadForbiddenException
     * @throws \Svix\Internal\Exception\V1MessageGetRawPayloadNotFoundException
     * @throws \Svix\Internal\Exception\V1MessageGetRawPayloadConflictException
     * @throws \Svix\Internal\Exception\V1MessageGetRawPayloadUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1MessageGetRawPayloadTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageRawPayloadOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1MessageGetRawPayload(string $appId, string $msgId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1MessageGetRawPayload($appId, $msgId), $fetch);
    }
    /**
     * Get basic statistics for the application
     *
     * @param string $appId The app's ID or UID
     * @param array $queryParameters {
     *     @var string $since Filter the range to data starting from this date
     *     @var string $until Filter the range to data ending by this date
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1ApplicationGetStatsBadRequestException
     * @throws \Svix\Internal\Exception\V1ApplicationGetStatsUnauthorizedException
     * @throws \Svix\Internal\Exception\V1ApplicationGetStatsForbiddenException
     * @throws \Svix\Internal\Exception\V1ApplicationGetStatsNotFoundException
     * @throws \Svix\Internal\Exception\V1ApplicationGetStatsConflictException
     * @throws \Svix\Internal\Exception\V1ApplicationGetStatsUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1ApplicationGetStatsTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ApplicationStats|\Psr\Http\Message\ResponseInterface
     */
    public function v1ApplicationGetStats(string $appId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1ApplicationGetStats($appId, $queryParameters), $fetch);
    }
    /**
     * Use this function to get magic links (and authentication codes) for connecting your users to the Consumer Application Portal.
     *
     * @param string $appId The app's ID or UID
     * @param \Svix\Internal\Model\AppPortalAccessIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1AuthenticationAppPortalAccessBadRequestException
     * @throws \Svix\Internal\Exception\V1AuthenticationAppPortalAccessUnauthorizedException
     * @throws \Svix\Internal\Exception\V1AuthenticationAppPortalAccessForbiddenException
     * @throws \Svix\Internal\Exception\V1AuthenticationAppPortalAccessNotFoundException
     * @throws \Svix\Internal\Exception\V1AuthenticationAppPortalAccessConflictException
     * @throws \Svix\Internal\Exception\V1AuthenticationAppPortalAccessUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1AuthenticationAppPortalAccessTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\AppPortalAccessOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1AuthenticationAppPortalAccess(string $appId, \Svix\Internal\Model\AppPortalAccessIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1AuthenticationAppPortalAccess($appId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Expire all of the tokens associated with a specific Application
     *
     * @param string $appId The app's ID or UID
     * @param \Svix\Internal\Model\ApplicationTokenExpireIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1AuthenticationExpireAllBadRequestException
     * @throws \Svix\Internal\Exception\V1AuthenticationExpireAllUnauthorizedException
     * @throws \Svix\Internal\Exception\V1AuthenticationExpireAllForbiddenException
     * @throws \Svix\Internal\Exception\V1AuthenticationExpireAllNotFoundException
     * @throws \Svix\Internal\Exception\V1AuthenticationExpireAllConflictException
     * @throws \Svix\Internal\Exception\V1AuthenticationExpireAllUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1AuthenticationExpireAllTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1AuthenticationExpireAll(string $appId, \Svix\Internal\Model\ApplicationTokenExpireIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1AuthenticationExpireAll($appId, $requestBody, $headerParameters), $fetch);
    }
    /**
    * DEPRECATED: Please use `app-portal-access` instead.
    
    Use this function to get magic links (and authentication codes) for connecting your users to the Consumer Application Portal.
    *
    * @param string $appId The app's ID or UID
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1AuthenticationDashboardAccessBadRequestException
    * @throws \Svix\Internal\Exception\V1AuthenticationDashboardAccessUnauthorizedException
    * @throws \Svix\Internal\Exception\V1AuthenticationDashboardAccessForbiddenException
    * @throws \Svix\Internal\Exception\V1AuthenticationDashboardAccessNotFoundException
    * @throws \Svix\Internal\Exception\V1AuthenticationDashboardAccessConflictException
    * @throws \Svix\Internal\Exception\V1AuthenticationDashboardAccessUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1AuthenticationDashboardAccessTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\DashboardAccessOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1AuthenticationDashboardAccess(string $appId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1AuthenticationDashboardAccess($appId, $headerParameters), $fetch);
    }
    /**
    * Logout an app token.
    
    Trying to log out other tokens will fail.
    *
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1AuthenticationLogoutBadRequestException
    * @throws \Svix\Internal\Exception\V1AuthenticationLogoutUnauthorizedException
    * @throws \Svix\Internal\Exception\V1AuthenticationLogoutForbiddenException
    * @throws \Svix\Internal\Exception\V1AuthenticationLogoutNotFoundException
    * @throws \Svix\Internal\Exception\V1AuthenticationLogoutConflictException
    * @throws \Svix\Internal\Exception\V1AuthenticationLogoutUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1AuthenticationLogoutTooManyRequestsException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function v1AuthenticationLogout(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1AuthenticationLogout($headerParameters), $fetch);
    }
    /**
     * This is a one time token
     *
     * @param \Svix\Internal\Model\OneTimeTokenIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1AuthenticationExchangeOneTimeTokenBadRequestException
     * @throws \Svix\Internal\Exception\V1AuthenticationExchangeOneTimeTokenUnauthorizedException
     * @throws \Svix\Internal\Exception\V1AuthenticationExchangeOneTimeTokenForbiddenException
     * @throws \Svix\Internal\Exception\V1AuthenticationExchangeOneTimeTokenNotFoundException
     * @throws \Svix\Internal\Exception\V1AuthenticationExchangeOneTimeTokenConflictException
     * @throws \Svix\Internal\Exception\V1AuthenticationExchangeOneTimeTokenUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1AuthenticationExchangeOneTimeTokenTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\OneTimeTokenOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1AuthenticationExchangeOneTimeToken(\Svix\Internal\Model\OneTimeTokenIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1AuthenticationExchangeOneTimeToken($requestBody, $headerParameters), $fetch);
    }
    /**
     * List background tasks executed in the past 90 days.
     *
     * @param array $queryParameters {
     *     @var string $status Filter the response based on the status
     *     @var string $task Filter the response based on the type
     *     @var int $limit Limit the number of returned items
     *     @var string $iterator The iterator returned from a prior invocation
     *     @var string $order The sorting order of the returned items
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\ListBackgroundTasksBadRequestException
     * @throws \Svix\Internal\Exception\ListBackgroundTasksUnauthorizedException
     * @throws \Svix\Internal\Exception\ListBackgroundTasksForbiddenException
     * @throws \Svix\Internal\Exception\ListBackgroundTasksNotFoundException
     * @throws \Svix\Internal\Exception\ListBackgroundTasksConflictException
     * @throws \Svix\Internal\Exception\ListBackgroundTasksUnprocessableEntityException
     * @throws \Svix\Internal\Exception\ListBackgroundTasksTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseBackgroundTaskOut|\Psr\Http\Message\ResponseInterface
     */
    public function listBackgroundTasks(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\ListBackgroundTasks($queryParameters), $fetch);
    }
    /**
     * Get a background task by ID.
     *
     * @param string $taskId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\GetBackgroundTaskBadRequestException
     * @throws \Svix\Internal\Exception\GetBackgroundTaskUnauthorizedException
     * @throws \Svix\Internal\Exception\GetBackgroundTaskForbiddenException
     * @throws \Svix\Internal\Exception\GetBackgroundTaskNotFoundException
     * @throws \Svix\Internal\Exception\GetBackgroundTaskConflictException
     * @throws \Svix\Internal\Exception\GetBackgroundTaskUnprocessableEntityException
     * @throws \Svix\Internal\Exception\GetBackgroundTaskTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\BackgroundTaskOut|\Psr\Http\Message\ResponseInterface
     */
    public function getBackgroundTask(string $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\GetBackgroundTask($taskId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EnvironmentExportGetBadRequestException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportGetForbiddenException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportGetNotFoundException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportGetConflictException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EnvironmentOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EnvironmentExportGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EnvironmentExportGet(), $fetch);
    }
    /**
     * Download a JSON file containing all org-settings and event types
     *
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EnvironmentExportBadRequestException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportForbiddenException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportNotFoundException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportConflictException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EnvironmentExportTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EnvironmentOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EnvironmentExport(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EnvironmentExport($headerParameters), $fetch);
    }
    /**
    * Import a configuration into the active organization.
    It doesn't delete anything, only adds/updates what was passed to it.
    *
    * @param \Svix\Internal\Model\EnvironmentIn $requestBody 
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1EnvironmentImportBadRequestException
    * @throws \Svix\Internal\Exception\V1EnvironmentImportUnauthorizedException
    * @throws \Svix\Internal\Exception\V1EnvironmentImportForbiddenException
    * @throws \Svix\Internal\Exception\V1EnvironmentImportNotFoundException
    * @throws \Svix\Internal\Exception\V1EnvironmentImportConflictException
    * @throws \Svix\Internal\Exception\V1EnvironmentImportUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1EnvironmentImportTooManyRequestsException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function v1EnvironmentImport(\Svix\Internal\Model\EnvironmentIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EnvironmentImport($requestBody, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EnvironmentGetSettingsBadRequestException
     * @throws \Svix\Internal\Exception\V1EnvironmentGetSettingsUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EnvironmentGetSettingsForbiddenException
     * @throws \Svix\Internal\Exception\V1EnvironmentGetSettingsNotFoundException
     * @throws \Svix\Internal\Exception\V1EnvironmentGetSettingsConflictException
     * @throws \Svix\Internal\Exception\V1EnvironmentGetSettingsUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EnvironmentGetSettingsTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EnvironmentSettingsOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EnvironmentGetSettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EnvironmentGetSettings(), $fetch);
    }
    /**
     * Return the list of event types.
     *
     * @param array $queryParameters {
     *     @var int $limit Limit the number of returned items
     *     @var string $iterator The iterator returned from a prior invocation
     *     @var string $order The sorting order of the returned items
     *     @var bool $include_archived When `true` archived (deleted but not expunged) items are included in the response
     *     @var bool $with_content When `true` the full item (including the schema) is included in the response
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EventTypeListBadRequestException
     * @throws \Svix\Internal\Exception\V1EventTypeListUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EventTypeListForbiddenException
     * @throws \Svix\Internal\Exception\V1EventTypeListNotFoundException
     * @throws \Svix\Internal\Exception\V1EventTypeListConflictException
     * @throws \Svix\Internal\Exception\V1EventTypeListUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EventTypeListTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseEventTypeOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EventTypeList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypeList($queryParameters), $fetch);
    }
    /**
    * Create new or unarchive existing event type.
    
    Unarchiving an event type will allow endpoints to filter on it and messages to be sent with it.
    Endpoints filtering on the event type before archival will continue to filter on it.
    This operation does not preserve the description and schemas.
    *
    * @param \Svix\Internal\Model\EventTypeIn $requestBody 
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1EventTypeCreateBadRequestException
    * @throws \Svix\Internal\Exception\V1EventTypeCreateUnauthorizedException
    * @throws \Svix\Internal\Exception\V1EventTypeCreateForbiddenException
    * @throws \Svix\Internal\Exception\V1EventTypeCreateNotFoundException
    * @throws \Svix\Internal\Exception\V1EventTypeCreateConflictException
    * @throws \Svix\Internal\Exception\V1EventTypeCreateUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1EventTypeCreateTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\EventTypeOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1EventTypeCreate(\Svix\Internal\Model\EventTypeIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypeCreate($requestBody, $headerParameters), $fetch);
    }
    /**
    * Exports event type definitions based on the OpenAPI schemas associated
    with each existing event type
    *
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1EventTypeExportOpenapiBadRequestException
    * @throws \Svix\Internal\Exception\V1EventTypeExportOpenapiUnauthorizedException
    * @throws \Svix\Internal\Exception\V1EventTypeExportOpenapiForbiddenException
    * @throws \Svix\Internal\Exception\V1EventTypeExportOpenapiNotFoundException
    * @throws \Svix\Internal\Exception\V1EventTypeExportOpenapiConflictException
    * @throws \Svix\Internal\Exception\V1EventTypeExportOpenapiUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1EventTypeExportOpenapiTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\ExportEventTypeOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1EventTypeExportOpenapi(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypeExportOpenapi($headerParameters), $fetch);
    }
    /**
    * Given an OpenAPI spec, create new or update existing event types.
    If an existing `archived` event type is updated, it will be unarchvied.
    
    The importer will convert all webhooks found in the either the `webhooks` or `x-webhooks`
    top-level.
    *
    * @param \Svix\Internal\Model\EventTypeImportOpenApiIn $requestBody 
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1EventTypeImportOpenapiBadRequestException
    * @throws \Svix\Internal\Exception\V1EventTypeImportOpenapiUnauthorizedException
    * @throws \Svix\Internal\Exception\V1EventTypeImportOpenapiForbiddenException
    * @throws \Svix\Internal\Exception\V1EventTypeImportOpenapiNotFoundException
    * @throws \Svix\Internal\Exception\V1EventTypeImportOpenapiConflictException
    * @throws \Svix\Internal\Exception\V1EventTypeImportOpenapiUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1EventTypeImportOpenapiTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\EventTypeImportOpenApiOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1EventTypeImportOpenapi(\Svix\Internal\Model\EventTypeImportOpenApiIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypeImportOpenapi($requestBody, $headerParameters), $fetch);
    }
    /**
     * Generates a fake example from the given JSONSchema
     *
     * @param \Svix\Internal\Model\EventTypeSchemaIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EventTypeGenerateExampleBadRequestException
     * @throws \Svix\Internal\Exception\V1EventTypeGenerateExampleUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EventTypeGenerateExampleForbiddenException
     * @throws \Svix\Internal\Exception\V1EventTypeGenerateExampleNotFoundException
     * @throws \Svix\Internal\Exception\V1EventTypeGenerateExampleConflictException
     * @throws \Svix\Internal\Exception\V1EventTypeGenerateExampleUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EventTypeGenerateExampleTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EventTypeExampleOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EventTypeGenerateExample(\Svix\Internal\Model\EventTypeSchemaIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypeGenerateExample($requestBody, $headerParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1EventTypeDeleteBadRequestException
    * @throws \Svix\Internal\Exception\V1EventTypeDeleteUnauthorizedException
    * @throws \Svix\Internal\Exception\V1EventTypeDeleteForbiddenException
    * @throws \Svix\Internal\Exception\V1EventTypeDeleteNotFoundException
    * @throws \Svix\Internal\Exception\V1EventTypeDeleteConflictException
    * @throws \Svix\Internal\Exception\V1EventTypeDeleteUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1EventTypeDeleteTooManyRequestsException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function v1EventTypeDelete(string $eventTypeName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypeDelete($eventTypeName, $queryParameters), $fetch);
    }
    /**
     * Get an event type.
     *
     * @param string $eventTypeName The event type's name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EventTypeGetBadRequestException
     * @throws \Svix\Internal\Exception\V1EventTypeGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EventTypeGetForbiddenException
     * @throws \Svix\Internal\Exception\V1EventTypeGetNotFoundException
     * @throws \Svix\Internal\Exception\V1EventTypeGetConflictException
     * @throws \Svix\Internal\Exception\V1EventTypeGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EventTypeGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EventTypeOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EventTypeGet(string $eventTypeName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypeGet($eventTypeName), $fetch);
    }
    /**
     * Partially update an event type.
     *
     * @param string $eventTypeName The event type's name
     * @param \Svix\Internal\Model\EventTypePatch $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EventTypePatchBadRequestException
     * @throws \Svix\Internal\Exception\V1EventTypePatchUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EventTypePatchForbiddenException
     * @throws \Svix\Internal\Exception\V1EventTypePatchNotFoundException
     * @throws \Svix\Internal\Exception\V1EventTypePatchConflictException
     * @throws \Svix\Internal\Exception\V1EventTypePatchUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EventTypePatchTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EventTypeOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EventTypePatch(string $eventTypeName, \Svix\Internal\Model\EventTypePatch $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypePatch($eventTypeName, $requestBody), $fetch);
    }
    /**
     * Update an event type.
     *
     * @param string $eventTypeName The event type's name
     * @param \Svix\Internal\Model\EventTypeUpdate $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateBadRequestException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateForbiddenException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateNotFoundException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateConflictException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\EventTypeOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EventTypeUpdate(string $eventTypeName, \Svix\Internal\Model\EventTypeUpdate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypeUpdate($eventTypeName, $requestBody), $fetch);
    }
    /**
     * Gets the retry schedule for messages using the given event type
     *
     * @param string $eventTypeName The event type's name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EventTypeGetRetryScheduleBadRequestException
     * @throws \Svix\Internal\Exception\V1EventTypeGetRetryScheduleUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EventTypeGetRetryScheduleForbiddenException
     * @throws \Svix\Internal\Exception\V1EventTypeGetRetryScheduleNotFoundException
     * @throws \Svix\Internal\Exception\V1EventTypeGetRetryScheduleConflictException
     * @throws \Svix\Internal\Exception\V1EventTypeGetRetryScheduleUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EventTypeGetRetryScheduleTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\RetryScheduleInOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EventTypeGetRetrySchedule(string $eventTypeName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypeGetRetrySchedule($eventTypeName), $fetch);
    }
    /**
     * Sets a retry schedule for all messages using the given event type
     *
     * @param string $eventTypeName The event type's name
     * @param \Svix\Internal\Model\RetryScheduleInOut $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateRetryScheduleBadRequestException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateRetryScheduleUnauthorizedException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateRetryScheduleForbiddenException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateRetryScheduleNotFoundException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateRetryScheduleConflictException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateRetryScheduleUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1EventTypeUpdateRetryScheduleTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\RetryScheduleInOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1EventTypeUpdateRetrySchedule(string $eventTypeName, \Svix\Internal\Model\RetryScheduleInOut $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1EventTypeUpdateRetrySchedule($eventTypeName, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1HealthGetBadRequestException
     * @throws \Svix\Internal\Exception\V1HealthGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1HealthGetForbiddenException
     * @throws \Svix\Internal\Exception\V1HealthGetNotFoundException
     * @throws \Svix\Internal\Exception\V1HealthGetConflictException
     * @throws \Svix\Internal\Exception\V1HealthGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1HealthGetTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1HealthGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1HealthGet(), $fetch);
    }
    /**
     * Creates a background task to send the same message to each application in your organization
     *
     * @param \Svix\Internal\Model\MessageBroadcastIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\CreateBroadcastMessageBadRequestException
     * @throws \Svix\Internal\Exception\CreateBroadcastMessageUnauthorizedException
     * @throws \Svix\Internal\Exception\CreateBroadcastMessageForbiddenException
     * @throws \Svix\Internal\Exception\CreateBroadcastMessageNotFoundException
     * @throws \Svix\Internal\Exception\CreateBroadcastMessageConflictException
     * @throws \Svix\Internal\Exception\CreateBroadcastMessageUnprocessableEntityException
     * @throws \Svix\Internal\Exception\CreateBroadcastMessageTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\MessageBroadcastOut|\Psr\Http\Message\ResponseInterface
     */
    public function createBroadcastMessage(\Svix\Internal\Model\MessageBroadcastIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\CreateBroadcastMessage($requestBody, $headerParameters), $fetch);
    }
    /**
     * Returns application-level statistics on message attempts
     *
     * @param string $appId The app's ID or UID
     * @param array $queryParameters {
     *     @var string $startDate Filter the range to data starting from this date
     *     @var string $endDate Filter the range to data ending by this date
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1StatsAppAttemptsBadRequestException
     * @throws \Svix\Internal\Exception\V1StatsAppAttemptsUnauthorizedException
     * @throws \Svix\Internal\Exception\V1StatsAppAttemptsForbiddenException
     * @throws \Svix\Internal\Exception\V1StatsAppAttemptsNotFoundException
     * @throws \Svix\Internal\Exception\V1StatsAppAttemptsConflictException
     * @throws \Svix\Internal\Exception\V1StatsAppAttemptsUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1StatsAppAttemptsTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\AttemptStatisticsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function v1StatsAppAttempts(string $appId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1StatsAppAttempts($appId, $queryParameters), $fetch);
    }
    /**
     * Returns endpoint-level statistics on message attempts
     *
     * @param string $appId The app's ID or UID
     * @param string $endpointId The ep's ID or UID
     * @param array $queryParameters {
     *     @var string $startDate Filter the range to data starting from this date
     *     @var string $endDate Filter the range to data ending by this date
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1StatsEndpointAttemptsBadRequestException
     * @throws \Svix\Internal\Exception\V1StatsEndpointAttemptsUnauthorizedException
     * @throws \Svix\Internal\Exception\V1StatsEndpointAttemptsForbiddenException
     * @throws \Svix\Internal\Exception\V1StatsEndpointAttemptsNotFoundException
     * @throws \Svix\Internal\Exception\V1StatsEndpointAttemptsConflictException
     * @throws \Svix\Internal\Exception\V1StatsEndpointAttemptsUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1StatsEndpointAttemptsTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\AttemptStatisticsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function v1StatsEndpointAttempts(string $appId, string $endpointId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1StatsEndpointAttempts($appId, $endpointId, $queryParameters), $fetch);
    }
    /**
    * Creates a background task to calculate the message destinations for all applications in the environment.
    
    Note that this endpoint is asynchronous. You will need to poll the `Get Background Task` endpoint to
    retrieve the results of the operation.
    *
    * @param \Svix\Internal\Model\AppUsageStatsIn $requestBody 
    * @param array $headerParameters {
    *     @var string $idempotency-key The request's idempotency key
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Svix\Internal\Exception\V1StatisticsAggregateAppStatsBadRequestException
    * @throws \Svix\Internal\Exception\V1StatisticsAggregateAppStatsUnauthorizedException
    * @throws \Svix\Internal\Exception\V1StatisticsAggregateAppStatsForbiddenException
    * @throws \Svix\Internal\Exception\V1StatisticsAggregateAppStatsNotFoundException
    * @throws \Svix\Internal\Exception\V1StatisticsAggregateAppStatsConflictException
    * @throws \Svix\Internal\Exception\V1StatisticsAggregateAppStatsUnprocessableEntityException
    * @throws \Svix\Internal\Exception\V1StatisticsAggregateAppStatsTooManyRequestsException
    *
    * @return null|\Svix\Internal\Model\AppUsageStatsOut|\Psr\Http\Message\ResponseInterface
    */
    public function v1StatisticsAggregateAppStats(\Svix\Internal\Model\AppUsageStatsIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1StatisticsAggregateAppStats($requestBody, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesBadRequestException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesUnauthorizedException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesForbiddenException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesNotFoundException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesConflictException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1StatisticsAggregateEventTypesTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\AggregateEventTypesOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1StatisticsAggregateEventTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1StatisticsAggregateEventTypes(), $fetch);
    }
    /**
     * List all transformation templates for an application
     *
     * @param array $queryParameters {
     *     @var int $limit Limit the number of returned items
     *     @var string $iterator The iterator returned from a prior invocation
     *     @var string $order The sorting order of the returned items
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1TransformationTemplateListBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateListUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateListForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateListNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateListConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateListUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateListTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\ListResponseTemplateOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1TransformationTemplateList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1TransformationTemplateList($queryParameters), $fetch);
    }
    /**
     * Create a new transformation template
     *
     * @param \Svix\Internal\Model\TemplateIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1TransformationTemplateCreateBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateCreateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateCreateForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateCreateNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateCreateConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateCreateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateCreateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\TemplateOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1TransformationTemplateCreate(\Svix\Internal\Model\TemplateIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1TransformationTemplateCreate($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use OpenAI's Completion API to generate code for a transformation template
     *
     * @param \Svix\Internal\Model\GenerateIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\GenerateOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1TransformationTemplateGenerate(\Svix\Internal\Model\GenerateIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1TransformationTemplateGenerate($requestBody, $headerParameters), $fetch);
    }
    /**
     * Get Discord Incoming webhook URL
     *
     * @param \Svix\Internal\Model\OauthPayloadIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthDiscordBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthDiscordUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthDiscordForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthDiscordNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthDiscordConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthDiscordUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthDiscordTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\OauthPayloadOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1TransformationTemplateOauthDiscord(\Svix\Internal\Model\OauthPayloadIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1TransformationTemplateOauthDiscord($requestBody, $headerParameters), $fetch);
    }
    /**
     * Get Slack Incoming webhook URL
     *
     * @param \Svix\Internal\Model\OauthPayloadIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthSlackBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthSlackUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthSlackForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthSlackNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthSlackConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthSlackUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateOauthSlackTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\OauthPayloadOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1TransformationTemplateOauthSlack(\Svix\Internal\Model\OauthPayloadIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1TransformationTemplateOauthSlack($requestBody, $headerParameters), $fetch);
    }
    /**
     * Simulate running the transformation on the payload and code
     *
     * @param \Svix\Internal\Model\TransformationSimulateIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1TransformationTemplateSimulateBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateSimulateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateSimulateForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateSimulateNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateSimulateConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateSimulateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateSimulateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\TransformationSimulateOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1TransformationTemplateSimulate(\Svix\Internal\Model\TransformationSimulateIn $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1TransformationTemplateSimulate($requestBody, $headerParameters), $fetch);
    }
    /**
     * Delete a transformation template
     *
     * @param string $transformationTemplateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1TransformationTemplateDeleteBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateDeleteUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateDeleteForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateDeleteNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateDeleteConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateDeleteUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateDeleteTooManyRequestsException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function v1TransformationTemplateDelete(string $transformationTemplateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1TransformationTemplateDelete($transformationTemplateId), $fetch);
    }
    /**
     * Get a transformation template
     *
     * @param string $transformationTemplateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGetBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGetUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGetForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGetNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGetConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGetUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGetTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\TemplateOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1TransformationTemplateGet(string $transformationTemplateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1TransformationTemplateGet($transformationTemplateId), $fetch);
    }
    /**
     * Partially update a transformation template
     *
     * @param string $transformationTemplateId 
     * @param \Svix\Internal\Model\TemplatePatch $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1TransformationTemplatePatchBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplatePatchUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplatePatchForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplatePatchNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplatePatchConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplatePatchUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplatePatchTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\TemplateOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1TransformationTemplatePatch(string $transformationTemplateId, \Svix\Internal\Model\TemplatePatch $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1TransformationTemplatePatch($transformationTemplateId, $requestBody), $fetch);
    }
    /**
     * Update a transformation template
     *
     * @param string $transformationTemplateId 
     * @param \Svix\Internal\Model\TemplateUpdate $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Svix\Internal\Exception\V1TransformationTemplateUpdateBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateUpdateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateUpdateForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateUpdateNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateUpdateConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateUpdateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateUpdateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\TemplateOut|\Psr\Http\Message\ResponseInterface
     */
    public function v1TransformationTemplateUpdate(string $transformationTemplateId, \Svix\Internal\Model\TemplateUpdate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Svix\Internal\Endpoint\V1TransformationTemplateUpdate($transformationTemplateId, $requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.eu.svix.com/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Svix\Internal\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}