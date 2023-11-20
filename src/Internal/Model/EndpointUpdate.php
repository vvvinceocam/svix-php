<?php

namespace Svix\Internal\Model;

class EndpointUpdate extends \ArrayObject
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
     * List of message channels this endpoint listens to (omit for all)
     *
     * @var string[]|null
     */
    protected $channels;
    /**
     * 
     *
     * @var string
     */
    protected $description = '';
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
     * 
     *
     * @var array<string, string>
     */
    protected $metadata;
    /**
     * 
     *
     * @var int|null
     */
    protected $rateLimit;
    /**
     * Optional unique identifier for the endpoint
     *
     * @var string|null
     */
    protected $uid;
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
     * @var int|null
     */
    protected $version = 1;
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
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
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
     * @return int|null
     */
    public function getVersion() : ?int
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param int|null $version
     *
     * @deprecated
     *
     * @return self
     */
    public function setVersion(?int $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}