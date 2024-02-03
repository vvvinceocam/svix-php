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
    class CustomColorPaletteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\CustomColorPalette';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\CustomColorPalette';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Svix\Internal\Model\CustomColorPalette();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('backgroundHover', $data)) {
                $object->setBackgroundHover($data['backgroundHover']);
                unset($data['backgroundHover']);
            }
            if (\array_key_exists('backgroundPrimary', $data)) {
                $object->setBackgroundPrimary($data['backgroundPrimary']);
                unset($data['backgroundPrimary']);
            }
            if (\array_key_exists('backgroundSecondary', $data)) {
                $object->setBackgroundSecondary($data['backgroundSecondary']);
                unset($data['backgroundSecondary']);
            }
            if (\array_key_exists('buttonPrimary', $data)) {
                $object->setButtonPrimary($data['buttonPrimary']);
                unset($data['buttonPrimary']);
            }
            if (\array_key_exists('interactiveAccent', $data)) {
                $object->setInteractiveAccent($data['interactiveAccent']);
                unset($data['interactiveAccent']);
            }
            if (\array_key_exists('navigationAccent', $data)) {
                $object->setNavigationAccent($data['navigationAccent']);
                unset($data['navigationAccent']);
            }
            if (\array_key_exists('primary', $data)) {
                $object->setPrimary($data['primary']);
                unset($data['primary']);
            }
            if (\array_key_exists('textDanger', $data)) {
                $object->setTextDanger($data['textDanger']);
                unset($data['textDanger']);
            }
            if (\array_key_exists('textPrimary', $data)) {
                $object->setTextPrimary($data['textPrimary']);
                unset($data['textPrimary']);
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
            if ($object->isInitialized('backgroundHover') && null !== $object->getBackgroundHover()) {
                $data['backgroundHover'] = $object->getBackgroundHover();
            }
            if ($object->isInitialized('backgroundPrimary') && null !== $object->getBackgroundPrimary()) {
                $data['backgroundPrimary'] = $object->getBackgroundPrimary();
            }
            if ($object->isInitialized('backgroundSecondary') && null !== $object->getBackgroundSecondary()) {
                $data['backgroundSecondary'] = $object->getBackgroundSecondary();
            }
            if ($object->isInitialized('buttonPrimary') && null !== $object->getButtonPrimary()) {
                $data['buttonPrimary'] = $object->getButtonPrimary();
            }
            if ($object->isInitialized('interactiveAccent') && null !== $object->getInteractiveAccent()) {
                $data['interactiveAccent'] = $object->getInteractiveAccent();
            }
            if ($object->isInitialized('navigationAccent') && null !== $object->getNavigationAccent()) {
                $data['navigationAccent'] = $object->getNavigationAccent();
            }
            if ($object->isInitialized('primary') && null !== $object->getPrimary()) {
                $data['primary'] = $object->getPrimary();
            }
            if ($object->isInitialized('textDanger') && null !== $object->getTextDanger()) {
                $data['textDanger'] = $object->getTextDanger();
            }
            if ($object->isInitialized('textPrimary') && null !== $object->getTextPrimary()) {
                $data['textPrimary'] = $object->getTextPrimary();
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
            return ['Svix\\Internal\\Model\\CustomColorPalette' => false];
        }
    }
} else {
    class CustomColorPaletteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Svix\\Internal\\Model\\CustomColorPalette';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\CustomColorPalette';
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
            $object = new \Svix\Internal\Model\CustomColorPalette();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('backgroundHover', $data)) {
                $object->setBackgroundHover($data['backgroundHover']);
                unset($data['backgroundHover']);
            }
            if (\array_key_exists('backgroundPrimary', $data)) {
                $object->setBackgroundPrimary($data['backgroundPrimary']);
                unset($data['backgroundPrimary']);
            }
            if (\array_key_exists('backgroundSecondary', $data)) {
                $object->setBackgroundSecondary($data['backgroundSecondary']);
                unset($data['backgroundSecondary']);
            }
            if (\array_key_exists('buttonPrimary', $data)) {
                $object->setButtonPrimary($data['buttonPrimary']);
                unset($data['buttonPrimary']);
            }
            if (\array_key_exists('interactiveAccent', $data)) {
                $object->setInteractiveAccent($data['interactiveAccent']);
                unset($data['interactiveAccent']);
            }
            if (\array_key_exists('navigationAccent', $data)) {
                $object->setNavigationAccent($data['navigationAccent']);
                unset($data['navigationAccent']);
            }
            if (\array_key_exists('primary', $data)) {
                $object->setPrimary($data['primary']);
                unset($data['primary']);
            }
            if (\array_key_exists('textDanger', $data)) {
                $object->setTextDanger($data['textDanger']);
                unset($data['textDanger']);
            }
            if (\array_key_exists('textPrimary', $data)) {
                $object->setTextPrimary($data['textPrimary']);
                unset($data['textPrimary']);
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
            if ($object->isInitialized('backgroundHover') && null !== $object->getBackgroundHover()) {
                $data['backgroundHover'] = $object->getBackgroundHover();
            }
            if ($object->isInitialized('backgroundPrimary') && null !== $object->getBackgroundPrimary()) {
                $data['backgroundPrimary'] = $object->getBackgroundPrimary();
            }
            if ($object->isInitialized('backgroundSecondary') && null !== $object->getBackgroundSecondary()) {
                $data['backgroundSecondary'] = $object->getBackgroundSecondary();
            }
            if ($object->isInitialized('buttonPrimary') && null !== $object->getButtonPrimary()) {
                $data['buttonPrimary'] = $object->getButtonPrimary();
            }
            if ($object->isInitialized('interactiveAccent') && null !== $object->getInteractiveAccent()) {
                $data['interactiveAccent'] = $object->getInteractiveAccent();
            }
            if ($object->isInitialized('navigationAccent') && null !== $object->getNavigationAccent()) {
                $data['navigationAccent'] = $object->getNavigationAccent();
            }
            if ($object->isInitialized('primary') && null !== $object->getPrimary()) {
                $data['primary'] = $object->getPrimary();
            }
            if ($object->isInitialized('textDanger') && null !== $object->getTextDanger()) {
                $data['textDanger'] = $object->getTextDanger();
            }
            if ($object->isInitialized('textPrimary') && null !== $object->getTextPrimary()) {
                $data['textPrimary'] = $object->getTextPrimary();
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
            return ['Svix\\Internal\\Model\\CustomColorPalette' => false];
        }
    }
}