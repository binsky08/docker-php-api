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

class PluginConfigLinuxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\PluginConfigLinux' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\PluginConfigLinux' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\PluginConfigLinux();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Capabilities', $data) && null !== $data['Capabilities']) {
            $values = [];
            foreach ($data['Capabilities'] as $value) {
                $values[] = $value;
            }
            $object->setCapabilities($values);
        } elseif (\array_key_exists('Capabilities', $data) && null === $data['Capabilities']) {
            $object->setCapabilities(null);
        }
        if (\array_key_exists('AllowAllDevices', $data) && null !== $data['AllowAllDevices']) {
            $object->setAllowAllDevices($data['AllowAllDevices']);
        } elseif (\array_key_exists('AllowAllDevices', $data) && null === $data['AllowAllDevices']) {
            $object->setAllowAllDevices(null);
        }
        if (\array_key_exists('Devices', $data) && null !== $data['Devices']) {
            $values_1 = [];
            foreach ($data['Devices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\PluginDevice', 'json', $context);
            }
            $object->setDevices($values_1);
        } elseif (\array_key_exists('Devices', $data) && null === $data['Devices']) {
            $object->setDevices(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getCapabilities() as $value) {
            $values[] = $value;
        }
        $data['Capabilities'] = $values;
        $data['AllowAllDevices'] = $object->getAllowAllDevices();
        $values_1 = [];
        foreach ($object->getDevices() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['Devices'] = $values_1;

        return $data;
    }
}
