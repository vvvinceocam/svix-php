<?php

namespace Svix\Internal\Model;

class OauthPayloadOut extends \ArrayObject
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
    protected $channel;
    /**
     * 
     *
     * @var string|null
     */
    protected $error;
    /**
     * 
     *
     * @var string|null
     */
    protected $incomingWebhookUrl;
    /**
     * 
     *
     * @return string|null
     */
    public function getChannel() : ?string
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param string|null $channel
     *
     * @return self
     */
    public function setChannel(?string $channel) : self
    {
        $this->initialized['channel'] = true;
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIncomingWebhookUrl() : ?string
    {
        return $this->incomingWebhookUrl;
    }
    /**
     * 
     *
     * @param string|null $incomingWebhookUrl
     *
     * @return self
     */
    public function setIncomingWebhookUrl(?string $incomingWebhookUrl) : self
    {
        $this->initialized['incomingWebhookUrl'] = true;
        $this->incomingWebhookUrl = $incomingWebhookUrl;
        return $this;
    }
}