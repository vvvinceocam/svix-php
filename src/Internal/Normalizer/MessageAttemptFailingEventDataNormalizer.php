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
    class MessageAttemptFailingEventDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\MessageAttemptFailingEventData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\MessageAttemptFailingEventData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\MessageAttemptFailingEventData();
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
            if (\array_key_exists('lastAttempt', $data)) {
                $object->setLastAttempt($this->denormalizer->denormalize($data['lastAttempt'], 'Svix\\Internal\\Model\\MessageAttemptFailedData', 'json', $context));
                unset($data['lastAttempt']);
            }
            if (\array_key_exists('msgEventId', $data) && $data['msgEventId'] !== null) {
                $object->setMsgEventId($data['msgEventId']);
                unset($data['msgEventId']);
            }
            elseif (\array_key_exists('msgEventId', $data) && $data['msgEventId'] === null) {
                $object->setMsgEventId(null);
            }
            if (\array_key_exists('msgId', $data)) {
                $object->setMsgId($data['msgId']);
                unset($data['msgId']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['appId'] = $object->getAppId();
            if ($object->isInitialized('appUid') && null !== $object->getAppUid()) {
                $data['appUid'] = $object->getAppUid();
            }
            $data['endpointId'] = $object->getEndpointId();
            $data['lastAttempt'] = $this->normalizer->normalize($object->getLastAttempt(), 'json', $context);
            if ($object->isInitialized('msgEventId') && null !== $object->getMsgEventId()) {
                $data['msgEventId'] = $object->getMsgEventId();
            }
            $data['msgId'] = $object->getMsgId();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\MessageAttemptFailingEventData' => false];
        }
    }
} else {
    class MessageAttemptFailingEventDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\MessageAttemptFailingEventData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\MessageAttemptFailingEventData';
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
            $object = new \Svix\Internal\Model\MessageAttemptFailingEventData();
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
            if (\array_key_exists('lastAttempt', $data)) {
                $object->setLastAttempt($this->denormalizer->denormalize($data['lastAttempt'], 'Svix\\Internal\\Model\\MessageAttemptFailedData', 'json', $context));
                unset($data['lastAttempt']);
            }
            if (\array_key_exists('msgEventId', $data) && $data['msgEventId'] !== null) {
                $object->setMsgEventId($data['msgEventId']);
                unset($data['msgEventId']);
            }
            elseif (\array_key_exists('msgEventId', $data) && $data['msgEventId'] === null) {
                $object->setMsgEventId(null);
            }
            if (\array_key_exists('msgId', $data)) {
                $object->setMsgId($data['msgId']);
                unset($data['msgId']);
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['appId'] = $object->getAppId();
            if ($object->isInitialized('appUid') && null !== $object->getAppUid()) {
                $data['appUid'] = $object->getAppUid();
            }
            $data['endpointId'] = $object->getEndpointId();
            $data['lastAttempt'] = $this->normalizer->normalize($object->getLastAttempt(), 'json', $context);
            if ($object->isInitialized('msgEventId') && null !== $object->getMsgEventId()) {
                $data['msgEventId'] = $object->getMsgEventId();
            }
            $data['msgId'] = $object->getMsgId();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\MessageAttemptFailingEventData' => false];
        }
    }
}