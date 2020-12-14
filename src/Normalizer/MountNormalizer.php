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

class MountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\Mount' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\Mount' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Mount();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Target', $data) && null !== $data['Target']) {
            $object->setTarget($data['Target']);
        } elseif (\array_key_exists('Target', $data) && null === $data['Target']) {
            $object->setTarget(null);
        }
        if (\array_key_exists('Source', $data) && null !== $data['Source']) {
            $object->setSource($data['Source']);
        } elseif (\array_key_exists('Source', $data) && null === $data['Source']) {
            $object->setSource(null);
        }
        if (\array_key_exists('Type', $data) && null !== $data['Type']) {
            $object->setType($data['Type']);
        } elseif (\array_key_exists('Type', $data) && null === $data['Type']) {
            $object->setType(null);
        }
        if (\array_key_exists('ReadOnly', $data) && null !== $data['ReadOnly']) {
            $object->setReadOnly($data['ReadOnly']);
        } elseif (\array_key_exists('ReadOnly', $data) && null === $data['ReadOnly']) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('Consistency', $data) && null !== $data['Consistency']) {
            $object->setConsistency($data['Consistency']);
        } elseif (\array_key_exists('Consistency', $data) && null === $data['Consistency']) {
            $object->setConsistency(null);
        }
        if (\array_key_exists('BindOptions', $data) && null !== $data['BindOptions']) {
            $object->setBindOptions($this->denormalizer->denormalize($data['BindOptions'], 'Docker\\API\\Model\\MountBindOptions', 'json', $context));
        } elseif (\array_key_exists('BindOptions', $data) && null === $data['BindOptions']) {
            $object->setBindOptions(null);
        }
        if (\array_key_exists('VolumeOptions', $data) && null !== $data['VolumeOptions']) {
            $object->setVolumeOptions($this->denormalizer->denormalize($data['VolumeOptions'], 'Docker\\API\\Model\\MountVolumeOptions', 'json', $context));
        } elseif (\array_key_exists('VolumeOptions', $data) && null === $data['VolumeOptions']) {
            $object->setVolumeOptions(null);
        }
        if (\array_key_exists('TmpfsOptions', $data) && null !== $data['TmpfsOptions']) {
            $object->setTmpfsOptions($this->denormalizer->denormalize($data['TmpfsOptions'], 'Docker\\API\\Model\\MountTmpfsOptions', 'json', $context));
        } elseif (\array_key_exists('TmpfsOptions', $data) && null === $data['TmpfsOptions']) {
            $object->setTmpfsOptions(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getTarget()) {
            $data['Target'] = $object->getTarget();
        }
        if (null !== $object->getSource()) {
            $data['Source'] = $object->getSource();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getReadOnly()) {
            $data['ReadOnly'] = $object->getReadOnly();
        }
        if (null !== $object->getConsistency()) {
            $data['Consistency'] = $object->getConsistency();
        }
        if (null !== $object->getBindOptions()) {
            $data['BindOptions'] = $this->normalizer->normalize($object->getBindOptions(), 'json', $context);
        }
        if (null !== $object->getVolumeOptions()) {
            $data['VolumeOptions'] = $this->normalizer->normalize($object->getVolumeOptions(), 'json', $context);
        }
        if (null !== $object->getTmpfsOptions()) {
            $data['TmpfsOptions'] = $this->normalizer->normalize($object->getTmpfsOptions(), 'json', $context);
        }

        return $data;
    }
}
