<?php

namespace Svix\Internal\Model;

class TemplateIn extends \ArrayObject
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
    protected $description = '';
    /**
     * 
     *
     * @var string|null
     */
    protected $featureFlag;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $filterTypes;
    /**
     * 
     *
     * @var string
     */
    protected $instructions = '';
    /**
     * 
     *
     * @var string|null
     */
    protected $instructionsLink;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string
     */
    protected $logo;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $transformation;
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFeatureFlag() : ?string
    {
        return $this->featureFlag;
    }
    /**
     * 
     *
     * @param string|null $featureFlag
     *
     * @return self
     */
    public function setFeatureFlag(?string $featureFlag) : self
    {
        $this->initialized['featureFlag'] = true;
        $this->featureFlag = $featureFlag;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getFilterTypes() : ?array
    {
        return $this->filterTypes;
    }
    /**
     * 
     *
     * @param string[]|null $filterTypes
     *
     * @return self
     */
    public function setFilterTypes(?array $filterTypes) : self
    {
        $this->initialized['filterTypes'] = true;
        $this->filterTypes = $filterTypes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInstructions() : string
    {
        return $this->instructions;
    }
    /**
     * 
     *
     * @param string $instructions
     *
     * @return self
     */
    public function setInstructions(string $instructions) : self
    {
        $this->initialized['instructions'] = true;
        $this->instructions = $instructions;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInstructionsLink() : ?string
    {
        return $this->instructionsLink;
    }
    /**
     * 
     *
     * @param string|null $instructionsLink
     *
     * @return self
     */
    public function setInstructionsLink(?string $instructionsLink) : self
    {
        $this->initialized['instructionsLink'] = true;
        $this->instructionsLink = $instructionsLink;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLogo() : string
    {
        return $this->logo;
    }
    /**
     * 
     *
     * @param string $logo
     *
     * @return self
     */
    public function setLogo(string $logo) : self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransformation() : string
    {
        return $this->transformation;
    }
    /**
     * 
     *
     * @param string $transformation
     *
     * @return self
     */
    public function setTransformation(string $transformation) : self
    {
        $this->initialized['transformation'] = true;
        $this->transformation = $transformation;
        return $this;
    }
}