<?php

namespace Svix\Internal\Model;

class EndpointCreatedEvent extends \ArrayObject
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
     * @var EndpointCreatedEventData
     */
    protected $data;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'endpoint.created';
    /**
     * 
     *
     * @return EndpointCreatedEventData
     */
    public function getData() : EndpointCreatedEventData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param EndpointCreatedEventData $data
     *
     * @return self
     */
    public function setData(EndpointCreatedEventData $data) : self
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