<?php

namespace Svix\Internal\Model;

class EventTypeImportOpenApiOutData extends \ArrayObject
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
     * @var string[]
     */
    protected $modified;
    /**
     * 
     *
     * @return string[]
     */
    public function getModified() : array
    {
        return $this->modified;
    }
    /**
     * 
     *
     * @param string[] $modified
     *
     * @return self
     */
    public function setModified(array $modified) : self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;
        return $this;
    }
}