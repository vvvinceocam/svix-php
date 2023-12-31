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
class TemplateOutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Svix\\Internal\\Model\\TemplateOut';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\TemplateOut';
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
        $object = new \Svix\Internal\Model\TemplateOut();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['createdAt']));
            unset($data['createdAt']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('featureFlag', $data) && $data['featureFlag'] !== null) {
            $object->setFeatureFlag($data['featureFlag']);
            unset($data['featureFlag']);
        }
        elseif (\array_key_exists('featureFlag', $data) && $data['featureFlag'] === null) {
            $object->setFeatureFlag(null);
        }
        if (\array_key_exists('filterTypes', $data) && $data['filterTypes'] !== null) {
            $values = array();
            foreach ($data['filterTypes'] as $value) {
                $values[] = $value;
            }
            $object->setFilterTypes($values);
            unset($data['filterTypes']);
        }
        elseif (\array_key_exists('filterTypes', $data) && $data['filterTypes'] === null) {
            $object->setFilterTypes(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('instructions', $data)) {
            $object->setInstructions($data['instructions']);
            unset($data['instructions']);
        }
        if (\array_key_exists('instructionsLink', $data) && $data['instructionsLink'] !== null) {
            $object->setInstructionsLink($data['instructionsLink']);
            unset($data['instructionsLink']);
        }
        elseif (\array_key_exists('instructionsLink', $data) && $data['instructionsLink'] === null) {
            $object->setInstructionsLink(null);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('logo', $data)) {
            $object->setLogo($data['logo']);
            unset($data['logo']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('orgId', $data)) {
            $object->setOrgId($data['orgId']);
            unset($data['orgId']);
        }
        if (\array_key_exists('transformation', $data)) {
            $object->setTransformation($data['transformation']);
            unset($data['transformation']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['updatedAt']));
            unset($data['updatedAt']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.uP');
        $data['description'] = $object->getDescription();
        if ($object->isInitialized('featureFlag') && null !== $object->getFeatureFlag()) {
            $data['featureFlag'] = $object->getFeatureFlag();
        }
        if ($object->isInitialized('filterTypes') && null !== $object->getFilterTypes()) {
            $values = array();
            foreach ($object->getFilterTypes() as $value) {
                $values[] = $value;
            }
            $data['filterTypes'] = $values;
        }
        $data['id'] = $object->getId();
        $data['instructions'] = $object->getInstructions();
        if ($object->isInitialized('instructionsLink') && null !== $object->getInstructionsLink()) {
            $data['instructionsLink'] = $object->getInstructionsLink();
        }
        $data['kind'] = $object->getKind();
        $data['logo'] = $object->getLogo();
        $data['name'] = $object->getName();
        $data['orgId'] = $object->getOrgId();
        $data['transformation'] = $object->getTransformation();
        $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.uP');
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Svix\\Internal\\Model\\TemplateOut' => false);
    }
}