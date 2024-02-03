<?php

namespace Svix\Internal\Model;

class RecoverIn extends \ArrayObject
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
    protected $since;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $until;
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
     * @return \DateTime|null
     */
    public function getUntil() : ?\DateTime
    {
        return $this->until;
    }
    /**
     * 
     *
     * @param \DateTime|null $until
     *
     * @return self
     */
    public function setUntil(?\DateTime $until) : self
    {
        $this->initialized['until'] = true;
        $this->until = $until;
        return $this;
    }
}