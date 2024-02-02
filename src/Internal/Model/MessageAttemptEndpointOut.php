<?php

namespace Svix\Internal\Model;

class MessageAttemptEndpointOut extends \ArrayObject
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
     * The ep's ID
     *
     * @var string
     */
    protected $endpointId;
    /**
     * The attempt's ID
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var MessageOut
     */
    protected $msg;
    /**
     * The msg's ID
     *
     * @var string
     */
    protected $msgId;
    /**
     * 
     *
     * @var string
     */
    protected $response;
    /**
     * 
     *
     * @var int
     */
    protected $responseStatusCode;
    /**
    * The sending status of the message:
    - Success = 0
    - Pending = 1
    - Fail = 2
    - Sending = 3
    *
    * @var int
    */
    protected $status;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
    * The reason an attempt was made:
    - Scheduled = 0
    - Manual = 1
    *
    * @var int
    */
    protected $triggerType;
    /**
     * 
     *
     * @var string
     */
    protected $url;
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
     * The attempt's ID
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The attempt's ID
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return MessageOut
     */
    public function getMsg() : MessageOut
    {
        return $this->msg;
    }
    /**
     * 
     *
     * @param MessageOut $msg
     *
     * @return self
     */
    public function setMsg(MessageOut $msg) : self
    {
        $this->initialized['msg'] = true;
        $this->msg = $msg;
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
    /**
     * 
     *
     * @return string
     */
    public function getResponse() : string
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param string $response
     *
     * @return self
     */
    public function setResponse(string $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getResponseStatusCode() : int
    {
        return $this->responseStatusCode;
    }
    /**
     * 
     *
     * @param int $responseStatusCode
     *
     * @return self
     */
    public function setResponseStatusCode(int $responseStatusCode) : self
    {
        $this->initialized['responseStatusCode'] = true;
        $this->responseStatusCode = $responseStatusCode;
        return $this;
    }
    /**
    * The sending status of the message:
    - Success = 0
    - Pending = 1
    - Fail = 2
    - Sending = 3
    *
    * @return int
    */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
    * The sending status of the message:
    - Success = 0
    - Pending = 1
    - Fail = 2
    - Sending = 3
    *
    * @param int $status
    *
    * @return self
    */
    public function setStatus(int $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
    * The reason an attempt was made:
    - Scheduled = 0
    - Manual = 1
    *
    * @return int
    */
    public function getTriggerType() : int
    {
        return $this->triggerType;
    }
    /**
    * The reason an attempt was made:
    - Scheduled = 0
    - Manual = 1
    *
    * @param int $triggerType
    *
    * @return self
    */
    public function setTriggerType(int $triggerType) : self
    {
        $this->initialized['triggerType'] = true;
        $this->triggerType = $triggerType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}