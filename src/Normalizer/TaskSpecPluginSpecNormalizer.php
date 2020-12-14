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

class TaskSpecPluginSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\TaskSpecPluginSpec' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\TaskSpecPluginSpec' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskSpecPluginSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data) && null !== $data['Name']) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (\array_key_exists('Remote', $data) && null !== $data['Remote']) {
            $object->setRemote($data['Remote']);
        } elseif (\array_key_exists('Remote', $data) && null === $data['Remote']) {
            $object->setRemote(null);
        }
        if (\array_key_exists('Disabled', $data) && null !== $data['Disabled']) {
            $object->setDisabled($data['Disabled']);
        } elseif (\array_key_exists('Disabled', $data) && null === $data['Disabled']) {
            $object->setDisabled(null);
        }
        if (\array_key_exists('PluginPrivilege', $data) && null !== $data['PluginPrivilege']) {
            $values = [];
            foreach ($data['PluginPrivilege'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\TaskSpecPluginSpecPluginPrivilegeItem', 'json', $context);
            }
            $object->setPluginPrivilege($values);
        } elseif (\array_key_exists('PluginPrivilege', $data) && null === $data['PluginPrivilege']) {
            $object->setPluginPrivilege(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getRemote()) {
            $data['Remote'] = $object->getRemote();
        }
        if (null !== $object->getDisabled()) {
            $data['Disabled'] = $object->getDisabled();
        }
        if (null !== $object->getPluginPrivilege()) {
            $values = [];
            foreach ($object->getPluginPrivilege() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PluginPrivilege'] = $values;
        }

        return $data;
    }
}
