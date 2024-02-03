<?php

namespace Svix\Internal\Model;

class OneTimeTokenIn extends \ArrayObject
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
     * @var string
     */
    protected $oneTimeToken;
    /**
     * 
     *
     * @return string
     */
    public function getOneTimeToken() : string
    {
        return $this->oneTimeToken;
    }
    /**
     * 
     *
     * @param string $oneTimeToken
     *
     * @return self
     */
    public function setOneTimeToken(string $oneTimeToken) : self
    {
        $this->initialized['oneTimeToken'] = true;
        $this->oneTimeToken = $oneTimeToken;
        return $this;
    }
}