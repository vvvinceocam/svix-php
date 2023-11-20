<?php

namespace Svix\Internal\Model;

class OauthPayloadIn extends \ArrayObject
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
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $redirectUri;
    /**
     * 
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRedirectUri() : string
    {
        return $this->redirectUri;
    }
    /**
     * 
     *
     * @param string $redirectUri
     *
     * @return self
     */
    public function setRedirectUri(string $redirectUri) : self
    {
        $this->initialized['redirectUri'] = true;
        $this->redirectUri = $redirectUri;
        return $this;
    }
}