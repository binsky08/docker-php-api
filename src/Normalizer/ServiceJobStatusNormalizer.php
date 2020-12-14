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

class ServiceJobStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ServiceJobStatus' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ServiceJobStatus' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ServiceJobStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('JobIteration', $data) && null !== $data['JobIteration']) {
            $object->setJobIteration($this->denormalizer->denormalize($data['JobIteration'], 'Docker\\API\\Model\\ObjectVersion', 'json', $context));
        } elseif (\array_key_exists('JobIteration', $data) && null === $data['JobIteration']) {
            $object->setJobIteration(null);
        }
        if (\array_key_exists('LastExecution', $data) && null !== $data['LastExecution']) {
            $object->setLastExecution($data['LastExecution']);
        } elseif (\array_key_exists('LastExecution', $data) && null === $data['LastExecution']) {
            $object->setLastExecution(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getJobIteration()) {
            $data['JobIteration'] = $this->normalizer->normalize($object->getJobIteration(), 'json', $context);
        }
        if (null !== $object->getLastExecution()) {
            $data['LastExecution'] = $object->getLastExecution();
        }

        return $data;
    }
}
