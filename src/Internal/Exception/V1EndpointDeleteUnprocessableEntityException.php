<?php

namespace Svix\Internal\Exception;

class V1EndpointDeleteUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Svix\Internal\Model\HTTPValidationError
     */
    private $hTTPValidationError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Svix\Internal\Model\HTTPValidationError $hTTPValidationError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Validation Error');
        $this->hTTPValidationError = $hTTPValidationError;
        $this->response = $response;
    }
    public function getHTTPValidationError() : \Svix\Internal\Model\HTTPValidationError
    {
        return $this->hTTPValidationError;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}