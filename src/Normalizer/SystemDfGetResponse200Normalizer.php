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

class SystemDfGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\SystemDfGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\SystemDfGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SystemDfGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('LayersSize', $data)) {
            $object->setLayersSize($data['LayersSize']);
        }
        if (\array_key_exists('Images', $data)) {
            $values = [];
            foreach ($data['Images'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\ImageSummary', 'json', $context);
            }
            $object->setImages($values);
        }
        if (\array_key_exists('Containers', $data)) {
            $values_1 = [];
            foreach ($data['Containers'] as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\ContainerSummaryItem', 'json', $context);
                }
                $values_1[] = $values_2;
            }
            $object->setContainers($values_1);
        }
        if (\array_key_exists('Volumes', $data)) {
            $values_3 = [];
            foreach ($data['Volumes'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\Model\\Volume', 'json', $context);
            }
            $object->setVolumes($values_3);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getLayersSize()) {
            $data['LayersSize'] = $object->getLayersSize();
        }
        if (null !== $object->getImages()) {
            $values = [];
            foreach ($object->getImages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Images'] = $values;
        }
        if (null !== $object->getContainers()) {
            $values_1 = [];
            foreach ($object->getContainers() as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $values_1[] = $values_2;
            }
            $data['Containers'] = $values_1;
        }
        if (null !== $object->getVolumes()) {
            $values_3 = [];
            foreach ($object->getVolumes() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['Volumes'] = $values_3;
        }

        return $data;
    }
}
