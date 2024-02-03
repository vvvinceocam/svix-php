<?php

namespace Svix\Internal\Model;

class CompletionChoice extends \ArrayObject
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
     * @var string
     */
    protected $finishReason;
    /**
     * 
     *
     * @var int
     */
    protected $index;
    /**
     * 
     *
     * @var CompletionMessage
     */
    protected $message;
    /**
     * 
     *
     * @return string
     */
    public function getFinishReason() : string
    {
        return $this->finishReason;
    }
    /**
     * 
     *
     * @param string $finishReason
     *
     * @return self
     */
    public function setFinishReason(string $finishReason) : self
    {
        $this->initialized['finishReason'] = true;
        $this->finishReason = $finishReason;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIndex() : int
    {
        return $this->index;
    }
    /**
     * 
     *
     * @param int $index
     *
     * @return self
     */
    public function setIndex(int $index) : self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * 
     *
     * @return CompletionMessage
     */
    public function getMessage() : CompletionMessage
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param CompletionMessage $message
     *
     * @return self
     */
    public function setMessage(CompletionMessage $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}