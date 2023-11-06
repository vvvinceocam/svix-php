<?php

namespace Svix;

use JetBrains\PhpStorm\ArrayShape;
use Svix\BaseApi\EndpointsGroup;
use Svix\Internal\Model\EventTypeImportOpenApiIn;
use Svix\Internal\Model\EventTypeImportOpenApiOut;
use Svix\Internal\Model\EventTypeIn;
use Svix\Internal\Model\EventTypeOut;
use Svix\Internal\Model\EventTypePatch;
use Svix\Internal\Model\EventTypeUpdate;
use Svix\Internal\Model\ListResponseEventTypeOut;

/**
 * Event types are identifiers denoting the type of message being sent.
 * Event types are primarily used to decide which events are sent to which endpoint.
 */
readonly class EventTypes extends EndpointsGroup
{
    /**
     * Return the list of event types.
     *
     * @param array $options
     * @return ListResponseEventTypeOut
     */
    public function list(
        #[ArrayShape([
            'limit' => '?int',
            'iterator' => '?string',
            'order' => '?string',
            'include_archived' => 'bool',
            'with_content' => 'bool',
        ])] array $options,
    ): ListResponseEventTypeOut
    {
        $this->client->v1EventTypeList(
            queryParameters: $options,
        );
    }

    /**
     * Create new or unarchive existing event type.
     *
     * @param EventTypeIn $eventType
     * @param string|null $idempotencyKey
     * @return EventTypeOut
     */
    public function create(EventTypeIn $eventType, ?string $idempotencyKey = null): EventTypeOut
    {
        return $this->client->v1EventTypeCreate(
            $eventType,
            headerParameters: ['idempotency-key' => $idempotencyKey],
        );
    }

    /**
     * Given an OpenAPI spec, create new or update existing event types. If an existing archived event type is updated,
     * it will be unarchvied.
     *
     * The importer will convert all webhooks found in the either the webhooks or x-webhooks top-level.
     *
     * @param EventTypeImportOpenApiIn $openapi
     * @param string|null $idempotencyKey
     * @return EventTypeImportOpenApiOut
     */
    public function importOpenAPI(
        EventTypeImportOpenApiIn $openapi,
        ?string $idempotencyKey = null,
    ): EventTypeImportOpenApiOut
    {
        return $this->client->v1EventTypeImportOpenapi(
            $openapi,
            headerParameters: ['idempotency-key' => $idempotencyKey],
        );
    }

    /**
     * Get an event type.
     *
     * @param string $eventTypeName
     * @return EventTypeOut
     */
    public function get(string $eventTypeName, EventTypeIn $eventType): EventTypeOut
    {
        return $this->client->v1EventTypeGet($eventTypeName);
    }

    /**
     * Update an event type.
     *
     * @param string $eventTypeName
     * @param EventTypeUpdate $eventType
     * @return EventTypeOut
     */
    public function update(string $eventTypeName, EventTypeUpdate $eventType): EventTypeOut
    {
        return $this->client->v1EventTypeUpdate($eventTypeName, $eventType);
    }

    /**
     * Partially update an event type.
     *
     * @param string $eventTypeName
     * @param EventTypePatch $eventType
     * @return EventTypeOut
     */
    public function patch(string $eventTypeName, EventTypePatch $eventType): EventTypeOut
    {
        return $this->client->v1EventTypePatch($eventTypeName, $eventType);
    }

    /**
     * Archive an event type.
     *
     * Endpoints already configured to filter on an event type will continue to do so after archival.
     * However, new messages can not be sent with it and endpoints can not filter on it.
     * An event type can be unarchived with the create operation.
     *
     * @param string $eventTypeName
     * @param bool $expunge
     * @return void
     */
    public function delete(string $eventTypeName, bool $expunge = false): void
    {
        $this->client->v1EventTypeDelete(
            $eventTypeName,
            queryParameters: ['expunge' => $expunge],
        );
    }
}