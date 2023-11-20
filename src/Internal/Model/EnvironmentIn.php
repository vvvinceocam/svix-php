<?php

namespace Svix\Internal\Model;

class EnvironmentIn extends \ArrayObject
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
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var EventTypeIn[]|null
     */
    protected $eventTypes;
    /**
     * 
     *
     * @var SettingsIn
     */
    protected $settings;
    /**
     * 
     *
     * @var int
     */
    protected $version;
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
     * @return EventTypeIn[]|null
     */
    public function getEventTypes() : ?array
    {
        return $this->eventTypes;
    }
    /**
     * 
     *
     * @param EventTypeIn[]|null $eventTypes
     *
     * @return self
     */
    public function setEventTypes(?array $eventTypes) : self
    {
        $this->initialized['eventTypes'] = true;
        $this->eventTypes = $eventTypes;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsIn
     */
    public function getSettings() : SettingsIn
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param SettingsIn $settings
     *
     * @return self
     */
    public function setSettings(SettingsIn $settings) : self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVersion() : int
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param int $version
     *
     * @return self
     */
    public function setVersion(int $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}