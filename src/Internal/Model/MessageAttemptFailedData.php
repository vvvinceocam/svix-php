<?php

namespace Svix\Internal\Model;

class MessageAttemptFailedData extends \ArrayObject
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
     * The attempt's ID
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $responseStatusCode;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * The attempt's ID
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The attempt's ID
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getResponseStatusCode() : int
    {
        return $this->responseStatusCode;
    }
    /**
     * 
     *
     * @param int $responseStatusCode
     *
     * @return self
     */
    public function setResponseStatusCode(int $responseStatusCode) : self
    {
        $this->initialized['responseStatusCode'] = true;
        $this->responseStatusCode = $responseStatusCode;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
}