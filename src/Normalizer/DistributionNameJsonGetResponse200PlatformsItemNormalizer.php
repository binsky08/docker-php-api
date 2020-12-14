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

class DistributionNameJsonGetResponse200PlatformsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\DistributionNameJsonGetResponse200PlatformsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\DistributionNameJsonGetResponse200PlatformsItem' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\DistributionNameJsonGetResponse200PlatformsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Architecture', $data) && null !== $data['Architecture']) {
            $object->setArchitecture($data['Architecture']);
        } elseif (\array_key_exists('Architecture', $data) && null === $data['Architecture']) {
            $object->setArchitecture(null);
        }
        if (\array_key_exists('OS', $data) && null !== $data['OS']) {
            $object->setOS($data['OS']);
        } elseif (\array_key_exists('OS', $data) && null === $data['OS']) {
            $object->setOS(null);
        }
        if (\array_key_exists('OSVersion', $data) && null !== $data['OSVersion']) {
            $object->setOSVersion($data['OSVersion']);
        } elseif (\array_key_exists('OSVersion', $data) && null === $data['OSVersion']) {
            $object->setOSVersion(null);
        }
        if (\array_key_exists('OSFeatures', $data) && null !== $data['OSFeatures']) {
            $values = [];
            foreach ($data['OSFeatures'] as $value) {
                $values[] = $value;
            }
            $object->setOSFeatures($values);
        } elseif (\array_key_exists('OSFeatures', $data) && null === $data['OSFeatures']) {
            $object->setOSFeatures(null);
        }
        if (\array_key_exists('Variant', $data) && null !== $data['Variant']) {
            $object->setVariant($data['Variant']);
        } elseif (\array_key_exists('Variant', $data) && null === $data['Variant']) {
            $object->setVariant(null);
        }
        if (\array_key_exists('Features', $data) && null !== $data['Features']) {
            $values_1 = [];
            foreach ($data['Features'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFeatures($values_1);
        } elseif (\array_key_exists('Features', $data) && null === $data['Features']) {
            $object->setFeatures(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getArchitecture()) {
            $data['Architecture'] = $object->getArchitecture();
        }
        if (null !== $object->getOS()) {
            $data['OS'] = $object->getOS();
        }
        if (null !== $object->getOSVersion()) {
            $data['OSVersion'] = $object->getOSVersion();
        }
        if (null !== $object->getOSFeatures()) {
            $values = [];
            foreach ($object->getOSFeatures() as $value) {
                $values[] = $value;
            }
            $data['OSFeatures'] = $values;
        }
        if (null !== $object->getVariant()) {
            $data['Variant'] = $object->getVariant();
        }
        if (null !== $object->getFeatures()) {
            $values_1 = [];
            foreach ($object->getFeatures() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Features'] = $values_1;
        }

        return $data;
    }
}
