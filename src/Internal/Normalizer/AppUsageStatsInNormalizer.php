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
class AppUsageStatsInNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Svix\\Internal\\Model\\AppUsageStatsIn';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Svix\\Internal\\Model\\AppUsageStatsIn';
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
        $object = new \Svix\Internal\Model\AppUsageStatsIn();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('appIds', $data) && $data['appIds'] !== null) {
            $values = array();
            foreach ($data['appIds'] as $value) {
                $values[] = $value;
            }
            $object->setAppIds($values);
            unset($data['appIds']);
        }
        elseif (\array_key_exists('appIds', $data) && $data['appIds'] === null) {
            $object->setAppIds(null);
        }
        if (\array_key_exists('since', $data)) {
            $object->setSince(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['since']));
            unset($data['since']);
        }
        if (\array_key_exists('until', $data)) {
            $object->setUntil(\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $data['until']));
            unset($data['until']);
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
        if ($object->isInitialized('appIds') && null !== $object->getAppIds()) {
            $values = array();
            foreach ($object->getAppIds() as $value) {
                $values[] = $value;
            }
            $data['appIds'] = $values;
        }
        $data['since'] = $object->getSince()->format('Y-m-d\\TH:i:s.uP');
        $data['until'] = $object->getUntil()->format('Y-m-d\\TH:i:s.uP');
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Svix\\Internal\\Model\\AppUsageStatsIn' => false);
    }
}