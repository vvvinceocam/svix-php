<?php

namespace Svix\Internal\Model;

class Duration extends \ArrayObject
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
     * @var int
     */
    protected $nanos;
    /**
     * 
     *
     * @var int
     */
    protected $secs;
    /**
     * 
     *
     * @return int
     */
    public function getNanos() : int
    {
        return $this->nanos;
    }
    /**
     * 
     *
     * @param int $nanos
     *
     * @return self
     */
    public function setNanos(int $nanos) : self
    {
        $this->initialized['nanos'] = true;
        $this->nanos = $nanos;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSecs() : int
    {
        return $this->secs;
    }
    /**
     * 
     *
     * @param int $secs
     *
     * @return self
     */
    public function setSecs(int $secs) : self
    {
        $this->initialized['secs'] = true;
        $this->secs = $secs;
        return $this;
    }
}