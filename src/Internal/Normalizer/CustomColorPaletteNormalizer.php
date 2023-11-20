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
class CustomColorPaletteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Svix\\Internal\\Model\\CustomColorPalette';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\CustomColorPalette';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
        if (\array_key_exists('backgroundHover', $data) && $data['backgroundHover'] !== null) {
            $object->setBackgroundHover($data['backgroundHover']);
            unset($data['backgroundHover']);
        }
        elseif (\array_key_exists('backgroundHover', $data) && $data['backgroundHover'] === null) {
            $object->setBackgroundHover(null);
        }
        if (\array_key_exists('backgroundPrimary', $data) && $data['backgroundPrimary'] !== null) {
            $object->setBackgroundPrimary($data['backgroundPrimary']);
            unset($data['backgroundPrimary']);
        }
        elseif (\array_key_exists('backgroundPrimary', $data) && $data['backgroundPrimary'] === null) {
            $object->setBackgroundPrimary(null);
        }
        if (\array_key_exists('backgroundSecondary', $data) && $data['backgroundSecondary'] !== null) {
            $object->setBackgroundSecondary($data['backgroundSecondary']);
            unset($data['backgroundSecondary']);
        }
        elseif (\array_key_exists('backgroundSecondary', $data) && $data['backgroundSecondary'] === null) {
            $object->setBackgroundSecondary(null);
        }
        if (\array_key_exists('interactiveAccent', $data) && $data['interactiveAccent'] !== null) {
            $object->setInteractiveAccent($data['interactiveAccent']);
            unset($data['interactiveAccent']);
        }
        elseif (\array_key_exists('interactiveAccent', $data) && $data['interactiveAccent'] === null) {
            $object->setInteractiveAccent(null);
        }
        if (\array_key_exists('textDanger', $data) && $data['textDanger'] !== null) {
            $object->setTextDanger($data['textDanger']);
            unset($data['textDanger']);
        }
        elseif (\array_key_exists('textDanger', $data) && $data['textDanger'] === null) {
            $object->setTextDanger(null);
        }
        if (\array_key_exists('textPrimary', $data) && $data['textPrimary'] !== null) {
            $object->setTextPrimary($data['textPrimary']);
            unset($data['textPrimary']);
        }
        elseif (\array_key_exists('textPrimary', $data) && $data['textPrimary'] === null) {
            $object->setTextPrimary(null);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('backgroundHover') && null !== $object->getBackgroundHover()) {
            $data['backgroundHover'] = $object->getBackgroundHover();
        }
        if ($object->isInitialized('backgroundPrimary') && null !== $object->getBackgroundPrimary()) {
            $data['backgroundPrimary'] = $object->getBackgroundPrimary();
        }
        if ($object->isInitialized('backgroundSecondary') && null !== $object->getBackgroundSecondary()) {
            $data['backgroundSecondary'] = $object->getBackgroundSecondary();
        }
        if ($object->isInitialized('interactiveAccent') && null !== $object->getInteractiveAccent()) {
            $data['interactiveAccent'] = $object->getInteractiveAccent();
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
        return array('Svix\\Internal\\Model\\CustomColorPalette' => false);
    }
}