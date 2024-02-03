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
    class AttemptStatisticsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\AttemptStatisticsData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\AttemptStatisticsData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\AttemptStatisticsData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('failureCount', $data) && $data['failureCount'] !== null) {
                $values = [];
                foreach ($data['failureCount'] as $value) {
                    $values[] = $value;
                }
                $object->setFailureCount($values);
                unset($data['failureCount']);
            }
            elseif (\array_key_exists('failureCount', $data) && $data['failureCount'] === null) {
                $object->setFailureCount(null);
            }
            if (\array_key_exists('successCount', $data) && $data['successCount'] !== null) {
                $values_1 = [];
                foreach ($data['successCount'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSuccessCount($values_1);
                unset($data['successCount']);
            }
            elseif (\array_key_exists('successCount', $data) && $data['successCount'] === null) {
                $object->setSuccessCount(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('failureCount') && null !== $object->getFailureCount()) {
                $values = [];
                foreach ($object->getFailureCount() as $value) {
                    $values[] = $value;
                }
                $data['failureCount'] = $values;
            }
            if ($object->isInitialized('successCount') && null !== $object->getSuccessCount()) {
                $values_1 = [];
                foreach ($object->getSuccessCount() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['successCount'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\AttemptStatisticsData' => false];
        }
    }
} else {
    class AttemptStatisticsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\AttemptStatisticsData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\AttemptStatisticsData';
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
            $object = new \Svix\Internal\Model\AttemptStatisticsData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('failureCount', $data) && $data['failureCount'] !== null) {
                $values = [];
                foreach ($data['failureCount'] as $value) {
                    $values[] = $value;
                }
                $object->setFailureCount($values);
                unset($data['failureCount']);
            }
            elseif (\array_key_exists('failureCount', $data) && $data['failureCount'] === null) {
                $object->setFailureCount(null);
            }
            if (\array_key_exists('successCount', $data) && $data['successCount'] !== null) {
                $values_1 = [];
                foreach ($data['successCount'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSuccessCount($values_1);
                unset($data['successCount']);
            }
            elseif (\array_key_exists('successCount', $data) && $data['successCount'] === null) {
                $object->setSuccessCount(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('failureCount') && null !== $object->getFailureCount()) {
                $values = [];
                foreach ($object->getFailureCount() as $value) {
                    $values[] = $value;
                }
                $data['failureCount'] = $values;
            }
            if ($object->isInitialized('successCount') && null !== $object->getSuccessCount()) {
                $values_1 = [];
                foreach ($object->getSuccessCount() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['successCount'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\AttemptStatisticsData' => false];
        }
    }
}