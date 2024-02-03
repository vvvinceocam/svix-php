<?php

namespace Svix\Internal\Model;

class AttemptStatisticsResponse extends \ArrayObject
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
     * @var AttemptStatisticsData
     */
    protected $data;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $endDate;
    /**
     * Period length for a statistics data point
     *
     * @var string
     */
    protected $period;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * 
     *
     * @return AttemptStatisticsData
     */
    public function getData() : AttemptStatisticsData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param AttemptStatisticsData $data
     *
     * @return self
     */
    public function setData(AttemptStatisticsData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getEndDate() : \DateTime
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate) : self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Period length for a statistics data point
     *
     * @return string
     */
    public function getPeriod() : string
    {
        return $this->period;
    }
    /**
     * Period length for a statistics data point
     *
     * @param string $period
     *
     * @return self
     */
    public function setPeriod(string $period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate) : self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
}