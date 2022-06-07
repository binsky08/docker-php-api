<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ResourceObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ResourceObject' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ResourceObject' === $data::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ResourceObject();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NanoCPUs', $data) && null !== $data['NanoCPUs']) {
            $object->setNanoCPUs($data['NanoCPUs']);
        } elseif (\array_key_exists('NanoCPUs', $data) && null === $data['NanoCPUs']) {
            $object->setNanoCPUs(null);
        }
        if (\array_key_exists('MemoryBytes', $data) && null !== $data['MemoryBytes']) {
            $object->setMemoryBytes($data['MemoryBytes']);
        } elseif (\array_key_exists('MemoryBytes', $data) && null === $data['MemoryBytes']) {
            $object->setMemoryBytes(null);
        }
        if (\array_key_exists('GenericResources', $data) && null !== $data['GenericResources']) {
            $values = [];
            foreach ($data['GenericResources'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\GenericResourcesItem', 'json', $context);
            }
            $object->setGenericResources($values);
        } elseif (\array_key_exists('GenericResources', $data) && null === $data['GenericResources']) {
            $object->setGenericResources(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getNanoCPUs()) {
            $data['NanoCPUs'] = $object->getNanoCPUs();
        }
        if (null !== $object->getMemoryBytes()) {
            $data['MemoryBytes'] = $object->getMemoryBytes();
        }
        if (null !== $object->getGenericResources()) {
            $values = [];
            foreach ($object->getGenericResources() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['GenericResources'] = $values;
        }

        return $data;
    }
}
