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

class ServicesIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ServicesIdUpdatePostBody' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ServicesIdUpdatePostBody' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ServicesIdUpdatePostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Labels', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (\array_key_exists('TaskTemplate', $data)) {
            $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], 'Docker\\API\\Model\\TaskSpec', 'json', $context));
        }
        if (\array_key_exists('Mode', $data)) {
            $object->setMode($this->denormalizer->denormalize($data['Mode'], 'Docker\\API\\Model\\ServiceSpecMode', 'json', $context));
        }
        if (\array_key_exists('UpdateConfig', $data)) {
            $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], 'Docker\\API\\Model\\ServiceSpecUpdateConfig', 'json', $context));
        }
        if (\array_key_exists('RollbackConfig', $data)) {
            $object->setRollbackConfig($this->denormalizer->denormalize($data['RollbackConfig'], 'Docker\\API\\Model\\ServiceSpecRollbackConfig', 'json', $context));
        }
        if (\array_key_exists('Networks', $data)) {
            $values_1 = [];
            foreach ($data['Networks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\ServiceSpecNetworksItem', 'json', $context);
            }
            $object->setNetworks($values_1);
        }
        if (\array_key_exists('EndpointSpec', $data)) {
            $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], 'Docker\\API\\Model\\EndpointSpec', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values = [];
            foreach ($object->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Labels'] = $values;
        }
        if (null !== $object->getTaskTemplate()) {
            $data['TaskTemplate'] = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
        }
        if (null !== $object->getMode()) {
            $data['Mode'] = $this->normalizer->normalize($object->getMode(), 'json', $context);
        }
        if (null !== $object->getUpdateConfig()) {
            $data['UpdateConfig'] = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
        }
        if (null !== $object->getRollbackConfig()) {
            $data['RollbackConfig'] = $this->normalizer->normalize($object->getRollbackConfig(), 'json', $context);
        }
        if (null !== $object->getNetworks()) {
            $values_1 = [];
            foreach ($object->getNetworks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Networks'] = $values_1;
        }
        if (null !== $object->getEndpointSpec()) {
            $data['EndpointSpec'] = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
        }

        return $data;
    }
}
