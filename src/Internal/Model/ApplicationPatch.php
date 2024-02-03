<?php

namespace Svix\Internal\Model;

class ApplicationPatch extends \ArrayObject
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
}