<?php

namespace Svix;

use Svix\Internal\Client;
use Svix\Internal\Model\ApplicationIn;
use Svix\Internal\Model\ApplicationOut;
use Svix\Internal\Model\ApplicationPatch;
use Svix\Internal\Model\ListResponseApplicationOut;

/**
 * Consumer Applications are where messages are sent to. In most cases you would want
 * to have one application for each of your users.
 */
readonly class Applications extends EndpointsGroup
{
    /**
     * List of all the organization's applications.
     *
     * @return ListResponseApplicationOut|null
     */
    public function list(): ?ListResponseApplicationOut
    {
        return $this->client->v1ApplicationList();
    }

    /**
     * Get an application.
     *
     * @param string $appID Application id or uid
     * @return ApplicationOut|null
     */
    public function get(string $appID): ?ApplicationOut
    {
        return $this->client->v1ApplicationGet($appID);
    }

    /**
     * Create a new application.
     *
     * @param ApplicationIn $applicationIn
     * @return ApplicationOut|null
     */
    public function create(ApplicationIn $applicationIn): ?ApplicationOut
    {
        return $this->client->v1ApplicationCreate($applicationIn);
    }

    /**
     * Delete an application.
     *
     * @param string $appID Application id or uid
     * @return null
     */
    public function delete(string $appID): null
    {
        return $this->client->v1ApplicationDelete($appID);
    }

    /**
     * Update an application.
     *
     * @param string $appID Application id or uid
     * @param ApplicationIn $applicationIn
     * @return ApplicationOut|null
     */
    public function update(string $appID, ApplicationIn $applicationIn): ?ApplicationOut
    {
        return $this->client->v1ApplicationUpdate($appID, $applicationIn);
    }

    /**
     * Patch an application.
     *
     * @param string $appID Application id or uid
     * @param ApplicationPatch $applicationPatch
     * @return ApplicationOut|null
     */
    public function patch(string $appID, ApplicationPatch $applicationPatch): ?ApplicationOut
    {
        return $this->client->v1ApplicationPatch($appID, $applicationPatch);
    }
}