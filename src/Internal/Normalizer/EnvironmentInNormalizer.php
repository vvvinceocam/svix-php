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
    class EnvironmentInNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\EnvironmentIn';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\EnvironmentIn';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\EnvironmentIn();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['createdAt']));
                unset($data['createdAt']);
            }
            if (\array_key_exists('eventTypes', $data) && $data['eventTypes'] !== null) {
                $values = [];
                foreach ($data['eventTypes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Svix\\Internal\\Model\\EventTypeIn', 'json', $context);
                }
                $object->setEventTypes($values);
                unset($data['eventTypes']);
            }
            elseif (\array_key_exists('eventTypes', $data) && $data['eventTypes'] === null) {
                $object->setEventTypes(null);
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], 'Svix\\Internal\\Model\\SettingsIn', 'json', $context));
                unset($data['settings']);
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
            if ($object->isInitialized('eventTypes') && null !== $object->getEventTypes()) {
                $values = [];
                foreach ($object->getEventTypes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['eventTypes'] = $values;
            }
            if ($object->isInitialized('settings') && null !== $object->getSettings()) {
                $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            }
            $data['version'] = $object->getVersion();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\EnvironmentIn' => false];
        }
    }
} else {
    class EnvironmentInNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\EnvironmentIn';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\EnvironmentIn';
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
            $object = new \Svix\Internal\Model\EnvironmentIn();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['createdAt']));
                unset($data['createdAt']);
            }
            if (\array_key_exists('eventTypes', $data) && $data['eventTypes'] !== null) {
                $values = [];
                foreach ($data['eventTypes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Svix\\Internal\\Model\\EventTypeIn', 'json', $context);
                }
                $object->setEventTypes($values);
                unset($data['eventTypes']);
            }
            elseif (\array_key_exists('eventTypes', $data) && $data['eventTypes'] === null) {
                $object->setEventTypes(null);
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], 'Svix\\Internal\\Model\\SettingsIn', 'json', $context));
                unset($data['settings']);
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
            if ($object->isInitialized('eventTypes') && null !== $object->getEventTypes()) {
                $values = [];
                foreach ($object->getEventTypes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['eventTypes'] = $values;
            }
            if ($object->isInitialized('settings') && null !== $object->getSettings()) {
                $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            }
            $data['version'] = $object->getVersion();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\EnvironmentIn' => false];
        }
    }
}