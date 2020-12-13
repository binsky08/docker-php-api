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

class NodeDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\NodeDescription' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\NodeDescription' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\NodeDescription();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Hostname', $data)) {
            $object->setHostname($data['Hostname']);
        }
        if (\array_key_exists('Platform', $data)) {
            $object->setPlatform($this->denormalizer->denormalize($data['Platform'], 'Docker\\API\\Model\\Platform', 'json', $context));
        }
        if (\array_key_exists('Resources', $data)) {
            $object->setResources($this->denormalizer->denormalize($data['Resources'], 'Docker\\API\\Model\\ResourceObject', 'json', $context));
        }
        if (\array_key_exists('Engine', $data)) {
            $object->setEngine($this->denormalizer->denormalize($data['Engine'], 'Docker\\API\\Model\\EngineDescription', 'json', $context));
        }
        if (\array_key_exists('TLSInfo', $data)) {
            $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], 'Docker\\API\\Model\\TLSInfo', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getHostname()) {
            $data['Hostname'] = $object->getHostname();
        }
        if (null !== $object->getPlatform()) {
            $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
        }
        if (null !== $object->getResources()) {
            $data['Resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
        }
        if (null !== $object->getEngine()) {
            $data['Engine'] = $this->normalizer->normalize($object->getEngine(), 'json', $context);
        }
        if (null !== $object->getTLSInfo()) {
            $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
        }

        return $data;
    }
}
