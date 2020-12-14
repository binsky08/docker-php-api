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

class PluginDeviceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\PluginDevice' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\PluginDevice' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\PluginDevice();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data) && null !== $data['Name']) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (\array_key_exists('Description', $data) && null !== $data['Description']) {
            $object->setDescription($data['Description']);
        } elseif (\array_key_exists('Description', $data) && null === $data['Description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('Settable', $data) && null !== $data['Settable']) {
            $values = [];
            foreach ($data['Settable'] as $value) {
                $values[] = $value;
            }
            $object->setSettable($values);
        } elseif (\array_key_exists('Settable', $data) && null === $data['Settable']) {
            $object->setSettable(null);
        }
        if (\array_key_exists('Path', $data) && null !== $data['Path']) {
            $object->setPath($data['Path']);
        } elseif (\array_key_exists('Path', $data) && null === $data['Path']) {
            $object->setPath(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['Name'] = $object->getName();
        $data['Description'] = $object->getDescription();
        $values = [];
        foreach ($object->getSettable() as $value) {
            $values[] = $value;
        }
        $data['Settable'] = $values;
        $data['Path'] = $object->getPath();

        return $data;
    }
}
