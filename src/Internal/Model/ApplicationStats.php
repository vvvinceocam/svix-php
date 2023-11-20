<?php

namespace Svix\Internal\Model;

class ApplicationStats extends \ArrayObject
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
     * The app's ID
     *
     * @var string
     */
    protected $appId;
    /**
     * The app's UID
     *
     * @var string|null
     */
    protected $appUid;
    /**
     * 
     *
     * @var int
     */
    protected $messageDestinations;
    /**
     * The app's ID
     *
     * @return string
     */
    public function getAppId() : string
    {
        return $this->appId;
    }
    /**
     * The app's ID
     *
     * @param string $appId
     *
     * @return self
     */
    public function setAppId(string $appId) : self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    /**
     * The app's UID
     *
     * @return string|null
     */
    public function getAppUid() : ?string
    {
        return $this->appUid;
    }
    /**
     * The app's UID
     *
     * @param string|null $appUid
     *
     * @return self
     */
    public function setAppUid(?string $appUid) : self
    {
        $this->initialized['appUid'] = true;
        $this->appUid = $appUid;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMessageDestinations() : int
    {
        return $this->messageDestinations;
    }
    /**
     * 
     *
     * @param int $messageDestinations
     *
     * @return self
     */
    public function setMessageDestinations(int $messageDestinations) : self
    {
        $this->initialized['messageDestinations'] = true;
        $this->messageDestinations = $messageDestinations;
        return $this;
    }
}