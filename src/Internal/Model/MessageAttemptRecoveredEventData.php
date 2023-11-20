<?php

namespace Svix\Internal\Model;

class MessageAttemptRecoveredEventData extends \ArrayObject
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
     * The ep's ID
     *
     * @var string
     */
    protected $endpointId;
    /**
     * 
     *
     * @var MessageAttemptFailedData
     */
    protected $lastAttempt;
    /**
     * The msg's UID
     *
     * @var string|null
     */
    protected $msgEventId;
    /**
     * The msg's ID
     *
     * @var string
     */
    protected $msgId;
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
     * 
     *
     * @return MessageAttemptFailedData
     */
    public function getLastAttempt() : MessageAttemptFailedData
    {
        return $this->lastAttempt;
    }
    /**
     * 
     *
     * @param MessageAttemptFailedData $lastAttempt
     *
     * @return self
     */
    public function setLastAttempt(MessageAttemptFailedData $lastAttempt) : self
    {
        $this->initialized['lastAttempt'] = true;
        $this->lastAttempt = $lastAttempt;
        return $this;
    }
    /**
     * The msg's UID
     *
     * @return string|null
     */
    public function getMsgEventId() : ?string
    {
        return $this->msgEventId;
    }
    /**
     * The msg's UID
     *
     * @param string|null $msgEventId
     *
     * @return self
     */
    public function setMsgEventId(?string $msgEventId) : self
    {
        $this->initialized['msgEventId'] = true;
        $this->msgEventId = $msgEventId;
        return $this;
    }
    /**
     * The msg's ID
     *
     * @return string
     */
    public function getMsgId() : string
    {
        return $this->msgId;
    }
    /**
     * The msg's ID
     *
     * @param string $msgId
     *
     * @return self
     */
    public function setMsgId(string $msgId) : self
    {
        $this->initialized['msgId'] = true;
        $this->msgId = $msgId;
        return $this;
    }
}