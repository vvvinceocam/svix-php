<?php

namespace Svix\Internal\Model;

class RetryScheduleInOut extends \ArrayObject
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
     * 
     *
     * @var Duration[]
     */
    protected $retrySchedule;
    /**
     * 
     *
     * @return Duration[]
     */
    public function getRetrySchedule() : array
    {
        return $this->retrySchedule;
    }
    /**
     * 
     *
     * @param Duration[] $retrySchedule
     *
     * @return self
     */
    public function setRetrySchedule(array $retrySchedule) : self
    {
        $this->initialized['retrySchedule'] = true;
        $this->retrySchedule = $retrySchedule;
        return $this;
    }
}