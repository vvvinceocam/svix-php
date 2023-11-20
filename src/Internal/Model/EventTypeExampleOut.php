<?php

namespace Svix\Internal\Model;

class EventTypeExampleOut extends \ArrayObject
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
     * @var array<string, array<string, mixed>>
     */
    protected $example;
    /**
     * 
     *
     * @return array<string, array<string, mixed>>
     */
    public function getExample() : iterable
    {
        return $this->example;
    }
    /**
     * 
     *
     * @param array<string, array<string, mixed>> $example
     *
     * @return self
     */
    public function setExample(iterable $example) : self
    {
        $this->initialized['example'] = true;
        $this->example = $example;
        return $this;
    }
}