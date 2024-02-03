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
    class MessageAttemptHeadersOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\MessageAttemptHeadersOut';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\MessageAttemptHeadersOut';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\MessageAttemptHeadersOut();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('responseHeaders', $data) && $data['responseHeaders'] !== null) {
                $values = [];
                foreach ($data['responseHeaders'] as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setResponseHeaders($values);
                unset($data['responseHeaders']);
            }
            elseif (\array_key_exists('responseHeaders', $data) && $data['responseHeaders'] === null) {
                $object->setResponseHeaders(null);
            }
            if (\array_key_exists('sensitive', $data)) {
                $values_2 = [];
                foreach ($data['sensitive'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setSensitive($values_2);
                unset($data['sensitive']);
            }
            if (\array_key_exists('sentHeaders', $data)) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['sentHeaders'] as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $object->setSentHeaders($values_3);
                unset($data['sentHeaders']);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('responseHeaders') && null !== $object->getResponseHeaders()) {
                $values = [];
                foreach ($object->getResponseHeaders() as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['responseHeaders'] = $values;
            }
            $values_2 = [];
            foreach ($object->getSensitive() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['sensitive'] = $values_2;
            $values_3 = [];
            foreach ($object->getSentHeaders() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $data['sentHeaders'] = $values_3;
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\MessageAttemptHeadersOut' => false];
        }
    }
} else {
    class MessageAttemptHeadersOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\MessageAttemptHeadersOut';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\MessageAttemptHeadersOut';
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
            $object = new \Svix\Internal\Model\MessageAttemptHeadersOut();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('responseHeaders', $data) && $data['responseHeaders'] !== null) {
                $values = [];
                foreach ($data['responseHeaders'] as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setResponseHeaders($values);
                unset($data['responseHeaders']);
            }
            elseif (\array_key_exists('responseHeaders', $data) && $data['responseHeaders'] === null) {
                $object->setResponseHeaders(null);
            }
            if (\array_key_exists('sensitive', $data)) {
                $values_2 = [];
                foreach ($data['sensitive'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setSensitive($values_2);
                unset($data['sensitive']);
            }
            if (\array_key_exists('sentHeaders', $data)) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['sentHeaders'] as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $object->setSentHeaders($values_3);
                unset($data['sentHeaders']);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
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
            if ($object->isInitialized('responseHeaders') && null !== $object->getResponseHeaders()) {
                $values = [];
                foreach ($object->getResponseHeaders() as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['responseHeaders'] = $values;
            }
            $values_2 = [];
            foreach ($object->getSensitive() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['sensitive'] = $values_2;
            $values_3 = [];
            foreach ($object->getSentHeaders() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $data['sentHeaders'] = $values_3;
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\MessageAttemptHeadersOut' => false];
        }
    }
}