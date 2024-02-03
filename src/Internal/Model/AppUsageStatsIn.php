<?php

namespace Svix\Internal\Model;

class AppUsageStatsIn extends \ArrayObject
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
     * @var string[]|null
     */
    protected $appIds;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $since;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $until;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAppIds() : ?array
    {
        return $this->appIds;
    }
    /**
     * 
     *
     * @param string[]|null $appIds
     *
     * @return self
     */
    public function setAppIds(?array $appIds) : self
    {
        $this->initialized['appIds'] = true;
        $this->appIds = $appIds;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getSince() : \DateTime
    {
        return $this->since;
    }
    /**
     * 
     *
     * @param \DateTime $since
     *
     * @return self
     */
    public function setSince(\DateTime $since) : self
    {
        $this->initialized['since'] = true;
        $this->since = $since;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUntil() : \DateTime
    {
        return $this->until;
    }
    /**
     * 
     *
     * @param \DateTime $until
     *
     * @return self
     */
    public function setUntil(\DateTime $until) : self
    {
        $this->initialized['until'] = true;
        $this->until = $until;
        return $this;
    }
}