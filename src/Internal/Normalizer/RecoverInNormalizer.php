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
    class RecoverInNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\RecoverIn';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\RecoverIn';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\RecoverIn();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('since', $data)) {
                $object->setSince(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['since']));
                unset($data['since']);
            }
            if (\array_key_exists('until', $data) && $data['until'] !== null) {
                $object->setUntil(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['until']));
                unset($data['until']);
            }
            elseif (\array_key_exists('until', $data) && $data['until'] === null) {
                $object->setUntil(null);
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
            $data['since'] = $object->getSince()->format('Y-m-d\\TH:i:s.uP');
            if ($object->isInitialized('until') && null !== $object->getUntil()) {
                $data['until'] = $object->getUntil()->format('Y-m-d\\TH:i:s.uP');
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\RecoverIn' => false];
        }
    }
} else {
    class RecoverInNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\RecoverIn';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\RecoverIn';
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
            $object = new \Svix\Internal\Model\RecoverIn();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('since', $data)) {
                $object->setSince(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['since']));
                unset($data['since']);
            }
            if (\array_key_exists('until', $data) && $data['until'] !== null) {
                $object->setUntil(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['until']));
                unset($data['until']);
            }
            elseif (\array_key_exists('until', $data) && $data['until'] === null) {
                $object->setUntil(null);
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
            $data['since'] = $object->getSince()->format('Y-m-d\\TH:i:s.uP');
            if ($object->isInitialized('until') && null !== $object->getUntil()) {
                $data['until'] = $object->getUntil()->format('Y-m-d\\TH:i:s.uP');
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\RecoverIn' => false];
        }
    }
}