<?php

namespace Svix\Internal\Model;

class EventTypeImportOpenApiIn extends \ArrayObject
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
     * A pre-parsed JSON spec.
     *
     * @var array<string, array<string, mixed>>|null
     */
    protected $spec;
    /**
     * A string, parsed by the server as YAML or JSON.
     *
     * @var string|null
     */
    protected $specRaw;
    /**
     * A pre-parsed JSON spec.
     *
     * @return array<string, array<string, mixed>>|null
     */
    public function getSpec() : ?iterable
    {
        return $this->spec;
    }
    /**
     * A pre-parsed JSON spec.
     *
     * @param array<string, array<string, mixed>>|null $spec
     *
     * @return self
     */
    public function setSpec(?iterable $spec) : self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
    /**
     * A string, parsed by the server as YAML or JSON.
     *
     * @return string|null
     */
    public function getSpecRaw() : ?string
    {
        return $this->specRaw;
    }
    /**
     * A string, parsed by the server as YAML or JSON.
     *
     * @param string|null $specRaw
     *
     * @return self
     */
    public function setSpecRaw(?string $specRaw) : self
    {
        $this->initialized['specRaw'] = true;
        $this->specRaw = $specRaw;
        return $this;
    }
}