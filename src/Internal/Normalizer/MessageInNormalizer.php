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
    class MessageInNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\MessageIn';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\MessageIn';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\MessageIn();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('application', $data)) {
                $object->setApplication($this->denormalizer->denormalize($data['application'], 'Svix\\Internal\\Model\\ApplicationIn', 'json', $context));
                unset($data['application']);
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
            if (\array_key_exists('eventId', $data) && $data['eventId'] !== null) {
                $object->setEventId($data['eventId']);
                unset($data['eventId']);
            }
            elseif (\array_key_exists('eventId', $data) && $data['eventId'] === null) {
                $object->setEventId(null);
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
            if (\array_key_exists('payloadRetentionPeriod', $data)) {
                $object->setPayloadRetentionPeriod($data['payloadRetentionPeriod']);
                unset($data['payloadRetentionPeriod']);
            }
            if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
                $values_2 = [];
                foreach ($data['tags'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setTags($values_2);
                unset($data['tags']);
            }
            elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
                $object->setTags(null);
            }
            if (\array_key_exists('transformationsParams', $data) && $data['transformationsParams'] !== null) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['transformationsParams'] as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $object->setTransformationsParams($values_3);
                unset($data['transformationsParams']);
            }
            elseif (\array_key_exists('transformationsParams', $data) && $data['transformationsParams'] === null) {
                $object->setTransformationsParams(null);
            }
            foreach ($data as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('application') && null !== $object->getApplication()) {
                $data['application'] = $this->normalizer->normalize($object->getApplication(), 'json', $context);
            }
            if ($object->isInitialized('channels') && null !== $object->getChannels()) {
                $values = [];
                foreach ($object->getChannels() as $value) {
                    $values[] = $value;
                }
                $data['channels'] = $values;
            }
            if ($object->isInitialized('eventId') && null !== $object->getEventId()) {
                $data['eventId'] = $object->getEventId();
            }
            $data['eventType'] = $object->getEventType();
            $values_1 = [];
            foreach ($object->getPayload() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['payload'] = $values_1;
            if ($object->isInitialized('payloadRetentionPeriod') && null !== $object->getPayloadRetentionPeriod()) {
                $data['payloadRetentionPeriod'] = $object->getPayloadRetentionPeriod();
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_2 = [];
                foreach ($object->getTags() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['tags'] = $values_2;
            }
            if ($object->isInitialized('transformationsParams') && null !== $object->getTransformationsParams()) {
                $values_3 = [];
                foreach ($object->getTransformationsParams() as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $data['transformationsParams'] = $values_3;
            }
            foreach ($object as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\MessageIn' => false];
        }
    }
} else {
    class MessageInNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\MessageIn';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\MessageIn';
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
            $object = new \Svix\Internal\Model\MessageIn();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('application', $data)) {
                $object->setApplication($this->denormalizer->denormalize($data['application'], 'Svix\\Internal\\Model\\ApplicationIn', 'json', $context));
                unset($data['application']);
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
            if (\array_key_exists('eventId', $data) && $data['eventId'] !== null) {
                $object->setEventId($data['eventId']);
                unset($data['eventId']);
            }
            elseif (\array_key_exists('eventId', $data) && $data['eventId'] === null) {
                $object->setEventId(null);
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
            if (\array_key_exists('payloadRetentionPeriod', $data)) {
                $object->setPayloadRetentionPeriod($data['payloadRetentionPeriod']);
                unset($data['payloadRetentionPeriod']);
            }
            if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
                $values_2 = [];
                foreach ($data['tags'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setTags($values_2);
                unset($data['tags']);
            }
            elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
                $object->setTags(null);
            }
            if (\array_key_exists('transformationsParams', $data) && $data['transformationsParams'] !== null) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['transformationsParams'] as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $object->setTransformationsParams($values_3);
                unset($data['transformationsParams']);
            }
            elseif (\array_key_exists('transformationsParams', $data) && $data['transformationsParams'] === null) {
                $object->setTransformationsParams(null);
            }
            foreach ($data as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_4;
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
            if ($object->isInitialized('application') && null !== $object->getApplication()) {
                $data['application'] = $this->normalizer->normalize($object->getApplication(), 'json', $context);
            }
            if ($object->isInitialized('channels') && null !== $object->getChannels()) {
                $values = [];
                foreach ($object->getChannels() as $value) {
                    $values[] = $value;
                }
                $data['channels'] = $values;
            }
            if ($object->isInitialized('eventId') && null !== $object->getEventId()) {
                $data['eventId'] = $object->getEventId();
            }
            $data['eventType'] = $object->getEventType();
            $values_1 = [];
            foreach ($object->getPayload() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['payload'] = $values_1;
            if ($object->isInitialized('payloadRetentionPeriod') && null !== $object->getPayloadRetentionPeriod()) {
                $data['payloadRetentionPeriod'] = $object->getPayloadRetentionPeriod();
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_2 = [];
                foreach ($object->getTags() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['tags'] = $values_2;
            }
            if ($object->isInitialized('transformationsParams') && null !== $object->getTransformationsParams()) {
                $values_3 = [];
                foreach ($object->getTransformationsParams() as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $data['transformationsParams'] = $values_3;
            }
            foreach ($object as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\MessageIn' => false];
        }
    }
}