<?php

namespace Svix\Internal\Model;

class FontSizeConfig extends \ArrayObject
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
     * @var int|null
     */
    protected $base;
    /**
     * 
     *
     * @return int|null
     */
    public function getBase() : ?int
    {
        return $this->base;
    }
    /**
     * 
     *
     * @param int|null $base
     *
     * @return self
     */
    public function setBase(?int $base) : self
    {
        $this->initialized['base'] = true;
        $this->base = $base;
        return $this;
    }
}