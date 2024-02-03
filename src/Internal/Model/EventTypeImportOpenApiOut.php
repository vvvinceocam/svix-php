<?php

namespace Svix\Internal\Model;

class EventTypeImportOpenApiOut extends \ArrayObject
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
     * @var EventTypeImportOpenApiOutData
     */
    protected $data;
    /**
     * 
     *
     * @return EventTypeImportOpenApiOutData
     */
    public function getData() : EventTypeImportOpenApiOutData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param EventTypeImportOpenApiOutData $data
     *
     * @return self
     */
    public function setData(EventTypeImportOpenApiOutData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}