<?php

namespace Svix\Internal\Model;

class SettingsOut extends \ArrayObject
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
     * @var CustomColorPalette
     */
    protected $colorPaletteDark;
    /**
     * 
     *
     * @var CustomColorPalette
     */
    protected $colorPaletteLight;
    /**
     * 
     *
     * @var int|null
     */
    protected $customBaseFontSize;
    /**
     * 
     *
     * @var string
     */
    protected $customColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $customFontFamily;
    /**
     * 
     *
     * @var string|null
     */
    protected $customFontFamilyUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $customLogoUrl;
    /**
     * 
     *
     * @var CustomThemeOverride
     */
    protected $customThemeOverride;
    /**
     * 
     *
     * @var bool
     */
    protected $disableEndpointOnFailure = true;
    /**
     * 
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * 
     *
     * @var bool
     */
    protected $enableChannels = false;
    /**
     * 
     *
     * @var bool
     */
    protected $enableIntegrationManagement = false;
    /**
     * 
     *
     * @var bool
     */
    protected $enableTransformations = false;
    /**
     * 
     *
     * @var bool
     */
    protected $enforceHttps = true;
    /**
     * 
     *
     * @var bool
     */
    protected $eventCatalogPublished = false;
    /**
     * 
     *
     * @var bool
     */
    protected $readOnly = false;
    /**
     * 
     *
     * @return CustomColorPalette
     */
    public function getColorPaletteDark() : CustomColorPalette
    {
        return $this->colorPaletteDark;
    }
    /**
     * 
     *
     * @param CustomColorPalette $colorPaletteDark
     *
     * @return self
     */
    public function setColorPaletteDark(CustomColorPalette $colorPaletteDark) : self
    {
        $this->initialized['colorPaletteDark'] = true;
        $this->colorPaletteDark = $colorPaletteDark;
        return $this;
    }
    /**
     * 
     *
     * @return CustomColorPalette
     */
    public function getColorPaletteLight() : CustomColorPalette
    {
        return $this->colorPaletteLight;
    }
    /**
     * 
     *
     * @param CustomColorPalette $colorPaletteLight
     *
     * @return self
     */
    public function setColorPaletteLight(CustomColorPalette $colorPaletteLight) : self
    {
        $this->initialized['colorPaletteLight'] = true;
        $this->colorPaletteLight = $colorPaletteLight;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCustomBaseFontSize() : ?int
    {
        return $this->customBaseFontSize;
    }
    /**
     * 
     *
     * @param int|null $customBaseFontSize
     *
     * @return self
     */
    public function setCustomBaseFontSize(?int $customBaseFontSize) : self
    {
        $this->initialized['customBaseFontSize'] = true;
        $this->customBaseFontSize = $customBaseFontSize;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomColor() : string
    {
        return $this->customColor;
    }
    /**
     * 
     *
     * @param string $customColor
     *
     * @return self
     */
    public function setCustomColor(string $customColor) : self
    {
        $this->initialized['customColor'] = true;
        $this->customColor = $customColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomFontFamily() : ?string
    {
        return $this->customFontFamily;
    }
    /**
     * 
     *
     * @param string|null $customFontFamily
     *
     * @return self
     */
    public function setCustomFontFamily(?string $customFontFamily) : self
    {
        $this->initialized['customFontFamily'] = true;
        $this->customFontFamily = $customFontFamily;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomFontFamilyUrl() : ?string
    {
        return $this->customFontFamilyUrl;
    }
    /**
     * 
     *
     * @param string|null $customFontFamilyUrl
     *
     * @return self
     */
    public function setCustomFontFamilyUrl(?string $customFontFamilyUrl) : self
    {
        $this->initialized['customFontFamilyUrl'] = true;
        $this->customFontFamilyUrl = $customFontFamilyUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomLogoUrl() : ?string
    {
        return $this->customLogoUrl;
    }
    /**
     * 
     *
     * @param string|null $customLogoUrl
     *
     * @return self
     */
    public function setCustomLogoUrl(?string $customLogoUrl) : self
    {
        $this->initialized['customLogoUrl'] = true;
        $this->customLogoUrl = $customLogoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return CustomThemeOverride
     */
    public function getCustomThemeOverride() : CustomThemeOverride
    {
        return $this->customThemeOverride;
    }
    /**
     * 
     *
     * @param CustomThemeOverride $customThemeOverride
     *
     * @return self
     */
    public function setCustomThemeOverride(CustomThemeOverride $customThemeOverride) : self
    {
        $this->initialized['customThemeOverride'] = true;
        $this->customThemeOverride = $customThemeOverride;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDisableEndpointOnFailure() : bool
    {
        return $this->disableEndpointOnFailure;
    }
    /**
     * 
     *
     * @param bool $disableEndpointOnFailure
     *
     * @return self
     */
    public function setDisableEndpointOnFailure(bool $disableEndpointOnFailure) : self
    {
        $this->initialized['disableEndpointOnFailure'] = true;
        $this->disableEndpointOnFailure = $disableEndpointOnFailure;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName) : self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnableChannels() : bool
    {
        return $this->enableChannels;
    }
    /**
     * 
     *
     * @param bool $enableChannels
     *
     * @return self
     */
    public function setEnableChannels(bool $enableChannels) : self
    {
        $this->initialized['enableChannels'] = true;
        $this->enableChannels = $enableChannels;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnableIntegrationManagement() : bool
    {
        return $this->enableIntegrationManagement;
    }
    /**
     * 
     *
     * @param bool $enableIntegrationManagement
     *
     * @return self
     */
    public function setEnableIntegrationManagement(bool $enableIntegrationManagement) : self
    {
        $this->initialized['enableIntegrationManagement'] = true;
        $this->enableIntegrationManagement = $enableIntegrationManagement;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnableTransformations() : bool
    {
        return $this->enableTransformations;
    }
    /**
     * 
     *
     * @param bool $enableTransformations
     *
     * @return self
     */
    public function setEnableTransformations(bool $enableTransformations) : self
    {
        $this->initialized['enableTransformations'] = true;
        $this->enableTransformations = $enableTransformations;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnforceHttps() : bool
    {
        return $this->enforceHttps;
    }
    /**
     * 
     *
     * @param bool $enforceHttps
     *
     * @return self
     */
    public function setEnforceHttps(bool $enforceHttps) : self
    {
        $this->initialized['enforceHttps'] = true;
        $this->enforceHttps = $enforceHttps;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEventCatalogPublished() : bool
    {
        return $this->eventCatalogPublished;
    }
    /**
     * 
     *
     * @param bool $eventCatalogPublished
     *
     * @return self
     */
    public function setEventCatalogPublished(bool $eventCatalogPublished) : self
    {
        $this->initialized['eventCatalogPublished'] = true;
        $this->eventCatalogPublished = $eventCatalogPublished;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getReadOnly() : bool
    {
        return $this->readOnly;
    }
    /**
     * 
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly) : self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
}