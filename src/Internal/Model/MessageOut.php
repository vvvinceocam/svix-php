<?php

namespace Svix\Internal\Model;

class MessageOut extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * List of free-form identifiers that endpoints can filter by
     *
     * @var string[]|null
     */
    protected $channels;
    /**
     * Optional unique identifier for the message
     *
     * @var string|null
     */
    protected $eventId;
    /**
     * The event type's name
     *
     * @var string
     */
    protected $eventType;
    /**
     * The msg's ID
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $payload;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * List of free-form identifiers that endpoints can filter by
     *
     * @return string[]|null
     */
    public function getChannels() : ?array
    {
        return $this->channels;
    }
    /**
     * List of free-form identifiers that endpoints can filter by
     *
     * @param string[]|null $channels
     *
     * @return self
     */
    public function setChannels(?array $channels) : self
    {
        $this->initialized['channels'] = true;
        $this->channels = $channels;
        return $this;
    }
    /**
     * Optional unique identifier for the message
     *
     * @return string|null
     */
    public function getEventId() : ?string
    {
        return $this->eventId;
    }
    /**
     * Optional unique identifier for the message
     *
     * @param string|null $eventId
     *
     * @return self
     */
    public function setEventId(?string $eventId) : self
    {
        $this->initialized['eventId'] = true;
        $this->eventId = $eventId;
        return $this;
    }
    /**
     * The event type's name
     *
     * @return string
     */
    public function getEventType() : string
    {
        return $this->eventType;
    }
    /**
     * The event type's name
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType) : self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * The msg's ID
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The msg's ID
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getPayload() : iterable
    {
        return $this->payload;
    }
    /**
     * 
     *
     * @param array<string, mixed> $payload
     *
     * @return self
     */
    public function setPayload(iterable $payload) : self
    {
        $this->initialized['payload'] = true;
        $this->payload = $payload;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
}