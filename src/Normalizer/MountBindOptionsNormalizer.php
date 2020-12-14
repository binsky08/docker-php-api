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

class MountBindOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\MountBindOptions' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\MountBindOptions' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\MountBindOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Propagation', $data) && null !== $data['Propagation']) {
            $object->setPropagation($data['Propagation']);
        } elseif (\array_key_exists('Propagation', $data) && null === $data['Propagation']) {
            $object->setPropagation(null);
        }
        if (\array_key_exists('NonRecursive', $data) && null !== $data['NonRecursive']) {
            $object->setNonRecursive($data['NonRecursive']);
        } elseif (\array_key_exists('NonRecursive', $data) && null === $data['NonRecursive']) {
            $object->setNonRecursive(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getPropagation()) {
            $data['Propagation'] = $object->getPropagation();
        }
        if (null !== $object->getNonRecursive()) {
            $data['NonRecursive'] = $object->getNonRecursive();
        }

        return $data;
    }
}
