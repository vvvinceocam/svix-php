<?php

namespace Svix;

use JetBrains\PhpStorm\ArrayShape;
use Svix\BaseApi\EndpointsGroup;
use Svix\Internal\Model\IntegrationIn;
use Svix\Internal\Model\IntegrationKeyOut;
use Svix\Internal\Model\IntegrationOut;
use Svix\Internal\Model\IntegrationUpdate;
use Svix\Internal\Model\ListResponseIntegrationOut;

/**
 * Integrations are services your users connect an application to.
 * An integration can manage the application and its endpoints.
 */
readonly class Integration extends EndpointsGroup
{
    /**
     * List the application's integrations.
     *
     * @param string $appID The app's ID or UID
     * @param array $options
     * @return ListResponseIntegrationOut
     */
    public function list(
        string $appID,
        #[ArrayShape([
            'limit' => '?int',
            'iterator' => '?string',
        ])] array $options,
    ): ListResponseIntegrationOut
    {
        $this->client->v1IntegrationList(
            $appID,
            queryParameters: $options,
        );
    }

    /**
     * Create an integration.
     *
     * @param string $appID The app's ID or UID
     * @param IntegrationIn $integration
     * @param string|null $idempotencyKey
     * @return IntegrationOut
     */
    public function create(string $appID, IntegrationIn $integration, ?string $idempotencyKey = null): IntegrationOut
    {
        return $this->client->v1IntegrationCreate(
            $appID,
            $integration,
            headerParameters: ['idempotency-key' => $idempotencyKey],
        );
    }

    /**
     * Get an integration.
     *
     * @param string $appID The app's ID or UID
     * @param string $integrationID
     * @return IntegrationOut
     */
    public function get(string $appID, string $integrationID): IntegrationOut
    {
        return $this->client->v1IntegrationGet($appID, $integrationID);
    }

    /**
     * Update an integration.
     *
     * @param string $appID The app's ID or UID
     * @param string $integrationID
     * @param IntegrationUpdate $integration
     * @return IntegrationOut
     */
    public function update(
        string $appID,
        string $integrationID,
        IntegrationUpdate $integration,
    ): IntegrationOut
    {
        return $this->client->v1IntegrationUpdate(
            $appID,
            $integrationID,
            $integration,
        );
    }

    /**
     * Delete an integration.
     *
     * @param string $appID The app's ID or UID
     * @param string $integrationID
     * @return void
     */
    public function delete(string $appID, string $integrationID)
    {
        $this->client->v1IntegrationDelete($appID, $integrationID);
    }

    /**
     * Get an integration's key.
     *
     * @param string $appID The app's ID or UID
     * @param string $integrationID
     * @return IntegrationKeyOut
     */
    public function getKey(string $appID, string $integrationID): IntegrationKeyOut
    {
        return $this->client->v1IntegrationGetKey($appID, $integrationID);
    }

    /**
     * Rotate the integration's key. The previous key will be immediately revoked.
     *
     * @param string $appID The app's ID or UID
     * @param string $integrationID
     * @param string|null $idempotencyKey
     * @return IntegrationKeyOut
     */
    public function rotateKey(string $appID, string $integrationID, ?string $idempotencyKey = null): IntegrationKeyOut
    {
        return $this->client->v1IntegrationRotateKey(
            $appID,
            $integrationID,
            headerParameters: ['idempotency-key' => $idempotencyKey],
        );
    }
}