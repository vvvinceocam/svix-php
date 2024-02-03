<?php

namespace Svix\Internal\Model;

class EndpointHeadersIn extends \ArrayObject
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
     * @var array<string, string>
     */
    protected $headers;
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
}