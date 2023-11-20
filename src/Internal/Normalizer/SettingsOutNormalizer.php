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
class SettingsOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Svix\\Internal\\Model\\SettingsOut';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\SettingsOut';
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
        $object = new \Svix\Internal\Model\SettingsOut();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('colorPaletteDark', $data)) {
            $object->setColorPaletteDark($this->denormalizer->denormalize($data['colorPaletteDark'], 'Svix\\Internal\\Model\\CustomColorPalette', 'json', $context));
            unset($data['colorPaletteDark']);
        }
        if (\array_key_exists('colorPaletteLight', $data)) {
            $object->setColorPaletteLight($this->denormalizer->denormalize($data['colorPaletteLight'], 'Svix\\Internal\\Model\\CustomColorPalette', 'json', $context));
            unset($data['colorPaletteLight']);
        }
        if (\array_key_exists('customBaseFontSize', $data) && $data['customBaseFontSize'] !== null) {
            $object->setCustomBaseFontSize($data['customBaseFontSize']);
            unset($data['customBaseFontSize']);
        }
        elseif (\array_key_exists('customBaseFontSize', $data) && $data['customBaseFontSize'] === null) {
            $object->setCustomBaseFontSize(null);
        }
        if (\array_key_exists('customColor', $data) && $data['customColor'] !== null) {
            $object->setCustomColor($data['customColor']);
            unset($data['customColor']);
        }
        elseif (\array_key_exists('customColor', $data) && $data['customColor'] === null) {
            $object->setCustomColor(null);
        }
        if (\array_key_exists('customFontFamily', $data) && $data['customFontFamily'] !== null) {
            $object->setCustomFontFamily($data['customFontFamily']);
            unset($data['customFontFamily']);
        }
        elseif (\array_key_exists('customFontFamily', $data) && $data['customFontFamily'] === null) {
            $object->setCustomFontFamily(null);
        }
        if (\array_key_exists('customLogoUrl', $data) && $data['customLogoUrl'] !== null) {
            $object->setCustomLogoUrl($data['customLogoUrl']);
            unset($data['customLogoUrl']);
        }
        elseif (\array_key_exists('customLogoUrl', $data) && $data['customLogoUrl'] === null) {
            $object->setCustomLogoUrl(null);
        }
        if (\array_key_exists('customThemeOverride', $data)) {
            $object->setCustomThemeOverride($this->denormalizer->denormalize($data['customThemeOverride'], 'Svix\\Internal\\Model\\CustomThemeOverride', 'json', $context));
            unset($data['customThemeOverride']);
        }
        if (\array_key_exists('disableEndpointOnFailure', $data)) {
            $object->setDisableEndpointOnFailure($data['disableEndpointOnFailure']);
            unset($data['disableEndpointOnFailure']);
        }
        if (\array_key_exists('displayName', $data) && $data['displayName'] !== null) {
            $object->setDisplayName($data['displayName']);
            unset($data['displayName']);
        }
        elseif (\array_key_exists('displayName', $data) && $data['displayName'] === null) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('enableChannels', $data)) {
            $object->setEnableChannels($data['enableChannels']);
            unset($data['enableChannels']);
        }
        if (\array_key_exists('enableIntegrationManagement', $data)) {
            $object->setEnableIntegrationManagement($data['enableIntegrationManagement']);
            unset($data['enableIntegrationManagement']);
        }
        if (\array_key_exists('enableTransformations', $data)) {
            $object->setEnableTransformations($data['enableTransformations']);
            unset($data['enableTransformations']);
        }
        if (\array_key_exists('enforceHttps', $data)) {
            $object->setEnforceHttps($data['enforceHttps']);
            unset($data['enforceHttps']);
        }
        if (\array_key_exists('eventCatalogPublished', $data)) {
            $object->setEventCatalogPublished($data['eventCatalogPublished']);
            unset($data['eventCatalogPublished']);
        }
        if (\array_key_exists('readOnly', $data)) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
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
        if ($object->isInitialized('colorPaletteDark') && null !== $object->getColorPaletteDark()) {
            $data['colorPaletteDark'] = $this->normalizer->normalize($object->getColorPaletteDark(), 'json', $context);
        }
        if ($object->isInitialized('colorPaletteLight') && null !== $object->getColorPaletteLight()) {
            $data['colorPaletteLight'] = $this->normalizer->normalize($object->getColorPaletteLight(), 'json', $context);
        }
        if ($object->isInitialized('customBaseFontSize') && null !== $object->getCustomBaseFontSize()) {
            $data['customBaseFontSize'] = $object->getCustomBaseFontSize();
        }
        if ($object->isInitialized('customColor') && null !== $object->getCustomColor()) {
            $data['customColor'] = $object->getCustomColor();
        }
        if ($object->isInitialized('customFontFamily') && null !== $object->getCustomFontFamily()) {
            $data['customFontFamily'] = $object->getCustomFontFamily();
        }
        if ($object->isInitialized('customLogoUrl') && null !== $object->getCustomLogoUrl()) {
            $data['customLogoUrl'] = $object->getCustomLogoUrl();
        }
        if ($object->isInitialized('customThemeOverride') && null !== $object->getCustomThemeOverride()) {
            $data['customThemeOverride'] = $this->normalizer->normalize($object->getCustomThemeOverride(), 'json', $context);
        }
        if ($object->isInitialized('disableEndpointOnFailure') && null !== $object->getDisableEndpointOnFailure()) {
            $data['disableEndpointOnFailure'] = $object->getDisableEndpointOnFailure();
        }
        if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
            $data['displayName'] = $object->getDisplayName();
        }
        if ($object->isInitialized('enableChannels') && null !== $object->getEnableChannels()) {
            $data['enableChannels'] = $object->getEnableChannels();
        }
        if ($object->isInitialized('enableIntegrationManagement') && null !== $object->getEnableIntegrationManagement()) {
            $data['enableIntegrationManagement'] = $object->getEnableIntegrationManagement();
        }
        if ($object->isInitialized('enableTransformations') && null !== $object->getEnableTransformations()) {
            $data['enableTransformations'] = $object->getEnableTransformations();
        }
        if ($object->isInitialized('enforceHttps') && null !== $object->getEnforceHttps()) {
            $data['enforceHttps'] = $object->getEnforceHttps();
        }
        if ($object->isInitialized('eventCatalogPublished') && null !== $object->getEventCatalogPublished()) {
            $data['eventCatalogPublished'] = $object->getEventCatalogPublished();
        }
        if ($object->isInitialized('readOnly') && null !== $object->getReadOnly()) {
            $data['readOnly'] = $object->getReadOnly();
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
        return array('Svix\\Internal\\Model\\SettingsOut' => false);
    }
}