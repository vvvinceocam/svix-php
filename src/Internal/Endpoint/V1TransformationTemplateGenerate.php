<?php

namespace Svix\Internal\Endpoint;

class V1TransformationTemplateGenerate extends \Svix\Internal\Runtime\Client\BaseEndpoint implements \Svix\Internal\Runtime\Client\Endpoint
{
    /**
     * Use OpenAI's Completion API to generate code for a transformation template
     *
     * @param \Svix\Internal\Model\GenerateIn $requestBody 
     * @param array $headerParameters {
     *     @var string $idempotency-key The request's idempotency key
     * }
     */
    public function __construct(\Svix\Internal\Model\GenerateIn $requestBody, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Svix\Internal\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/api/v1/transformation-template/generate';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Svix\Internal\Model\GenerateIn) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['idempotency-key']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('idempotency-key', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateBadRequestException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateUnauthorizedException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateForbiddenException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateNotFoundException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateConflictException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateUnprocessableEntityException
     * @throws \Svix\Internal\Exception\V1TransformationTemplateGenerateTooManyRequestsException
     *
     * @return null|\Svix\Internal\Model\GenerateOut
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Svix\\Internal\\Model\\GenerateOut', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1TransformationTemplateGenerateBadRequestException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1TransformationTemplateGenerateUnauthorizedException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1TransformationTemplateGenerateForbiddenException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1TransformationTemplateGenerateNotFoundException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1TransformationTemplateGenerateConflictException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1TransformationTemplateGenerateUnprocessableEntityException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HTTPValidationError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Svix\Internal\Exception\V1TransformationTemplateGenerateTooManyRequestsException($serializer->deserialize($body, 'Svix\\Internal\\Model\\HttpErrorOut', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTPBearer'];
    }
}