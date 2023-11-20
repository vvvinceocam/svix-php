<?php

namespace Svix\Internal\Model;

class EnvironmentOut extends \ArrayObject
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
     * @var EventTypeOut[]
     */
    protected $eventTypes;
    /**
     * 
     *
     * @var SettingsOut
     */
    protected $settings;
    /**
     * 
     *
     * @var int
     */
    protected $version = 1;
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
     * @return EventTypeOut[]
     */
    public function getEventTypes() : array
    {
        return $this->eventTypes;
    }
    /**
     * 
     *
     * @param EventTypeOut[] $eventTypes
     *
     * @return self
     */
    public function setEventTypes(array $eventTypes) : self
    {
        $this->initialized['eventTypes'] = true;
        $this->eventTypes = $eventTypes;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsOut
     */
    public function getSettings() : SettingsOut
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param SettingsOut $settings
     *
     * @return self
     */
    public function setSettings(SettingsOut $settings) : self
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