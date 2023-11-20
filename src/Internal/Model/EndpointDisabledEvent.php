<?php

namespace Svix\Internal\Model;

class EndpointDisabledEvent extends \ArrayObject
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
     * Sent when an endpoint has been automatically disabled after continuous failures.
     *
     * @var EndpointDisabledEventData
     */
    protected $data;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'endpoint.disabled';
    /**
     * Sent when an endpoint has been automatically disabled after continuous failures.
     *
     * @return EndpointDisabledEventData
     */
    public function getData() : EndpointDisabledEventData
    {
        return $this->data;
    }
    /**
     * Sent when an endpoint has been automatically disabled after continuous failures.
     *
     * @param EndpointDisabledEventData $data
     *
     * @return self
     */
    public function setData(EndpointDisabledEventData $data) : self
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