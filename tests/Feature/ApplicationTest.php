<?php

use Svix\Internal\Model\ApplicationIn;
use Svix\Svix;

$client = new Svix(
    getenv('SVIX_TEST_TOKEN'),
    new \Svix\SvixOptions(true, 'http://localhost:8071')
);

test('can create then fetch back application', function () use ($client) {
    $appIn = new ApplicationIn();
    $appIn->setName('A simple app');
    $appSaved = $client->applications->create($appIn);
    $appOut = $client->applications->get($appSaved->getId());

    expect($appOut->getName())->toBe($appIn->getName());

    $client->applications->delete($appSaved->getId());
});

test('can delete application', function () use ($client) {
    $appIn = new ApplicationIn();
    $appIn->setName('A simple app');
    $appSaved = $client->applications->create($appIn);

    expect($appSaved)->not()->toBeNull();

    $client->applications->delete($appSaved->getId());
    $client->applications->get($appSaved->getId());

    $client->applications->delete($appSaved->getId());
})->throws(\Svix\Internal\Exception\NotFoundException::class);

