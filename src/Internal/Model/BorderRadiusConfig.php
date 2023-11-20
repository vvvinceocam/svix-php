<?php

namespace Svix\Internal\Model;

class BorderRadiusConfig extends \ArrayObject
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
    protected $button;
    /**
     * 
     *
     * @var string
     */
    protected $card;
    /**
     * 
     *
     * @var string
     */
    protected $input;
    /**
     * 
     *
     * @return string
     */
    public function getButton() : string
    {
        return $this->button;
    }
    /**
     * 
     *
     * @param string $button
     *
     * @return self
     */
    public function setButton(string $button) : self
    {
        $this->initialized['button'] = true;
        $this->button = $button;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCard() : string
    {
        return $this->card;
    }
    /**
     * 
     *
     * @param string $card
     *
     * @return self
     */
    public function setCard(string $card) : self
    {
        $this->initialized['card'] = true;
        $this->card = $card;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInput() : string
    {
        return $this->input;
    }
    /**
     * 
     *
     * @param string $input
     *
     * @return self
     */
    public function setInput(string $input) : self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
}