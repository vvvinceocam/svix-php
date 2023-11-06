<?php

namespace Svix;

use Svix\BaseApi\EndpointsGroup;

/**
 * Health checks for the API.
 */
readonly class Health extends EndpointsGroup
{
    public function get(): void
    {
        $this->client->v1HealthGet();
    }
}