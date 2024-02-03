<?php

namespace Svix\Internal\Model;

class InboundPathParams extends \ArrayObject
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
     * The app's ID or UID
     *
     * @var string
     */
    protected $appId;
    /**
     * 
     *
     * @var string
     */
    protected $inboundToken;
    /**
     * The app's ID or UID
     *
     * @return string
     */
    public function getAppId() : string
    {
        return $this->appId;
    }
    /**
     * The app's ID or UID
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
     * 
     *
     * @return string
     */
    public function getInboundToken() : string
    {
        return $this->inboundToken;
    }
    /**
     * 
     *
     * @param string $inboundToken
     *
     * @return self
     */
    public function setInboundToken(string $inboundToken) : self
    {
        $this->initialized['inboundToken'] = true;
        $this->inboundToken = $inboundToken;
        return $this;
    }
}