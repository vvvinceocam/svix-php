<?php

namespace Svix\Internal\Model;

class GenerateIn extends \ArrayObject
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
     * @var string
     */
    protected $prompt;
    /**
     * 
     *
     * @return string
     */
    public function getPrompt() : string
    {
        return $this->prompt;
    }
    /**
     * 
     *
     * @param string $prompt
     *
     * @return self
     */
    public function setPrompt(string $prompt) : self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;
        return $this;
    }
}