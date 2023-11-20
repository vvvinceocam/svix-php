<?php

namespace Svix\Internal\Model;

class MessageAttemptHeadersOut extends \ArrayObject
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
     * @var string[]
     */
    protected $sensitive;
    /**
     * 
     *
     * @var array<string, string>
     */
    protected $sentHeaders;
    /**
     * 
     *
     * @return string[]
     */
    public function getSensitive() : array
    {
        return $this->sensitive;
    }
    /**
     * 
     *
     * @param string[] $sensitive
     *
     * @return self
     */
    public function setSensitive(array $sensitive) : self
    {
        $this->initialized['sensitive'] = true;
        $this->sensitive = $sensitive;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, string>
     */
    public function getSentHeaders() : iterable
    {
        return $this->sentHeaders;
    }
    /**
     * 
     *
     * @param array<string, string> $sentHeaders
     *
     * @return self
     */
    public function setSentHeaders(iterable $sentHeaders) : self
    {
        $this->initialized['sentHeaders'] = true;
        $this->sentHeaders = $sentHeaders;
        return $this;
    }
}