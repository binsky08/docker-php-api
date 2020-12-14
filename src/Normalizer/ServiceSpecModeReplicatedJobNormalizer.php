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

class ServiceSpecModeReplicatedJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ServiceSpecModeReplicatedJob' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ServiceSpecModeReplicatedJob' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ServiceSpecModeReplicatedJob();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('MaxConcurrent', $data) && null !== $data['MaxConcurrent']) {
            $object->setMaxConcurrent($data['MaxConcurrent']);
        } elseif (\array_key_exists('MaxConcurrent', $data) && null === $data['MaxConcurrent']) {
            $object->setMaxConcurrent(null);
        }
        if (\array_key_exists('TotalCompletions', $data) && null !== $data['TotalCompletions']) {
            $object->setTotalCompletions($data['TotalCompletions']);
        } elseif (\array_key_exists('TotalCompletions', $data) && null === $data['TotalCompletions']) {
            $object->setTotalCompletions(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getMaxConcurrent()) {
            $data['MaxConcurrent'] = $object->getMaxConcurrent();
        }
        if (null !== $object->getTotalCompletions()) {
            $data['TotalCompletions'] = $object->getTotalCompletions();
        }

        return $data;
    }
}
