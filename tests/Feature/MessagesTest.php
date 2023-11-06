<?php

use Svix\Internal\Model\ApplicationIn;
use Svix\Internal\Model\MessageIn;
use Svix\Svix;

$client = new Svix(getenv('SVIX_TEST_ACCESS_KEY'));

beforeEach(function () use ($client) {
    $appIn = new ApplicationIn();
    $appIn->setName('application for messages test');
    $this->appID = $client->applications()->create($appIn)->getId();
});

afterEach(function () use ($client) {
    $client->applications()->delete($this->appID);
});

test('can create then fetch back message', function () use ($client) {
    $messageIn = new MessageIn();
    $messageIn->setPayload(['foo' => 'bar', 'array' => [1, 2, 3]]);
    $messageIn->setEventType('customer.register');

    $messageSaved = $client->messages()->create($this->appID, $messageIn);

    expect($messageSaved->getPayload()->getArrayCopy())->toEqualCanonicalizing($messageIn->getPayload());

    $messageOut = $client->messages()->get($this->appID, $messageSaved->getId());

    expect($messageOut->getPayload()->getArrayCopy())->toEqualCanonicalizing($messageIn->getPayload());
});

test('can list messages', function () use ($client) {
    $messages = [
        ['payload' => ['foo' => 'bar'], 'event_type' => 'customer.subscribe'],
        ['payload' => ['foo' => 'baz'], 'event_type' => 'customer.subscribe'],
        ['payload' => ['foo' => 'qux'], 'event_type' => 'customer.expired'],
        ['payload' => ['foo' => 'oof'], 'event_type' => 'customer.expired'],
        ['payload' => ['foo' => 'rab'], 'event_type' => 'customer.refund'],
    ];

    foreach ($messages as $message) {
        $messageIn = new MessageIn();
        $messageIn->setPayload($message['payload']);
        $messageIn->setEventType($message['event_type']);
        $client->messages()->create($this->appID, $messageIn);
        usleep(50_000);
    }

    sleep(1);

    $listMessagesOut = $client->messages()->list($this->appID);
    $messagesOut = $listMessagesOut->getData();
    expect(count($messagesOut))->toBe(5);

    $listMessagesOut = $client->messages()->list($this->appID, ['event_types' => ['customer.expired']]);
    $messagesOut = $listMessagesOut->getData();
    expect(count($messagesOut))->toBe(2);
});

test('can delete payload', function () use ($client) {
    $messageIn = new MessageIn();
    $messageIn->setPayload(['foo' => 'bar', 'array' => [1, 2, 3]]);
    $messageIn->setEventType('customer.register');

    $messageSaved = $client->messages()->create($this->appID, $messageIn);

    $client->messages()->deletePayload($this->appID, $messageSaved->getId());

    $messageOut = $client->messages()->get($this->appID, $messageSaved->getId());
    expect($messageOut->getPayload()['m'])->toBe('EXPUNGED');
});

