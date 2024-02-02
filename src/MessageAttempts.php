<?php

namespace Svix;

use DateTimeInterface;
use JetBrains\PhpStorm\ArrayShape;
use Svix\BaseApi\EndpointsGroup;
use Svix\Internal\Model\ListResponseEndpointMessageOut;
use Svix\Internal\Model\ListResponseMessageAttemptEndpointOut;
use Svix\Internal\Model\ListResponseMessageAttemptOut;
use Svix\Internal\Model\ListResponseMessageEndpointOut;

/**
 * Attempts to deliver `Messages` to `Endpoints`.
 */
readonly class MessageAttempts extends EndpointsGroup
{
    /**
     * List attempts by endpoint ID.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param array{
     *     limit?: int,
     *     iterator?: string,
     *     status?: int,
     *     status_code_class?: int,
     *     channel?: string,
     *     before?: DateTimeInterface,
     *     after?: DateTimeInterface,
     *     with_content?: bool,
     *     event_types?: string[],
     * } $options
     *
     * @return ListResponseMessageAttemptOut
     */
    public function listByEndpoint(
        string $appID,
        string $endpointID,
        array  $options = [],
    ): ListResponseMessageAttemptOut
    {
        return $this->client->v1MessageAttemptListByEndpoint(
            $appID,
            $endpointID,
            queryParameters: $options,
        );
    }

    /**
     * List attempts by message ID.
     *
     * @param string $appID The app's ID or UID
     * @param string $messageID Message's ID or UID
     * @param array{
     *      limit?: int,
     *      iterator?: string,
     *      status?: int,
     *      status_code_class?: int,
     *      channel?: string,
     *      endpoint_id?: string,
     *      before?: DateTimeInterface,
     *      after?: DateTimeInterface,
     *      with_content?: bool,
     *      event_types?: string[],
     *  } $options
     *
     * @return ListResponseMessageAttemptOut
     */
    public function listByMessage(
        string $appID,
        string $messageID,
        array  $options = [],
    ): ListResponseMessageAttemptOut
    {
        return $this->client->v1MessageAttemptListByMsg(
            $appID,
            $messageID,
            queryParameters: $options,
        );
    }

    /**
     * List messages for a particular endpoint. Additionally includes metadata about the latest message attempt.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param array{
     *      limit?: int,
     *      iterator?: string,
     *      status?: int,
     *      channel?: string,
     *      before?: DateTimeInterface,
     *      after?: DateTimeInterface,
     *      with_content?: bool,
     *      event_types?: string[],
     *  } $options
     *
     * @return ListResponseEndpointMessageOut
     */
    public function listAttemptedMessages(
        string $appID,
        string $endpointID,
        array  $options = [],
    ): ListResponseEndpointMessageOut
    {
        return $this->client->v1MessageAttemptListAttemptedMessages(
            $appID,
            $endpointID,
            queryParameters: $options,
        );
    }

    /**
     * List endpoints attempted by a given message. Additionally, includes metadata about the latest message attempt.
     * By default, endpoints are listed in ascending order by ID.
     *
     * @param string $appID The app's ID or UID
     * @param string $messageID Message's ID or UID
     * @param array{
     *     limit?: int,
     *     iterator?: string,
     * } $options
     *
     * @return ListResponseMessageEndpointOut
     */
    public function listAttemptedDestinations(
        string $appID,
        string $messageID,
        array  $options = [],
    ): ListResponseMessageEndpointOut
    {
        return $this->client->v1MessageAttemptListAttemptedDestinations(
            $appID,
            $messageID,
            queryParameters: $options,
        );
    }

    /**
     * [DEPRECATED] List the attempts for a particular message.
     *
     * @param string $appID The app's ID or UID
     * @param string $messageID Message's ID or UID
     * @param array{
     *     limit?: int,
     *     iterator?: string,
     *     endpoint_id?: string,
     *     status?: int,
     *     status_code_class?: int,
     *     channel?: string,
     *     before?: DateTimeInterface,
     *     after?: DateTimeInterface,
     *     event_type?: string[],
     * } $options
     *
     * @return ListResponseMessageAttemptOut
     *
     * @deprecated please use `listByMessage()`
     */
    public function listByMessageDeprecated(
        string $appID,
        string $messageID,
        array  $options = [],
    ): ListResponseMessageAttemptOut
    {
        return $this->client->v1MessageAttemptListByMsgDeprecated(
            $appID,
            $messageID,
            queryParameters: $options,
        );
    }

    /**
     * [DEPRECATED] List the message attempts for a particular endpoint.
     *
     * @param string $appID The app's ID or UID
     * @param string $messageID Message's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param array{
     *      limit?: int,
     *      iterator?: string,
     *      status?: int,
     *      channel?: string,
     *      before?: DateTimeInterface,
     *      after?: DateTimeInterface,
     *      event_type?: string[],
     *  } $options
     *
     * @return ListResponseMessageAttemptEndpointOut
     *
     * @deprecated please use `listByEndpoint()`
     **/
    public function listByEndpointDeprecated(
        string $appID,
        string $messageID,
        string $endpointID,
        array  $options = [],
    ): ListResponseMessageAttemptEndpointOut
    {
        return $this->client->v1MessageAttemptListByEndpointDeprecated(
            $appID,
            $messageID,
            $endpointID,
            queryParameters: $options,
        );
    }

    /**
     * Deletes the given attempt's response body. Useful when an endpoint accidentally returned sensitive content.
     *
     * @param string $appID The app's ID or UID
     * @param string $messageID Message's ID or UID
     * @param string $attemptID Attempt's ID
     * @return void
     */
    public function expungeContent(string $appID, string $messageID, string $attemptID): void
    {
        $this->client->v1MessageAttemptExpungeContent($appID, $messageID, $attemptID);
    }

    /**
     * Resend a message to the specified endpoint.
     *
     * @param string $appID The app's ID or UID
     * @param string $messageID Message's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @return void
     */
    public function resend(
        string $appID,
        string $messageID,
        string $endpointID,
    ): void
    {
        $this->client->v1MessageAttemptResend($appID, $messageID, $endpointID);
    }
}
