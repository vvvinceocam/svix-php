<?php

namespace Svix;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Authentication\Header;
use Svix\Internal\Client;

class Svix
{
    private Client $client;

    public function __construct(string $authToken, ?SvixOptions $options = null)
    {
        $parts = explode(".", $authToken);
        $regionalUrl = match (end($parts)) {
            "us" => "https://api.us.svix.com",
            "eu" => "https://api.eu.svix.com",
            "in" => "https://api.in.svix.com",
            default => "https://api.svix.com",
        };

        $host = $options->serverUrl ?? $regionalUrl;

        $plugins = [
            new AddHostPlugin(
                Psr17FactoryDiscovery::findUriFactory()->createUri($host),
                [
                    "replace" => true,
                ],
            ),
            new AuthenticationPlugin(
                new Header(
                    'Authorization',
                    "Bearer $authToken",
                )
            ),
        ];

        $httpClient = new PluginClient(
            Psr18ClientDiscovery::find(),
            $plugins,
        );

        $this->client = Client::create($httpClient);
    }

    public function applications(): Applications
    {
        return new Applications($this->client);
    }

    public function messages(): Messages
    {
        return new Messages($this->client);
    }
}