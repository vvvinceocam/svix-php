<?php

namespace Svix\Internal\Model;

class AttemptStatisticsData extends \ArrayObject
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
     * @var int[]|null
     */
    protected $failureCount;
    /**
     * 
     *
     * @var int[]|null
     */
    protected $successCount;
    /**
     * 
     *
     * @return int[]|null
     */
    public function getFailureCount() : ?array
    {
        return $this->failureCount;
    }
    /**
     * 
     *
     * @param int[]|null $failureCount
     *
     * @return self
     */
    public function setFailureCount(?array $failureCount) : self
    {
        $this->initialized['failureCount'] = true;
        $this->failureCount = $failureCount;
        return $this;
    }
    /**
     * 
     *
     * @return int[]|null
     */
    public function getSuccessCount() : ?array
    {
        return $this->successCount;
    }
    /**
     * 
     *
     * @param int[]|null $successCount
     *
     * @return self
     */
    public function setSuccessCount(?array $successCount) : self
    {
        $this->initialized['successCount'] = true;
        $this->successCount = $successCount;
        return $this;
    }
}