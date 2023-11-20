<?php

namespace Svix\Internal\Model;

class ApplicationTokenExpireIn extends \ArrayObject
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
     * How many seconds until the old key is expired.
     *
     * @var int|null
     */
    protected $expiry;
    /**
     * How many seconds until the old key is expired.
     *
     * @return int|null
     */
    public function getExpiry() : ?int
    {
        return $this->expiry;
    }
    /**
     * How many seconds until the old key is expired.
     *
     * @param int|null $expiry
     *
     * @return self
     */
    public function setExpiry(?int $expiry) : self
    {
        $this->initialized['expiry'] = true;
        $this->expiry = $expiry;
        return $this;
    }
}