<?php

namespace Svix;

use Svix\BaseApi\EndpointsGroup;
use Svix\Internal\Model\ApplicationTokenExpireIn;
use Svix\Internal\Model\AppPortalAccessIn;
use Svix\Internal\Model\AppPortalAccessOut;
use Svix\Internal\Model\DashboardAccessOut;

/**
 * Easily give your users access to our pre-built management UI. Available only on cloud service.
 */
readonly class Authentication extends EndpointsGroup
{
    /**
     * Use this function to get magic links (and authentication codes) for connecting your users
     * to the Consumer Application Portal.
     *
     * @param string $appID Application's ID or UID
     * @param AppPortalAccessIn $access
     * @return AppPortalAccessOut
     */
    public function appPortalAccess(string $appID, AppPortalAccessIn $access): AppPortalAccessOut
    {
        return $this->client->v1AuthenticationAppPortalAccess($appID, $access);
    }

    /**
     * [DEPRECATED] Use this function to get magic links (and authentication codes) for connecting your users
     * to the Consumer Application Portal.
     *
     * @param string $appID Application's ID or UID
     * @return DashboardAccessOut
     *
     * @deprecated Please use `appPortalAccess()` instead.
     */
    public function dashboardAccess(string $appID): DashboardAccessOut
    {
        return $this->client->v1AuthenticationDashboardAccess($appID);
    }

    /**
     * Logout an app token. Trying to log out other tokens will fail.
     *
     * @param string|null $idempotencyKey
     * @return void
     */
    public function logout(?string $idempotencyKey = null): void
    {
        $this->client->v1AuthenticationLogout(
            headerParameters: ['idempotency-key' => $idempotencyKey],
        );
    }

    /**
     * Expire all of the tokens associated with a specific Application.
     *
     * @param string $appID Application's ID or UID
     * @param ApplicationTokenExpireIn $expire
     * @param string|null $idempotencyKey
     * @return void
     */
    public function expireAll(string $appID, ApplicationTokenExpireIn $expire, ?string $idempotencyKey = null): void
    {
        $this->client->v1AuthenticationExpireAll(
            $appID,
            $expire,
            headerParameters: ['idempotency-key' => $idempotencyKey],
        );
    }
}