<?php

namespace Svix\Internal\Model;

class BackgroundTaskOut extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $data;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $task;
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getData() : iterable
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param array<string, mixed> $data
     *
     * @return self
     */
    public function setData(iterable $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
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
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTask() : string
    {
        return $this->task;
    }
    /**
     * 
     *
     * @param string $task
     *
     * @return self
     */
    public function setTask(string $task) : self
    {
        $this->initialized['task'] = true;
        $this->task = $task;
        return $this;
    }
}