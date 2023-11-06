# Svix PHP

Unofficial PHP SDK for [Svix](https://www.svix.com/).

## Basic usage

```php
<?php

use Svix\Svix;
use Svix\Internal\Model\ApplicationIn;
use Svix\Internal\Model\EndpointIn;
use Svix\Internal\Model\MessageIn;

$client = new Svix('auth token');

// Create an application for a customer
$app = new ApplicationIn();
$app->setName('Super Customer');
$app->setUid('id-from-our-application');
$app = $client->applications->create($app);

// Bind an endpoint
$endpoint = new EndpointIn();
$endpoint->setUrl('https://example.com/customer/endpoint');
$endpoint = $client->endpoints->create($app->getId(), $endpoint);

// Get the secret that customer must use to validate webhook calls
$secret = $client->endpoints->getSecret($app->getId(), $endpoint->getId());

// Send a message to our freshly enrolled customer
$message = new MessageIn();
$message->setEventType('billing.started');
$message->setPayload([
    'some' => 'data',
    'with' => [
        'arbitrary' => 'depth',
    ],
]);
$client->messages->create($app->getId(), $message);
```