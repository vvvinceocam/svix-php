<?php

namespace Svix\Internal\Model;

class MessageRawPayloadOut extends \ArrayObject
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
     * @var string
     */
    protected $payload;
    /**
     * 
     *
     * @return string
     */
    public function getPayload() : string
    {
        return $this->payload;
    }
    /**
     * 
     *
     * @param string $payload
     *
     * @return self
     */
    public function setPayload(string $payload) : self
    {
        $this->initialized['payload'] = true;
        $this->payload = $payload;
        return $this;
    }
}