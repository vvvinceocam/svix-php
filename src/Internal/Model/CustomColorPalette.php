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
     * @var string|null
     */
    protected $backgroundHover;
    /**
     * 
     *
     * @var string|null
     */
    protected $backgroundPrimary;
    /**
     * 
     *
     * @var string|null
     */
    protected $backgroundSecondary;
    /**
     * 
     *
     * @var string|null
     */
    protected $interactiveAccent;
    /**
     * 
     *
     * @var string|null
     */
    protected $textDanger;
    /**
     * 
     *
     * @var string|null
     */
    protected $textPrimary;
    /**
     * 
     *
     * @return string|null
     */
    public function getBackgroundHover() : ?string
    {
        return $this->backgroundHover;
    }
    /**
     * 
     *
     * @param string|null $backgroundHover
     *
     * @return self
     */
    public function setBackgroundHover(?string $backgroundHover) : self
    {
        $this->initialized['backgroundHover'] = true;
        $this->backgroundHover = $backgroundHover;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBackgroundPrimary() : ?string
    {
        return $this->backgroundPrimary;
    }
    /**
     * 
     *
     * @param string|null $backgroundPrimary
     *
     * @return self
     */
    public function setBackgroundPrimary(?string $backgroundPrimary) : self
    {
        $this->initialized['backgroundPrimary'] = true;
        $this->backgroundPrimary = $backgroundPrimary;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBackgroundSecondary() : ?string
    {
        return $this->backgroundSecondary;
    }
    /**
     * 
     *
     * @param string|null $backgroundSecondary
     *
     * @return self
     */
    public function setBackgroundSecondary(?string $backgroundSecondary) : self
    {
        $this->initialized['backgroundSecondary'] = true;
        $this->backgroundSecondary = $backgroundSecondary;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInteractiveAccent() : ?string
    {
        return $this->interactiveAccent;
    }
    /**
     * 
     *
     * @param string|null $interactiveAccent
     *
     * @return self
     */
    public function setInteractiveAccent(?string $interactiveAccent) : self
    {
        $this->initialized['interactiveAccent'] = true;
        $this->interactiveAccent = $interactiveAccent;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTextDanger() : ?string
    {
        return $this->textDanger;
    }
    /**
     * 
     *
     * @param string|null $textDanger
     *
     * @return self
     */
    public function setTextDanger(?string $textDanger) : self
    {
        $this->initialized['textDanger'] = true;
        $this->textDanger = $textDanger;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTextPrimary() : ?string
    {
        return $this->textPrimary;
    }
    /**
     * 
     *
     * @param string|null $textPrimary
     *
     * @return self
     */
    public function setTextPrimary(?string $textPrimary) : self
    {
        $this->initialized['textPrimary'] = true;
        $this->textPrimary = $textPrimary;
        return $this;
    }
}