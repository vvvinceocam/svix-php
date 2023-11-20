<?php

namespace Svix\Internal\Model;

class EndpointHeadersOut extends \ArrayObject
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
     * @var array<string, string>
     */
    protected $headers;
    /**
     * 
     *
     * @var string[]
     */
    protected $sensitive;
    /**
     * 
     *
     * @return array<string, string>
     */
    public function getHeaders() : iterable
    {
        return $this->headers;
    }
    /**
     * 
     *
     * @param array<string, string> $headers
     *
     * @return self
     */
    public function setHeaders(iterable $headers) : self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;
        return $this;
    }
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
}