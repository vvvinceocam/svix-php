<?php

namespace Svix\Internal\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Svix\Internal\Runtime\Normalizer\CheckArray;
use Svix\Internal\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MessageAttemptOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Svix\\Internal\\Model\\MessageAttemptOut';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\MessageAttemptOut';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Svix\Internal\Model\MessageAttemptOut();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('endpointId', $data)) {
            $object->setEndpointId($data['endpointId']);
            unset($data['endpointId']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('msgId', $data)) {
            $object->setMsgId($data['msgId']);
            unset($data['msgId']);
        }
        if (\array_key_exists('response', $data)) {
            $object->setResponse($data['response']);
            unset($data['response']);
        }
        if (\array_key_exists('responseStatusCode', $data)) {
            $object->setResponseStatusCode($data['responseStatusCode']);
            unset($data['responseStatusCode']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['timestamp']));
            unset($data['timestamp']);
        }
        if (\array_key_exists('triggerType', $data)) {
            $object->setTriggerType($data['triggerType']);
            unset($data['triggerType']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['endpointId'] = $object->getEndpointId();
        $data['id'] = $object->getId();
        $data['msgId'] = $object->getMsgId();
        $data['response'] = $object->getResponse();
        $data['responseStatusCode'] = $object->getResponseStatusCode();
        $data['status'] = $object->getStatus();
        $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:s.uP');
        $data['triggerType'] = $object->getTriggerType();
        $data['url'] = $object->getUrl();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Svix\\Internal\\Model\\MessageAttemptOut' => false);
    }
}