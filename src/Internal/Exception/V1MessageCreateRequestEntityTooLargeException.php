<?php

namespace Svix\Internal\Exception;

class V1MessageCreateRequestEntityTooLargeException extends RequestEntityTooLargeException
{
    /**
     * @var \Svix\Internal\Model\HttpErrorOut
     */
    private $httpErrorOut;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Svix\Internal\Model\HttpErrorOut $httpErrorOut, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Payload too large');
        $this->httpErrorOut = $httpErrorOut;
        $this->response = $response;
    }
    public function getHttpErrorOut() : \Svix\Internal\Model\HttpErrorOut
    {
        return $this->httpErrorOut;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}