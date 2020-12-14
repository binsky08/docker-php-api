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

class DistributionNameJsonGetResponse200DescriptorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\DistributionNameJsonGetResponse200Descriptor' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\DistributionNameJsonGetResponse200Descriptor' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\DistributionNameJsonGetResponse200Descriptor();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('MediaType', $data) && null !== $data['MediaType']) {
            $object->setMediaType($data['MediaType']);
        } elseif (\array_key_exists('MediaType', $data) && null === $data['MediaType']) {
            $object->setMediaType(null);
        }
        if (\array_key_exists('Size', $data) && null !== $data['Size']) {
            $object->setSize($data['Size']);
        } elseif (\array_key_exists('Size', $data) && null === $data['Size']) {
            $object->setSize(null);
        }
        if (\array_key_exists('Digest', $data) && null !== $data['Digest']) {
            $object->setDigest($data['Digest']);
        } elseif (\array_key_exists('Digest', $data) && null === $data['Digest']) {
            $object->setDigest(null);
        }
        if (\array_key_exists('URLs', $data) && null !== $data['URLs']) {
            $values = [];
            foreach ($data['URLs'] as $value) {
                $values[] = $value;
            }
            $object->setURLs($values);
        } elseif (\array_key_exists('URLs', $data) && null === $data['URLs']) {
            $object->setURLs(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getMediaType()) {
            $data['MediaType'] = $object->getMediaType();
        }
        if (null !== $object->getSize()) {
            $data['Size'] = $object->getSize();
        }
        if (null !== $object->getDigest()) {
            $data['Digest'] = $object->getDigest();
        }
        if (null !== $object->getURLs()) {
            $values = [];
            foreach ($object->getURLs() as $value) {
                $values[] = $value;
            }
            $data['URLs'] = $values;
        }

        return $data;
    }
}
