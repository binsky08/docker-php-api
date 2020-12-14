<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TaskSpecPlacementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\TaskSpecPlacement' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\TaskSpecPlacement' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskSpecPlacement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Constraints', $data) && null !== $data['Constraints']) {
            $values = [];
            foreach ($data['Constraints'] as $value) {
                $values[] = $value;
            }
            $object->setConstraints($values);
        } elseif (\array_key_exists('Constraints', $data) && null === $data['Constraints']) {
            $object->setConstraints(null);
        }
        if (\array_key_exists('Preferences', $data) && null !== $data['Preferences']) {
            $values_1 = [];
            foreach ($data['Preferences'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\TaskSpecPlacementPreferencesItem', 'json', $context);
            }
            $object->setPreferences($values_1);
        } elseif (\array_key_exists('Preferences', $data) && null === $data['Preferences']) {
            $object->setPreferences(null);
        }
        if (\array_key_exists('Platforms', $data) && null !== $data['Platforms']) {
            $values_2 = [];
            foreach ($data['Platforms'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\Platform', 'json', $context);
            }
            $object->setPlatforms($values_2);
        } elseif (\array_key_exists('Platforms', $data) && null === $data['Platforms']) {
            $object->setPlatforms(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getConstraints()) {
            $values = [];
            foreach ($object->getConstraints() as $value) {
                $values[] = $value;
            }
            $data['Constraints'] = $values;
        }
        if (null !== $object->getPreferences()) {
            $values_1 = [];
            foreach ($object->getPreferences() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Preferences'] = $values_1;
        }
        if (null !== $object->getPlatforms()) {
            $values_2 = [];
            foreach ($object->getPlatforms() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Platforms'] = $values_2;
        }

        return $data;
    }
}
