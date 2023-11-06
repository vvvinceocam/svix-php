<?php

namespace Svix;

use DateTimeInterface;
use JetBrains\PhpStorm\ArrayShape;
use Svix\BaseApi\EndpointsGroup;
use Svix\Internal\Model\EndpointHeadersIn;
use Svix\Internal\Model\EndpointHeadersOut;
use Svix\Internal\Model\EndpointHeadersPatchIn;
use Svix\Internal\Model\EndpointIn;
use Svix\Internal\Model\EndpointOut;
use Svix\Internal\Model\EndpointPatch;
use Svix\Internal\Model\EndpointSecretOut;
use Svix\Internal\Model\EndpointSecretRotateIn;
use Svix\Internal\Model\EndpointStats;
use Svix\Internal\Model\EndpointTransformationIn;
use Svix\Internal\Model\EndpointTransformationOut;
use Svix\Internal\Model\EndpointUpdate;
use Svix\Internal\Model\EventExampleIn;
use Svix\Internal\Model\ListResponseEndpointOut;
use Svix\Internal\Model\MessageOut;
use Svix\Internal\Model\RecoverIn;
use Svix\Internal\Model\RecoverOut;
use Svix\Internal\Model\ReplayIn;
use Svix\Internal\Model\ReplayOut;

/**
 * Endpoints are the URLs messages will be sent to. Each application can have multiple endpoints and each message sent
 * to that application will be sent to all of them (unless they are not subscribed to the sent event type).
 */
readonly class Endpoints extends EndpointsGroup
{
    /**
     * List the application's endpoints.
     *
     * @param string $appID The app's ID or UID
     * @param array $options Ordering, filtering, and pagination options
     * @return ListResponseEndpointOut
     */
    public function list(
        string    $appID,
        #[ArrayShape([
            'limit' => 'int',
            'iterator' => '?string',
            'order' => '?string',
        ])] array $options,
    ): ListResponseEndpointOut
    {
        return $this->client->v1EndpointList($appID, $options);
    }

    /**
     * Create a new endpoint for the application.
     *
     * @param string $appID The app's ID or UID
     * @param EndpointIn $endpointIn
     * @param string|null $idempotencyKey
     * @return EndpointOut
     */
    public function create(string $appID, EndpointIn $endpointIn, ?string $idempotencyKey = null): EndpointOut
    {
        return $this->client->v1EndpointCreate(
            $appID,
            $endpointIn,
            ['idempotency-key' => $idempotencyKey],
        );
    }

    /**
     * Get an endpoint.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @return EndpointOut
     */
    public function get(string $appID, string $endpointID): EndpointOut
    {
        return $this->client->v1EndpointGet($appID, $endpointID);
    }

    /**
     * Update an endpoint.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param EndpointUpdate $endpointIn
     * @return EndpointOut
     */
    public function update(string $appID, string $endpointID, EndpointUpdate $endpointIn): EndpointOut
    {
        return $this->client->v1EndpointUpdate(
            $appID,
            $endpointID,
            $endpointIn,
        );
    }

    /**
     * Partially update an endpoint.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param EndpointPatch $endpointIn
     * @return EndpointOut
     */
    public function patch(string $appID, string $endpointID, EndpointPatch $endpointIn): EndpointOut
    {
        return $this->client->v1EndpointPatch(
            $appID,
            $endpointID,
            $endpointIn,
        );
    }

    /**
     * Delete an endpoint.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @return void
     */
    public function delete(string $appID, string $endpointID): void
    {
        $this->client->v1EndpointDelete($appID, $endpointID);
    }

    /**
     * Get the endpoint's signing secret.
     *
     * This is used to verify the authenticity of the webhook.
     * For more information please refer to the consuming webhooks docs.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @return EndpointSecretOut
     */
    public function getSecret(string $appID, string $endpointID): EndpointSecretOut
    {
        return $this->client->v1EndpointGetSecret($appID, $endpointID);
    }

    /**
     * Rotates the endpoint's signing secret. The previous secret will be valid for the next 24 hours.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param EndpointSecretRotateIn $secretRotateIn
     * @param string|null $idempotencyKey
     * @return void
     */
    public function rotateSecret(
        string                 $appID,
        string                 $endpointID,
        EndpointSecretRotateIn $secretRotateIn,
        ?string                $idempotencyKey = null,
    ): void
    {
        $this->client->v1EndpointRotateSecret(
            $appID,
            $endpointID,
            $secretRotateIn,
            headerParameters: ['idempotency-key' => $idempotencyKey],
        );
    }

    /**
     * Get basic statistics for the endpoint.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param DateTimeInterface|null $since
     * @param DateTimeInterface|null $until
     * @return EndpointStats
     */
    public function stats(
        string             $appID,
        string             $endpointID,
        ?DateTimeInterface $since = null,
        ?DateTimeInterface $until = null,
    ): EndpointStats
    {
        return $this->client->v1EndpointGetStats(
            $appID,
            $endpointID,
            queryParameters: ['since' => $since, 'until' => $until],
        );
    }

    /**
     * Resend all failed messages since a given time.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param RecoverIn $recoverIn
     * @param string|null $idempotencyKey
     * @return RecoverOut
     */
    public function recover(
        string    $appID,
        string    $endpointID,
        RecoverIn $recoverIn,
        ?string   $idempotencyKey = null,
    ): RecoverOut
    {
        return $this->client->v1EndpointRecover(
            $appID,
            $endpointID,
            $recoverIn,
            headerParameters: ['idempotency-key' => $idempotencyKey],
        );
    }

    /**
     * Replays messages to the endpoint. Only messages that were created after `since` will be sent.
     * Messages that were previously sent to the endpoint are not resent.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param ReplayIn $replayIn
     * @param string|null $idempotencyKey
     * @return ReplayOut
     */
    public function replay(
        string   $appID,
        string   $endpointID,
        ReplayIn $replayIn,
        ?string  $idempotencyKey = null,
    ): ReplayOut
    {
        return $this->client->v1EndpointReplay(
            $appID,
            $endpointID,
            $replayIn,
            headerParameters: ['idempotency-key' => $idempotencyKey],
        );
    }

    /**
     * Get the additional headers to be sent with the webhook.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @return EndpointHeadersOut
     */
    public function getHeaders(string $appID, string $endpointID): EndpointHeadersOut
    {
        return $this->client->v1EndpointGetHeaders($appID, $endpointID);
    }

    /**
     * Set the additional headers to be sent with the webhook.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param EndpointHeadersIn $headers
     * @return void
     */
    public function updateHeaders(string $appID, string $endpointID, EndpointHeadersIn $headers): void
    {
        $this->client->v1EndpointUpdateHeaders($appID, $endpointID, $headers);
    }

    /**
     * Partially set the additional headers to be sent with the webhook.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param EndpointHeadersPatchIn $headers
     * @return void
     */
    public function patchHeaders(string $appID, string $endpointID, EndpointHeadersPatchIn $headers): void
    {
        $this->client->v1EndpointPatchHeaders($appID, $endpointID, $headers);
    }

    /**
     * Get the transformation code associated with this endpoint.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @return EndpointTransformationOut
     */
    public function getTransformation(string $appID, string $endpointID): EndpointTransformationOut
    {
        return $this->client->v1EndpointTransformationGet($appID, $endpointID);
    }

    /**
     * Set or unset the transformation code associated with this endpoint
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param EndpointTransformationIn $transformation
     * @return void
     */
    public function setTransformation(string $appID, string $endpointID, EndpointTransformationIn $transformation): void
    {
        $this->client->v1EndpointTransformationPartialUpdate($appID, $endpointID, $transformation);
    }

    /**
     * Send an example message for event.
     *
     * @param string $appID The app's ID or UID
     * @param string $endpointID Endpoint's ID or UID
     * @param EventExampleIn $event
     * @param string|null $idempotencyKey
     * @return MessageOut
     */
    public function sendExample(
        string         $appID,
        string         $endpointID,
        EventExampleIn $event,
        ?string        $idempotencyKey = null,
    ): MessageOut
    {
        return $this->client->v1EndpointSendExample(
            $appID,
            $endpointID,
            $event,
            headerParameters: ['idempotency-key' => $idempotencyKey],
        );
    }
}