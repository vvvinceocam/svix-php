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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class EndpointTransformationSimulateInNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\EndpointTransformationSimulateIn';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\EndpointTransformationSimulateIn';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\EndpointTransformationSimulateIn();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channels', $data) && $data['channels'] !== null) {
                $values = [];
                foreach ($data['channels'] as $value) {
                    $values[] = $value;
                }
                $object->setChannels($values);
                unset($data['channels']);
            }
            elseif (\array_key_exists('channels', $data) && $data['channels'] === null) {
                $object->setChannels(null);
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
                unset($data['code']);
            }
            if (\array_key_exists('eventType', $data)) {
                $object->setEventType($data['eventType']);
                unset($data['eventType']);
            }
            if (\array_key_exists('payload', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['payload'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setPayload($values_1);
                unset($data['payload']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('channels') && null !== $object->getChannels()) {
                $values = [];
                foreach ($object->getChannels() as $value) {
                    $values[] = $value;
                }
                $data['channels'] = $values;
            }
            $data['code'] = $object->getCode();
            $data['eventType'] = $object->getEventType();
            $values_1 = [];
            foreach ($object->getPayload() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['payload'] = $values_1;
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\EndpointTransformationSimulateIn' => false];
        }
    }
} else {
    class EndpointTransformationSimulateInNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\EndpointTransformationSimulateIn';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\EndpointTransformationSimulateIn';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\EndpointTransformationSimulateIn();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channels', $data) && $data['channels'] !== null) {
                $values = [];
                foreach ($data['channels'] as $value) {
                    $values[] = $value;
                }
                $object->setChannels($values);
                unset($data['channels']);
            }
            elseif (\array_key_exists('channels', $data) && $data['channels'] === null) {
                $object->setChannels(null);
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
                unset($data['code']);
            }
            if (\array_key_exists('eventType', $data)) {
                $object->setEventType($data['eventType']);
                unset($data['eventType']);
            }
            if (\array_key_exists('payload', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['payload'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setPayload($values_1);
                unset($data['payload']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('channels') && null !== $object->getChannels()) {
                $values = [];
                foreach ($object->getChannels() as $value) {
                    $values[] = $value;
                }
                $data['channels'] = $values;
            }
            $data['code'] = $object->getCode();
            $data['eventType'] = $object->getEventType();
            $values_1 = [];
            foreach ($object->getPayload() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['payload'] = $values_1;
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\EndpointTransformationSimulateIn' => false];
        }
    }
}