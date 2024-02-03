<?php

namespace Svix\Internal\Model;

class AppPortalAccessIn extends \ArrayObject
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
     * The set of feature flags the created token will have access to.
     *
     * @var string[]
     */
    protected $featureFlags;
    /**
     * The set of feature flags the created token will have access to.
     *
     * @return string[]
     */
    public function getFeatureFlags() : array
    {
        return $this->featureFlags;
    }
    /**
     * The set of feature flags the created token will have access to.
     *
     * @param string[] $featureFlags
     *
     * @return self
     */
    public function setFeatureFlags(array $featureFlags) : self
    {
        $this->initialized['featureFlags'] = true;
        $this->featureFlags = $featureFlags;
        return $this;
    }
}