<?php

namespace Svix\Internal\Model;

class EndpointDeletedEvent extends \ArrayObject
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
     * @var EndpointDeletedEventData
     */
    protected $data;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'endpoint.deleted';
    /**
     * 
     *
     * @return EndpointDeletedEventData
     */
    public function getData() : EndpointDeletedEventData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param EndpointDeletedEventData $data
     *
     * @return self
     */
    public function setData(EndpointDeletedEventData $data) : self
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