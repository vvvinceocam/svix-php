<?php

namespace Svix;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Authentication\Header;
use Svix\Internal\Client;

/**
 * Svix client.
 */
readonly class Svix
{
    private Client $client;

    public Applications $applications;
    public Authentication $authentication;
    public BackgroundTasks $backgroundTasks;
    public Endpoints $endpoints;
    public EventTypes $eventTypes;
    public Health $health;
    public MessageAttempts $messageAttempts;
    public Messages $messages;

    /**
     * Create a new Svix client.
     *
     * @param string $authToken Authentication token
     * @param SvixOptions|null $options
     */
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
        $this->applications = new Applications($this->client);
        $this->authentication = new Authentication($this->client);
        $this->backgroundTasks = new BackgroundTasks($this->client);
        $this->endpoints = new Endpoints($this->client);
        $this->eventTypes = new EventTypes($this->client);
        $this->health = new Health($this->client);
        $this->messageAttempts = new MessageAttempts($this->client);
        $this->messages = new Messages($this->client);
    }
}