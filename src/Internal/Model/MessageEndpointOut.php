<?php

namespace Svix\Internal\Model;

class MessageEndpointOut extends \ArrayObject
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
     * List of message channels this endpoint listens to (omit for all)
     *
     * @var string[]|null
     */
    protected $channels;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * An example endpoint name
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $disabled = false;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $filterTypes;
    /**
     * The ep's ID
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $nextAttempt;
    /**
     * 
     *
     * @var int|null
     */
    protected $rateLimit;
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
     * Optional unique identifier for the endpoint
     *
     * @var string|null
     */
    protected $uid;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @deprecated
     *
     * @var int
     */
    protected $version;
    /**
     * List of message channels this endpoint listens to (omit for all)
     *
     * @return string[]|null
     */
    public function getChannels() : ?array
    {
        return $this->channels;
    }
    /**
     * List of message channels this endpoint listens to (omit for all)
     *
     * @param string[]|null $channels
     *
     * @return self
     */
    public function setChannels(?array $channels) : self
    {
        $this->initialized['channels'] = true;
        $this->channels = $channels;
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
     * An example endpoint name
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * An example endpoint name
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
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * 
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled) : self
    {
        $this->initialized['disabled'] = true;
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getFilterTypes() : ?array
    {
        return $this->filterTypes;
    }
    /**
     * 
     *
     * @param string[]|null $filterTypes
     *
     * @return self
     */
    public function setFilterTypes(?array $filterTypes) : self
    {
        $this->initialized['filterTypes'] = true;
        $this->filterTypes = $filterTypes;
        return $this;
    }
    /**
     * The ep's ID
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The ep's ID
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
     * @return \DateTime|null
     */
    public function getNextAttempt() : ?\DateTime
    {
        return $this->nextAttempt;
    }
    /**
     * 
     *
     * @param \DateTime|null $nextAttempt
     *
     * @return self
     */
    public function setNextAttempt(?\DateTime $nextAttempt) : self
    {
        $this->initialized['nextAttempt'] = true;
        $this->nextAttempt = $nextAttempt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRateLimit() : ?int
    {
        return $this->rateLimit;
    }
    /**
     * 
     *
     * @param int|null $rateLimit
     *
     * @return self
     */
    public function setRateLimit(?int $rateLimit) : self
    {
        $this->initialized['rateLimit'] = true;
        $this->rateLimit = $rateLimit;
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
     * Optional unique identifier for the endpoint
     *
     * @return string|null
     */
    public function getUid() : ?string
    {
        return $this->uid;
    }
    /**
     * Optional unique identifier for the endpoint
     *
     * @param string|null $uid
     *
     * @return self
     */
    public function setUid(?string $uid) : self
    {
        $this->initialized['uid'] = true;
        $this->uid = $uid;
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
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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