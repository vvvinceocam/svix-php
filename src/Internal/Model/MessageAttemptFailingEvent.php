<?php

namespace Svix\Internal\Model;

class MessageAttemptFailingEvent extends \ArrayObject
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
     * Sent when a message delivery has failed (all of the retry attempts have been exhausted) as a "message.attempt.exhausted" type or after it's failed four times as a "message.attempt.failing" event.
     *
     * @var MessageAttemptFailingEventData
     */
    protected $data;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'message.attempt.failing';
    /**
     * Sent when a message delivery has failed (all of the retry attempts have been exhausted) as a "message.attempt.exhausted" type or after it's failed four times as a "message.attempt.failing" event.
     *
     * @return MessageAttemptFailingEventData
     */
    public function getData() : MessageAttemptFailingEventData
    {
        return $this->data;
    }
    /**
     * Sent when a message delivery has failed (all of the retry attempts have been exhausted) as a "message.attempt.exhausted" type or after it's failed four times as a "message.attempt.failing" event.
     *
     * @param MessageAttemptFailingEventData $data
     *
     * @return self
     */
    public function setData(MessageAttemptFailingEventData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}