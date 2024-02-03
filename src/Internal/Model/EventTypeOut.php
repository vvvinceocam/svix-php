<?php

namespace Svix\Internal\Model;

class EventTypeOut extends \ArrayObject
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
    protected $archived = false;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
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
     * The event type's name
     *
     * @var string
     */
    protected $name;
    /**
     * The schema for the event type for a specific version as a JSON schema.
     *
     * @var array<string, array<string, mixed>>|null
     */
    protected $schemas;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
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
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
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
     * The event type's name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The event type's name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The schema for the event type for a specific version as a JSON schema.
     *
     * @return array<string, array<string, mixed>>|null
     */
    public function getSchemas() : ?iterable
    {
        return $this->schemas;
    }
    /**
     * The schema for the event type for a specific version as a JSON schema.
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
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}