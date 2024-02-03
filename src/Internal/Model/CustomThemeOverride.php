<?php

namespace Svix\Internal\Model;

class CustomThemeOverride extends \ArrayObject
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
     * @var BorderRadiusConfig
     */
    protected $borderRadius;
    /**
     * 
     *
     * @var FontSizeConfig
     */
    protected $fontSize;
    /**
     * 
     *
     * @return BorderRadiusConfig
     */
    public function getBorderRadius() : BorderRadiusConfig
    {
        return $this->borderRadius;
    }
    /**
     * 
     *
     * @param BorderRadiusConfig $borderRadius
     *
     * @return self
     */
    public function setBorderRadius(BorderRadiusConfig $borderRadius) : self
    {
        $this->initialized['borderRadius'] = true;
        $this->borderRadius = $borderRadius;
        return $this;
    }
    /**
     * 
     *
     * @return FontSizeConfig
     */
    public function getFontSize() : FontSizeConfig
    {
        return $this->fontSize;
    }
    /**
     * 
     *
     * @param FontSizeConfig $fontSize
     *
     * @return self
     */
    public function setFontSize(FontSizeConfig $fontSize) : self
    {
        $this->initialized['fontSize'] = true;
        $this->fontSize = $fontSize;
        return $this;
    }
}