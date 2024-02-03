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
    class GenerateOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\GenerateOut';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\GenerateOut';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\GenerateOut();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('choices', $data)) {
                $values = [];
                foreach ($data['choices'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Svix\\Internal\\Model\\CompletionChoice', 'json', $context);
                }
                $object->setChoices($values);
                unset($data['choices']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('model', $data)) {
                $object->setModel($data['model']);
                unset($data['model']);
            }
            if (\array_key_exists('object', $data)) {
                $object->setObject($data['object']);
                unset($data['object']);
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
            $values = [];
            foreach ($object->getChoices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['choices'] = $values;
            $data['created'] = $object->getCreated();
            $data['id'] = $object->getId();
            $data['model'] = $object->getModel();
            $data['object'] = $object->getObject();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\GenerateOut' => false];
        }
    }
} else {
    class GenerateOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\GenerateOut';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\GenerateOut';
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
            $object = new \Svix\Internal\Model\GenerateOut();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('choices', $data)) {
                $values = [];
                foreach ($data['choices'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Svix\\Internal\\Model\\CompletionChoice', 'json', $context);
                }
                $object->setChoices($values);
                unset($data['choices']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('model', $data)) {
                $object->setModel($data['model']);
                unset($data['model']);
            }
            if (\array_key_exists('object', $data)) {
                $object->setObject($data['object']);
                unset($data['object']);
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
            $values = [];
            foreach ($object->getChoices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['choices'] = $values;
            $data['created'] = $object->getCreated();
            $data['id'] = $object->getId();
            $data['model'] = $object->getModel();
            $data['object'] = $object->getObject();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\GenerateOut' => false];
        }
    }
}