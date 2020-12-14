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

class ServiceSpecModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ServiceSpecMode' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ServiceSpecMode' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ServiceSpecMode();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Replicated', $data) && null !== $data['Replicated']) {
            $object->setReplicated($this->denormalizer->denormalize($data['Replicated'], 'Docker\\API\\Model\\ServiceSpecModeReplicated', 'json', $context));
        } elseif (\array_key_exists('Replicated', $data) && null === $data['Replicated']) {
            $object->setReplicated(null);
        }
        if (\array_key_exists('Global', $data) && null !== $data['Global']) {
            $object->setGlobal($this->denormalizer->denormalize($data['Global'], 'Docker\\API\\Model\\ServiceSpecModeGlobal', 'json', $context));
        } elseif (\array_key_exists('Global', $data) && null === $data['Global']) {
            $object->setGlobal(null);
        }
        if (\array_key_exists('ReplicatedJob', $data) && null !== $data['ReplicatedJob']) {
            $object->setReplicatedJob($this->denormalizer->denormalize($data['ReplicatedJob'], 'Docker\\API\\Model\\ServiceSpecModeReplicatedJob', 'json', $context));
        } elseif (\array_key_exists('ReplicatedJob', $data) && null === $data['ReplicatedJob']) {
            $object->setReplicatedJob(null);
        }
        if (\array_key_exists('GlobalJob', $data) && null !== $data['GlobalJob']) {
            $object->setGlobalJob($this->denormalizer->denormalize($data['GlobalJob'], 'Docker\\API\\Model\\ServiceSpecModeGlobalJob', 'json', $context));
        } elseif (\array_key_exists('GlobalJob', $data) && null === $data['GlobalJob']) {
            $object->setGlobalJob(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getReplicated()) {
            $data['Replicated'] = $this->normalizer->normalize($object->getReplicated(), 'json', $context);
        }
        if (null !== $object->getGlobal()) {
            $data['Global'] = $this->normalizer->normalize($object->getGlobal(), 'json', $context);
        }
        if (null !== $object->getReplicatedJob()) {
            $data['ReplicatedJob'] = $this->normalizer->normalize($object->getReplicatedJob(), 'json', $context);
        }
        if (null !== $object->getGlobalJob()) {
            $data['GlobalJob'] = $this->normalizer->normalize($object->getGlobalJob(), 'json', $context);
        }

        return $data;
    }
}
