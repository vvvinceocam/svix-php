<?php

namespace Svix\Internal\Model;

class CustomColorPalette extends \ArrayObject
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
    protected $backgroundHover;
    /**
     * 
     *
     * @var string
     */
    protected $backgroundPrimary;
    /**
     * 
     *
     * @var string
     */
    protected $backgroundSecondary;
    /**
     * 
     *
     * @var string
     */
    protected $buttonPrimary;
    /**
     * 
     *
     * @var string
     */
    protected $interactiveAccent;
    /**
     * 
     *
     * @var string
     */
    protected $navigationAccent;
    /**
     * 
     *
     * @var string
     */
    protected $primary;
    /**
     * 
     *
     * @var string
     */
    protected $textDanger;
    /**
     * 
     *
     * @var string
     */
    protected $textPrimary;
    /**
     * 
     *
     * @return string
     */
    public function getBackgroundHover() : string
    {
        return $this->backgroundHover;
    }
    /**
     * 
     *
     * @param string $backgroundHover
     *
     * @return self
     */
    public function setBackgroundHover(string $backgroundHover) : self
    {
        $this->initialized['backgroundHover'] = true;
        $this->backgroundHover = $backgroundHover;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBackgroundPrimary() : string
    {
        return $this->backgroundPrimary;
    }
    /**
     * 
     *
     * @param string $backgroundPrimary
     *
     * @return self
     */
    public function setBackgroundPrimary(string $backgroundPrimary) : self
    {
        $this->initialized['backgroundPrimary'] = true;
        $this->backgroundPrimary = $backgroundPrimary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBackgroundSecondary() : string
    {
        return $this->backgroundSecondary;
    }
    /**
     * 
     *
     * @param string $backgroundSecondary
     *
     * @return self
     */
    public function setBackgroundSecondary(string $backgroundSecondary) : self
    {
        $this->initialized['backgroundSecondary'] = true;
        $this->backgroundSecondary = $backgroundSecondary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getButtonPrimary() : string
    {
        return $this->buttonPrimary;
    }
    /**
     * 
     *
     * @param string $buttonPrimary
     *
     * @return self
     */
    public function setButtonPrimary(string $buttonPrimary) : self
    {
        $this->initialized['buttonPrimary'] = true;
        $this->buttonPrimary = $buttonPrimary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInteractiveAccent() : string
    {
        return $this->interactiveAccent;
    }
    /**
     * 
     *
     * @param string $interactiveAccent
     *
     * @return self
     */
    public function setInteractiveAccent(string $interactiveAccent) : self
    {
        $this->initialized['interactiveAccent'] = true;
        $this->interactiveAccent = $interactiveAccent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNavigationAccent() : string
    {
        return $this->navigationAccent;
    }
    /**
     * 
     *
     * @param string $navigationAccent
     *
     * @return self
     */
    public function setNavigationAccent(string $navigationAccent) : self
    {
        $this->initialized['navigationAccent'] = true;
        $this->navigationAccent = $navigationAccent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrimary() : string
    {
        return $this->primary;
    }
    /**
     * 
     *
     * @param string $primary
     *
     * @return self
     */
    public function setPrimary(string $primary) : self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTextDanger() : string
    {
        return $this->textDanger;
    }
    /**
     * 
     *
     * @param string $textDanger
     *
     * @return self
     */
    public function setTextDanger(string $textDanger) : self
    {
        $this->initialized['textDanger'] = true;
        $this->textDanger = $textDanger;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTextPrimary() : string
    {
        return $this->textPrimary;
    }
    /**
     * 
     *
     * @param string $textPrimary
     *
     * @return self
     */
    public function setTextPrimary(string $textPrimary) : self
    {
        $this->initialized['textPrimary'] = true;
        $this->textPrimary = $textPrimary;
        return $this;
    }
}