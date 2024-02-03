<?php

namespace Svix\Internal\Model;

class ApplicationOut extends \ArrayObject
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
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The app's ID
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var array<string, string>
     */
    protected $metadata;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $rateLimit;
    /**
     * The app's UID
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
     * The app's ID
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The app's ID
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
     * @return array<string, string>
     */
    public function getMetadata() : iterable
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param array<string, string> $metadata
     *
     * @return self
     */
    public function setMetadata(iterable $metadata) : self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
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
     * The app's UID
     *
     * @return string|null
     */
    public function getUid() : ?string
    {
        return $this->uid;
    }
    /**
     * The app's UID
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
}