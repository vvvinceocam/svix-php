<?php

namespace Svix\Internal\Model;

class EndpointMessageOut extends \ArrayObject
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
     * @var \DateTime|null
     */
    protected $nextAttempt;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $payload;
    /**
    * The sending status of the message:
    - Success = 0
    - Pending = 1
    - Fail = 2
    - Sending = 3
    *
    * @var int
    */
    protected $status;
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
     * @return \DateTime|null
     */
    public function getNextAttempt() : ?\DateTime
    {
        return $this->nextAttempt;
    }
    /**
     * 
     *
     * @param \DateTime|null $nextAttempt
     *
     * @return self
     */
    public function setNextAttempt(?\DateTime $nextAttempt) : self
    {
        $this->initialized['nextAttempt'] = true;
        $this->nextAttempt = $nextAttempt;
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
    * The sending status of the message:
    - Success = 0
    - Pending = 1
    - Fail = 2
    - Sending = 3
    *
    * @return int
    */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
    * The sending status of the message:
    - Success = 0
    - Pending = 1
    - Fail = 2
    - Sending = 3
    *
    * @param int $status
    *
    * @return self
    */
    public function setStatus(int $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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