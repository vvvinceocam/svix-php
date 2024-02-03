<?php

namespace Svix\Internal\Model;

class EndpointStats extends \ArrayObject
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
     * @var int
     */
    protected $fail;
    /**
     * 
     *
     * @var int
     */
    protected $pending;
    /**
     * 
     *
     * @var int
     */
    protected $sending;
    /**
     * 
     *
     * @var int
     */
    protected $success;
    /**
     * 
     *
     * @return int
     */
    public function getFail() : int
    {
        return $this->fail;
    }
    /**
     * 
     *
     * @param int $fail
     *
     * @return self
     */
    public function setFail(int $fail) : self
    {
        $this->initialized['fail'] = true;
        $this->fail = $fail;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPending() : int
    {
        return $this->pending;
    }
    /**
     * 
     *
     * @param int $pending
     *
     * @return self
     */
    public function setPending(int $pending) : self
    {
        $this->initialized['pending'] = true;
        $this->pending = $pending;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSending() : int
    {
        return $this->sending;
    }
    /**
     * 
     *
     * @param int $sending
     *
     * @return self
     */
    public function setSending(int $sending) : self
    {
        $this->initialized['sending'] = true;
        $this->sending = $sending;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSuccess() : int
    {
        return $this->success;
    }
    /**
     * 
     *
     * @param int $success
     *
     * @return self
     */
    public function setSuccess(int $success) : self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
}