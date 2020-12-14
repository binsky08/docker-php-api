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

class ServiceServiceStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ServiceServiceStatus' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ServiceServiceStatus' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ServiceServiceStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('RunningTasks', $data) && null !== $data['RunningTasks']) {
            $object->setRunningTasks($data['RunningTasks']);
        } elseif (\array_key_exists('RunningTasks', $data) && null === $data['RunningTasks']) {
            $object->setRunningTasks(null);
        }
        if (\array_key_exists('DesiredTasks', $data) && null !== $data['DesiredTasks']) {
            $object->setDesiredTasks($data['DesiredTasks']);
        } elseif (\array_key_exists('DesiredTasks', $data) && null === $data['DesiredTasks']) {
            $object->setDesiredTasks(null);
        }
        if (\array_key_exists('CompletedTasks', $data) && null !== $data['CompletedTasks']) {
            $object->setCompletedTasks($data['CompletedTasks']);
        } elseif (\array_key_exists('CompletedTasks', $data) && null === $data['CompletedTasks']) {
            $object->setCompletedTasks(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getRunningTasks()) {
            $data['RunningTasks'] = $object->getRunningTasks();
        }
        if (null !== $object->getDesiredTasks()) {
            $data['DesiredTasks'] = $object->getDesiredTasks();
        }
        if (null !== $object->getCompletedTasks()) {
            $data['CompletedTasks'] = $object->getCompletedTasks();
        }

        return $data;
    }
}
