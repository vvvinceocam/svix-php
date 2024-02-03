<?php

namespace Svix\Internal\Model;

class EndpointUpdatedEvent extends \ArrayObject
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
     * 
     *
     * @var EndpointUpdatedEventData
     */
    protected $data;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'endpoint.updated';
    /**
     * 
     *
     * @return EndpointUpdatedEventData
     */
    public function getData() : EndpointUpdatedEventData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param EndpointUpdatedEventData $data
     *
     * @return self
     */
    public function setData(EndpointUpdatedEventData $data) : self
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