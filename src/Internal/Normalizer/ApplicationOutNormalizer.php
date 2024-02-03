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
    class ApplicationOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\ApplicationOut';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\ApplicationOut';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\ApplicationOut();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['createdAt']));
                unset($data['createdAt']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('metadata', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['metadata'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setMetadata($values);
                unset($data['metadata']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
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
            if (\array_key_exists('updatedAt', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updatedAt']));
                unset($data['updatedAt']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
            $data['id'] = $object->getId();
            $values = [];
            foreach ($object->getMetadata() as $key => $value) {
                $values[$key] = $value;
            }
            $data['metadata'] = $values;
            $data['name'] = $object->getName();
            if ($object->isInitialized('rateLimit') && null !== $object->getRateLimit()) {
                $data['rateLimit'] = $object->getRateLimit();
            }
            if ($object->isInitialized('uid') && null !== $object->getUid()) {
                $data['uid'] = $object->getUid();
            }
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\ApplicationOut' => false];
        }
    }
} else {
    class ApplicationOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\ApplicationOut';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\ApplicationOut';
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
            $object = new \Svix\Internal\Model\ApplicationOut();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['createdAt']));
                unset($data['createdAt']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('metadata', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['metadata'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setMetadata($values);
                unset($data['metadata']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
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
            if (\array_key_exists('updatedAt', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updatedAt']));
                unset($data['updatedAt']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
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
            $data['id'] = $object->getId();
            $values = [];
            foreach ($object->getMetadata() as $key => $value) {
                $values[$key] = $value;
            }
            $data['metadata'] = $values;
            $data['name'] = $object->getName();
            if ($object->isInitialized('rateLimit') && null !== $object->getRateLimit()) {
                $data['rateLimit'] = $object->getRateLimit();
            }
            if ($object->isInitialized('uid') && null !== $object->getUid()) {
                $data['uid'] = $object->getUid();
            }
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\ApplicationOut' => false];
        }
    }
}