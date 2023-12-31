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
class ListResponseEndpointOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Svix\\Internal\\Model\\ListResponseEndpointOut';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\ListResponseEndpointOut';
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
        $object = new \Svix\Internal\Model\ListResponseEndpointOut();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('data', $data)) {
            $values = array();
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Svix\\Internal\\Model\\EndpointOut', 'json', $context);
            }
            $object->setData($values);
            unset($data['data']);
        }
        if (\array_key_exists('done', $data)) {
            $object->setDone($data['done']);
            unset($data['done']);
        }
        if (\array_key_exists('iterator', $data) && $data['iterator'] !== null) {
            $object->setIterator($data['iterator']);
            unset($data['iterator']);
        }
        elseif (\array_key_exists('iterator', $data) && $data['iterator'] === null) {
            $object->setIterator(null);
        }
        if (\array_key_exists('prevIterator', $data) && $data['prevIterator'] !== null) {
            $object->setPrevIterator($data['prevIterator']);
            unset($data['prevIterator']);
        }
        elseif (\array_key_exists('prevIterator', $data) && $data['prevIterator'] === null) {
            $object->setPrevIterator(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $values = array();
        foreach ($object->getData() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['data'] = $values;
        $data['done'] = $object->getDone();
        if ($object->isInitialized('iterator') && null !== $object->getIterator()) {
            $data['iterator'] = $object->getIterator();
        }
        if ($object->isInitialized('prevIterator') && null !== $object->getPrevIterator()) {
            $data['prevIterator'] = $object->getPrevIterator();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Svix\\Internal\\Model\\ListResponseEndpointOut' => false);
    }
}