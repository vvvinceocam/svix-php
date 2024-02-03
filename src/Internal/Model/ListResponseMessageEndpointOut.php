<?php

namespace Svix\Internal\Model;

class ListResponseMessageEndpointOut extends \ArrayObject
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
     * @var MessageEndpointOut[]
     */
    protected $data;
    /**
     * 
     *
     * @var bool
     */
    protected $done;
    /**
     * 
     *
     * @var string|null
     */
    protected $iterator;
    /**
     * 
     *
     * @var string|null
     */
    protected $prevIterator;
    /**
     * 
     *
     * @return MessageEndpointOut[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param MessageEndpointOut[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDone() : bool
    {
        return $this->done;
    }
    /**
     * 
     *
     * @param bool $done
     *
     * @return self
     */
    public function setDone(bool $done) : self
    {
        $this->initialized['done'] = true;
        $this->done = $done;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIterator() : ?string
    {
        return $this->iterator;
    }
    /**
     * 
     *
     * @param string|null $iterator
     *
     * @return self
     */
    public function setIterator(?string $iterator) : self
    {
        $this->initialized['iterator'] = true;
        $this->iterator = $iterator;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrevIterator() : ?string
    {
        return $this->prevIterator;
    }
    /**
     * 
     *
     * @param string|null $prevIterator
     *
     * @return self
     */
    public function setPrevIterator(?string $prevIterator) : self
    {
        $this->initialized['prevIterator'] = true;
        $this->prevIterator = $prevIterator;
        return $this;
    }
}