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
    class MessageEndpointOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\MessageEndpointOut';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\MessageEndpointOut';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\MessageEndpointOut();
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
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['createdAt']));
                unset($data['createdAt']);
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
                $values_1 = [];
                foreach ($data['filterTypes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setFilterTypes($values_1);
                unset($data['filterTypes']);
            }
            elseif (\array_key_exists('filterTypes', $data) && $data['filterTypes'] === null) {
                $object->setFilterTypes(null);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('nextAttempt', $data) && $data['nextAttempt'] !== null) {
                $object->setNextAttempt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['nextAttempt']));
                unset($data['nextAttempt']);
            }
            elseif (\array_key_exists('nextAttempt', $data) && $data['nextAttempt'] === null) {
                $object->setNextAttempt(null);
            }
            if (\array_key_exists('rateLimit', $data) && $data['rateLimit'] !== null) {
                $object->setRateLimit($data['rateLimit']);
                unset($data['rateLimit']);
            }
            elseif (\array_key_exists('rateLimit', $data) && $data['rateLimit'] === null) {
                $object->setRateLimit(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
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
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
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
            if ($object->isInitialized('channels') && null !== $object->getChannels()) {
                $values = [];
                foreach ($object->getChannels() as $value) {
                    $values[] = $value;
                }
                $data['channels'] = $values;
            }
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
            $data['description'] = $object->getDescription();
            if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
                $data['disabled'] = $object->getDisabled();
            }
            if ($object->isInitialized('filterTypes') && null !== $object->getFilterTypes()) {
                $values_1 = [];
                foreach ($object->getFilterTypes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['filterTypes'] = $values_1;
            }
            $data['id'] = $object->getId();
            if ($object->isInitialized('nextAttempt') && null !== $object->getNextAttempt()) {
                $data['nextAttempt'] = $object->getNextAttempt()->format('Y-m-d\\TH:i:s.uP');
            }
            if ($object->isInitialized('rateLimit') && null !== $object->getRateLimit()) {
                $data['rateLimit'] = $object->getRateLimit();
            }
            $data['status'] = $object->getStatus();
            if ($object->isInitialized('uid') && null !== $object->getUid()) {
                $data['uid'] = $object->getUid();
            }
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
            $data['url'] = $object->getUrl();
            $data['version'] = $object->getVersion();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\MessageEndpointOut' => false];
        }
    }
} else {
    class MessageEndpointOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\MessageEndpointOut';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\MessageEndpointOut';
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
            $object = new \Svix\Internal\Model\MessageEndpointOut();
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
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['createdAt']));
                unset($data['createdAt']);
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
                $values_1 = [];
                foreach ($data['filterTypes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setFilterTypes($values_1);
                unset($data['filterTypes']);
            }
            elseif (\array_key_exists('filterTypes', $data) && $data['filterTypes'] === null) {
                $object->setFilterTypes(null);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('nextAttempt', $data) && $data['nextAttempt'] !== null) {
                $object->setNextAttempt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['nextAttempt']));
                unset($data['nextAttempt']);
            }
            elseif (\array_key_exists('nextAttempt', $data) && $data['nextAttempt'] === null) {
                $object->setNextAttempt(null);
            }
            if (\array_key_exists('rateLimit', $data) && $data['rateLimit'] !== null) {
                $object->setRateLimit($data['rateLimit']);
                unset($data['rateLimit']);
            }
            elseif (\array_key_exists('rateLimit', $data) && $data['rateLimit'] === null) {
                $object->setRateLimit(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
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
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
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
            if ($object->isInitialized('channels') && null !== $object->getChannels()) {
                $values = [];
                foreach ($object->getChannels() as $value) {
                    $values[] = $value;
                }
                $data['channels'] = $values;
            }
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
            $data['description'] = $object->getDescription();
            if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
                $data['disabled'] = $object->getDisabled();
            }
            if ($object->isInitialized('filterTypes') && null !== $object->getFilterTypes()) {
                $values_1 = [];
                foreach ($object->getFilterTypes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['filterTypes'] = $values_1;
            }
            $data['id'] = $object->getId();
            if ($object->isInitialized('nextAttempt') && null !== $object->getNextAttempt()) {
                $data['nextAttempt'] = $object->getNextAttempt()->format('Y-m-d\\TH:i:s.uP');
            }
            if ($object->isInitialized('rateLimit') && null !== $object->getRateLimit()) {
                $data['rateLimit'] = $object->getRateLimit();
            }
            $data['status'] = $object->getStatus();
            if ($object->isInitialized('uid') && null !== $object->getUid()) {
                $data['uid'] = $object->getUid();
            }
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
            $data['url'] = $object->getUrl();
            $data['version'] = $object->getVersion();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\MessageEndpointOut' => false];
        }
    }
}