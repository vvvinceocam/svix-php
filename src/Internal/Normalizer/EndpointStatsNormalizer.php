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
    class EndpointStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\EndpointStats';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\EndpointStats';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\EndpointStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fail', $data)) {
                $object->setFail($data['fail']);
                unset($data['fail']);
            }
            if (\array_key_exists('pending', $data)) {
                $object->setPending($data['pending']);
                unset($data['pending']);
            }
            if (\array_key_exists('sending', $data)) {
                $object->setSending($data['sending']);
                unset($data['sending']);
            }
            if (\array_key_exists('success', $data)) {
                $object->setSuccess($data['success']);
                unset($data['success']);
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
            $data['fail'] = $object->getFail();
            $data['pending'] = $object->getPending();
            $data['sending'] = $object->getSending();
            $data['success'] = $object->getSuccess();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\EndpointStats' => false];
        }
    }
} else {
    class EndpointStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\EndpointStats';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\EndpointStats';
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
            $object = new \Svix\Internal\Model\EndpointStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fail', $data)) {
                $object->setFail($data['fail']);
                unset($data['fail']);
            }
            if (\array_key_exists('pending', $data)) {
                $object->setPending($data['pending']);
                unset($data['pending']);
            }
            if (\array_key_exists('sending', $data)) {
                $object->setSending($data['sending']);
                unset($data['sending']);
            }
            if (\array_key_exists('success', $data)) {
                $object->setSuccess($data['success']);
                unset($data['success']);
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
            $data['fail'] = $object->getFail();
            $data['pending'] = $object->getPending();
            $data['sending'] = $object->getSending();
            $data['success'] = $object->getSuccess();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Svix\\Internal\\Model\\EndpointStats' => false];
        }
    }
}