<?php

namespace Svix\Internal\Model;

class EndpointUpdatedEventData extends \ArrayObject
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
     * The ep's ID
     *
     * @var string
     */
    protected $endpointId;
    /**
     * The ep's UID
     *
     * @var string|null
     */
    protected $endpointUid;
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
     * The ep's ID
     *
     * @return string
     */
    public function getEndpointId() : string
    {
        return $this->endpointId;
    }
    /**
     * The ep's ID
     *
     * @param string $endpointId
     *
     * @return self
     */
    public function setEndpointId(string $endpointId) : self
    {
        $this->initialized['endpointId'] = true;
        $this->endpointId = $endpointId;
        return $this;
    }
    /**
     * The ep's UID
     *
     * @return string|null
     */
    public function getEndpointUid() : ?string
    {
        return $this->endpointUid;
    }
    /**
     * The ep's UID
     *
     * @param string|null $endpointUid
     *
     * @return self
     */
    public function setEndpointUid(?string $endpointUid) : self
    {
        $this->initialized['endpointUid'] = true;
        $this->endpointUid = $endpointUid;
        return $this;
    }
}