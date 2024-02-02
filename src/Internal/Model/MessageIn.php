<?php

namespace Svix\Internal\Model;

class MessageIn extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var ApplicationIn
     */
    protected $application;
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
     * 
     *
     * @var array<string, mixed>
     */
    protected $payload;
    /**
     * 
     *
     * @var int
     */
    protected $payloadRetentionPeriod = 90;
    /**
     * List of free-form tags that can be filtered by when listing messages
     *
     * @var string[]|null
     */
    protected $tags;
    /**
     * Extra parameters to pass to Transformations (for future use)
     *
     * @var array<string, mixed>|null
     */
    protected $transformationsParams;
    /**
     * 
     *
     * @return ApplicationIn
     */
    public function getApplication() : ApplicationIn
    {
        return $this->application;
    }
    /**
     * 
     *
     * @param ApplicationIn $application
     *
     * @return self
     */
    public function setApplication(ApplicationIn $application) : self
    {
        $this->initialized['application'] = true;
        $this->application = $application;
        return $this;
    }
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
     * @return int
     */
    public function getPayloadRetentionPeriod() : int
    {
        return $this->payloadRetentionPeriod;
    }
    /**
     * 
     *
     * @param int $payloadRetentionPeriod
     *
     * @return self
     */
    public function setPayloadRetentionPeriod(int $payloadRetentionPeriod) : self
    {
        $this->initialized['payloadRetentionPeriod'] = true;
        $this->payloadRetentionPeriod = $payloadRetentionPeriod;
        return $this;
    }
    /**
     * List of free-form tags that can be filtered by when listing messages
     *
     * @return string[]|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * List of free-form tags that can be filtered by when listing messages
     *
     * @param string[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags) : self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * Extra parameters to pass to Transformations (for future use)
     *
     * @return array<string, mixed>|null
     */
    public function getTransformationsParams() : ?iterable
    {
        return $this->transformationsParams;
    }
    /**
     * Extra parameters to pass to Transformations (for future use)
     *
     * @param array<string, mixed>|null $transformationsParams
     *
     * @return self
     */
    public function setTransformationsParams(?iterable $transformationsParams) : self
    {
        $this->initialized['transformationsParams'] = true;
        $this->transformationsParams = $transformationsParams;
        return $this;
    }
}