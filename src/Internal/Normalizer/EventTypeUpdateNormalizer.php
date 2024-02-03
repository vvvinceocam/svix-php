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
    class EventTypeUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\EventTypeUpdate';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\EventTypeUpdate';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\EventTypeUpdate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('archived', $data)) {
                $object->setArchived($data['archived']);
                unset($data['archived']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('featureFlag', $data) && $data['featureFlag'] !== null) {
                $object->setFeatureFlag($data['featureFlag']);
                unset($data['featureFlag']);
            }
            elseif (\array_key_exists('featureFlag', $data) && $data['featureFlag'] === null) {
                $object->setFeatureFlag(null);
            }
            if (\array_key_exists('schemas', $data) && $data['schemas'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['schemas'] as $key => $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key_1 => $value_1) {
                        $values_1[$key_1] = $value_1;
                    }
                    $values[$key] = $values_1;
                }
                $object->setSchemas($values);
                unset($data['schemas']);
            }
            elseif (\array_key_exists('schemas', $data) && $data['schemas'] === null) {
                $object->setSchemas(null);
            }
            foreach ($data as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('archived') && null !== $object->getArchived()) {
                $data['archived'] = $object->getArchived();
            }
            $data['description'] = $object->getDescription();
            if ($object->isInitialized('featureFlag') && null !== $object->getFeatureFlag()) {
                $data['featureFlag'] = $object->getFeatureFlag();
            }
            if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
                $values = [];
                foreach ($object->getSchemas() as $key => $value) {
                    $values_1 = [];
                    foreach ($value as $key_1 => $value_1) {
                        $values_1[$key_1] = $value_1;
                    }
                    $values[$key] = $values_1;
                }
                $data['schemas'] = $values;
            }
            foreach ($object as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\EventTypeUpdate' => false];
        }
    }
} else {
    class EventTypeUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\EventTypeUpdate';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\EventTypeUpdate';
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
            $object = new \Svix\Internal\Model\EventTypeUpdate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('archived', $data)) {
                $object->setArchived($data['archived']);
                unset($data['archived']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('featureFlag', $data) && $data['featureFlag'] !== null) {
                $object->setFeatureFlag($data['featureFlag']);
                unset($data['featureFlag']);
            }
            elseif (\array_key_exists('featureFlag', $data) && $data['featureFlag'] === null) {
                $object->setFeatureFlag(null);
            }
            if (\array_key_exists('schemas', $data) && $data['schemas'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['schemas'] as $key => $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key_1 => $value_1) {
                        $values_1[$key_1] = $value_1;
                    }
                    $values[$key] = $values_1;
                }
                $object->setSchemas($values);
                unset($data['schemas']);
            }
            elseif (\array_key_exists('schemas', $data) && $data['schemas'] === null) {
                $object->setSchemas(null);
            }
            foreach ($data as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_2;
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
            if ($object->isInitialized('archived') && null !== $object->getArchived()) {
                $data['archived'] = $object->getArchived();
            }
            $data['description'] = $object->getDescription();
            if ($object->isInitialized('featureFlag') && null !== $object->getFeatureFlag()) {
                $data['featureFlag'] = $object->getFeatureFlag();
            }
            if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
                $values = [];
                foreach ($object->getSchemas() as $key => $value) {
                    $values_1 = [];
                    foreach ($value as $key_1 => $value_1) {
                        $values_1[$key_1] = $value_1;
                    }
                    $values[$key] = $values_1;
                }
                $data['schemas'] = $values;
            }
            foreach ($object as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\EventTypeUpdate' => false];
        }
    }
}