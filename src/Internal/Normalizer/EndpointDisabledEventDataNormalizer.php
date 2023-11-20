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
class EndpointDisabledEventDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Svix\\Internal\\Model\\EndpointDisabledEventData';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\EndpointDisabledEventData';
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
        $object = new \Svix\Internal\Model\EndpointDisabledEventData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('appId', $data)) {
            $object->setAppId($data['appId']);
            unset($data['appId']);
        }
        if (\array_key_exists('appUid', $data) && $data['appUid'] !== null) {
            $object->setAppUid($data['appUid']);
            unset($data['appUid']);
        }
        elseif (\array_key_exists('appUid', $data) && $data['appUid'] === null) {
            $object->setAppUid(null);
        }
        if (\array_key_exists('endpointId', $data)) {
            $object->setEndpointId($data['endpointId']);
            unset($data['endpointId']);
        }
        if (\array_key_exists('endpointUid', $data) && $data['endpointUid'] !== null) {
            $object->setEndpointUid($data['endpointUid']);
            unset($data['endpointUid']);
        }
        elseif (\array_key_exists('endpointUid', $data) && $data['endpointUid'] === null) {
            $object->setEndpointUid(null);
        }
        if (\array_key_exists('failSince', $data)) {
            $object->setFailSince(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['failSince']));
            unset($data['failSince']);
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
        $data['appId'] = $object->getAppId();
        if ($object->isInitialized('appUid') && null !== $object->getAppUid()) {
            $data['appUid'] = $object->getAppUid();
        }
        $data['endpointId'] = $object->getEndpointId();
        if ($object->isInitialized('endpointUid') && null !== $object->getEndpointUid()) {
            $data['endpointUid'] = $object->getEndpointUid();
        }
        $data['failSince'] = $object->getFailSince()->format('Y-m-d\\TH:i:s.uP');
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Svix\\Internal\\Model\\EndpointDisabledEventData' => false);
    }
}