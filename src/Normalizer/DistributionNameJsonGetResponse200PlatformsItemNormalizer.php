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
        if (\array_key_exists('Architecture', $data)) {
            $object->setArchitecture($data['Architecture']);
        }
        if (\array_key_exists('OS', $data)) {
            $object->setOS($data['OS']);
        }
        if (\array_key_exists('OSVersion', $data)) {
            $object->setOSVersion($data['OSVersion']);
        }
        if (\array_key_exists('OSFeatures', $data)) {
            $values = [];
            foreach ($data['OSFeatures'] as $value) {
                $values[] = $value;
            }
            $object->setOSFeatures($values);
        }
        if (\array_key_exists('Variant', $data)) {
            $object->setVariant($data['Variant']);
        }
        if (\array_key_exists('Features', $data)) {
            $values_1 = [];
            foreach ($data['Features'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFeatures($values_1);
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
