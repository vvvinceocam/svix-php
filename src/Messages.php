<?php

namespace Svix;

use JetBrains\PhpStorm\ArrayShape;
use Svix\BaseApi\EndpointsGroup;
use Svix\Internal\Model\ListResponseMessageOut;
use Svix\Internal\Model\MessageIn;
use Svix\Internal\Model\MessageOut;

/**
 * Messages are the webhook events being sent.
 */
readonly class Messages extends EndpointsGroup
{
    /**
     * List all the application's messages.
     *
     * @param string $appID The app's ID or UID
     * @param array $options
     * @return ListResponseMessageOut
     */
    public function list(
        string    $appID,
        #[ArrayShape([
            'limit' => '?int',
            'iterator' => '?string',
            'channel' => '?string',
            'before' => '?DateTimeInterface',
            'after' => '?DateTimeInterface',
            'with_content' => '?bool',
            'event_types' => '?[]string',
        ])] array $options = []
    ): ListResponseMessageOut
    {
        return $this->client->v1MessageList($appID, $options);
    }

    /**
     * Creates a new message and dispatches it to all the application's endpoints.
     *
     * @param string $appID The app's ID or UID
     * @param MessageIn $message
     * @return MessageOut
     */
    public function create(
        string    $appID,
        MessageIn $message,
        ?bool     $withContent = null,
        ?string   $idempotencyKey = null,
    ): MessageOut
    {
        $queryParameters = match ($withContent) {
            true, false => ['with_content' => $withContent],
            null => [],
        };
        $headerParameters = match ($idempotencyKey) {
            null => [],
            default => ['idempotency-key' => $idempotencyKey],
        };

        return $this->client->v1MessageCreate(
            $appID,
            $message,
            queryParameters: $queryParameters,
            headerParameters: $headerParameters,
        );
    }

    /**
     * Get a message by its ID or eventID.
     *
     * @param string $appID The app's ID or UID
     * @param string $msgID The msg's ID or UID
     * @return MessageOut
     */
    public function get(string $appID, string $msgID, ?bool $withContent = null): MessageOut
    {
        $queryParameters = match ($withContent) {
            true, false => ['with_content' => $withContent],
            null => [],
        };
        return $this->client->v1MessageGet($appID, $msgID, $queryParameters);
    }

    /**
     * Delete the given message's payload. Useful in cases when a message was accidentally sent with sensitive content.
     *
     * The message can't be replayed or resent once its payload has been deleted or expired.
     *
     * @param string $appID The app's ID or UID
     * @param string $msgID The msg's ID or UID
     * @return void
     */
    public function deletePayload(string $appID, string $msgID): void
    {
        $this->client->v1MessageExpungeContent($appID, $msgID);
    }
}