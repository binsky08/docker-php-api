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

class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\Address' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\Address' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Address();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Addr', $data) && null !== $data['Addr']) {
            $object->setAddr($data['Addr']);
        } elseif (\array_key_exists('Addr', $data) && null === $data['Addr']) {
            $object->setAddr(null);
        }
        if (\array_key_exists('PrefixLen', $data) && null !== $data['PrefixLen']) {
            $object->setPrefixLen($data['PrefixLen']);
        } elseif (\array_key_exists('PrefixLen', $data) && null === $data['PrefixLen']) {
            $object->setPrefixLen(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAddr()) {
            $data['Addr'] = $object->getAddr();
        }
        if (null !== $object->getPrefixLen()) {
            $data['PrefixLen'] = $object->getPrefixLen();
        }

        return $data;
    }
}
