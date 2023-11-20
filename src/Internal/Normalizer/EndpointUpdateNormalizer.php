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
class EndpointUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Svix\\Internal\\Model\\EndpointUpdate';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\EndpointUpdate';
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
        $object = new \Svix\Internal\Model\EndpointUpdate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channels', $data) && $data['channels'] !== null) {
            $values = array();
            foreach ($data['channels'] as $value) {
                $values[] = $value;
            }
            $object->setChannels($values);
            unset($data['channels']);
        }
        elseif (\array_key_exists('channels', $data) && $data['channels'] === null) {
            $object->setChannels(null);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('disabled', $data)) {
            $object->setDisabled($data['disabled']);
            unset($data['disabled']);
        }
        if (\array_key_exists('filterTypes', $data) && $data['filterTypes'] !== null) {
            $values_1 = array();
            foreach ($data['filterTypes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFilterTypes($values_1);
            unset($data['filterTypes']);
        }
        elseif (\array_key_exists('filterTypes', $data) && $data['filterTypes'] === null) {
            $object->setFilterTypes(null);
        }
        if (\array_key_exists('metadata', $data)) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setMetadata($values_2);
            unset($data['metadata']);
        }
        if (\array_key_exists('rateLimit', $data) && $data['rateLimit'] !== null) {
            $object->setRateLimit($data['rateLimit']);
            unset($data['rateLimit']);
        }
        elseif (\array_key_exists('rateLimit', $data) && $data['rateLimit'] === null) {
            $object->setRateLimit(null);
        }
        if (\array_key_exists('uid', $data) && $data['uid'] !== null) {
            $object->setUid($data['uid']);
            unset($data['uid']);
        }
        elseif (\array_key_exists('uid', $data) && $data['uid'] === null) {
            $object->setUid(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
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
        if ($object->isInitialized('channels') && null !== $object->getChannels()) {
            $values = array();
            foreach ($object->getChannels() as $value) {
                $values[] = $value;
            }
            $data['channels'] = $values;
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
            $data['disabled'] = $object->getDisabled();
        }
        if ($object->isInitialized('filterTypes') && null !== $object->getFilterTypes()) {
            $values_1 = array();
            foreach ($object->getFilterTypes() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['filterTypes'] = $values_1;
        }
        if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
            $values_2 = array();
            foreach ($object->getMetadata() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['metadata'] = $values_2;
        }
        if ($object->isInitialized('rateLimit') && null !== $object->getRateLimit()) {
            $data['rateLimit'] = $object->getRateLimit();
        }
        if ($object->isInitialized('uid') && null !== $object->getUid()) {
            $data['uid'] = $object->getUid();
        }
        $data['url'] = $object->getUrl();
        if ($object->isInitialized('version') && null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        foreach ($object as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_3;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Svix\\Internal\\Model\\EndpointUpdate' => false);
    }
}