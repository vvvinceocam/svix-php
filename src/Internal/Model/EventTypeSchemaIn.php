<?php

namespace Svix\Internal\Model;

class EventTypeSchemaIn extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $schema;
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getSchema() : iterable
    {
        return $this->schema;
    }
    /**
     * 
     *
     * @param array<string, mixed> $schema
     *
     * @return self
     */
    public function setSchema(iterable $schema) : self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;
        return $this;
    }
}