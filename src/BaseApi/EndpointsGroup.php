<?php

namespace Svix\BaseApi;

use Svix\Internal\Client;

readonly class EndpointsGroup
{
    public function __construct(public Client $client)
    {
    }
}