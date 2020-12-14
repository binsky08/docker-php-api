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

class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\TaskStatus' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\TaskStatus' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Timestamp', $data) && null !== $data['Timestamp']) {
            $object->setTimestamp($data['Timestamp']);
        } elseif (\array_key_exists('Timestamp', $data) && null === $data['Timestamp']) {
            $object->setTimestamp(null);
        }
        if (\array_key_exists('State', $data) && null !== $data['State']) {
            $object->setState($data['State']);
        } elseif (\array_key_exists('State', $data) && null === $data['State']) {
            $object->setState(null);
        }
        if (\array_key_exists('Message', $data) && null !== $data['Message']) {
            $object->setMessage($data['Message']);
        } elseif (\array_key_exists('Message', $data) && null === $data['Message']) {
            $object->setMessage(null);
        }
        if (\array_key_exists('Err', $data) && null !== $data['Err']) {
            $object->setErr($data['Err']);
        } elseif (\array_key_exists('Err', $data) && null === $data['Err']) {
            $object->setErr(null);
        }
        if (\array_key_exists('ContainerStatus', $data) && null !== $data['ContainerStatus']) {
            $object->setContainerStatus($this->denormalizer->denormalize($data['ContainerStatus'], 'Docker\\API\\Model\\TaskStatusContainerStatus', 'json', $context));
        } elseif (\array_key_exists('ContainerStatus', $data) && null === $data['ContainerStatus']) {
            $object->setContainerStatus(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getTimestamp()) {
            $data['Timestamp'] = $object->getTimestamp();
        }
        if (null !== $object->getState()) {
            $data['State'] = $object->getState();
        }
        if (null !== $object->getMessage()) {
            $data['Message'] = $object->getMessage();
        }
        if (null !== $object->getErr()) {
            $data['Err'] = $object->getErr();
        }
        if (null !== $object->getContainerStatus()) {
            $data['ContainerStatus'] = $this->normalizer->normalize($object->getContainerStatus(), 'json', $context);
        }

        return $data;
    }
}
