<?php

namespace Svix\Internal\Model;

class MessageStreamOut extends \ArrayObject
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
     * @var MessageOut[]
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
     * @var string
     */
    protected $iterator;
    /**
     * 
     *
     * @return MessageOut[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param MessageOut[] $data
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
     * @return string
     */
    public function getIterator() : string
    {
        return $this->iterator;
    }
    /**
     * 
     *
     * @param string $iterator
     *
     * @return self
     */
    public function setIterator(string $iterator) : self
    {
        $this->initialized['iterator'] = true;
        $this->iterator = $iterator;
        return $this;
    }
}