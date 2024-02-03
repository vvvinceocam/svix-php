<?php

namespace Svix\Internal\Model;

class EventTypePatch extends \ArrayObject
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
     * @var bool
     */
    protected $archived;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $featureFlag;
    /**
     * 
     *
     * @var array<string, array<string, mixed>>|null
     */
    protected $schemas;
    /**
     * 
     *
     * @return bool
     */
    public function getArchived() : bool
    {
        return $this->archived;
    }
    /**
     * 
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived) : self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFeatureFlag() : ?string
    {
        return $this->featureFlag;
    }
    /**
     * 
     *
     * @param string|null $featureFlag
     *
     * @return self
     */
    public function setFeatureFlag(?string $featureFlag) : self
    {
        $this->initialized['featureFlag'] = true;
        $this->featureFlag = $featureFlag;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, array<string, mixed>>|null
     */
    public function getSchemas() : ?iterable
    {
        return $this->schemas;
    }
    /**
     * 
     *
     * @param array<string, array<string, mixed>>|null $schemas
     *
     * @return self
     */
    public function setSchemas(?iterable $schemas) : self
    {
        $this->initialized['schemas'] = true;
        $this->schemas = $schemas;
        return $this;
    }
}