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

class ServiceSpecUpdateConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ServiceSpecUpdateConfig' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ServiceSpecUpdateConfig' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ServiceSpecUpdateConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Parallelism', $data)) {
            $object->setParallelism($data['Parallelism']);
        }
        if (\array_key_exists('Delay', $data)) {
            $object->setDelay($data['Delay']);
        }
        if (\array_key_exists('FailureAction', $data)) {
            $object->setFailureAction($data['FailureAction']);
        }
        if (\array_key_exists('Monitor', $data)) {
            $object->setMonitor($data['Monitor']);
        }
        if (\array_key_exists('MaxFailureRatio', $data)) {
            $object->setMaxFailureRatio($data['MaxFailureRatio']);
        }
        if (\array_key_exists('Order', $data)) {
            $object->setOrder($data['Order']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getParallelism()) {
            $data['Parallelism'] = $object->getParallelism();
        }
        if (null !== $object->getDelay()) {
            $data['Delay'] = $object->getDelay();
        }
        if (null !== $object->getFailureAction()) {
            $data['FailureAction'] = $object->getFailureAction();
        }
        if (null !== $object->getMonitor()) {
            $data['Monitor'] = $object->getMonitor();
        }
        if (null !== $object->getMaxFailureRatio()) {
            $data['MaxFailureRatio'] = $object->getMaxFailureRatio();
        }
        if (null !== $object->getOrder()) {
            $data['Order'] = $object->getOrder();
        }

        return $data;
    }
}
