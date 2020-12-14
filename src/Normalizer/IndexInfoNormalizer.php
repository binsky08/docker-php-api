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

class IndexInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\IndexInfo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\IndexInfo' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\IndexInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data) && null !== $data['Name']) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (\array_key_exists('Mirrors', $data) && null !== $data['Mirrors']) {
            $values = [];
            foreach ($data['Mirrors'] as $value) {
                $values[] = $value;
            }
            $object->setMirrors($values);
        } elseif (\array_key_exists('Mirrors', $data) && null === $data['Mirrors']) {
            $object->setMirrors(null);
        }
        if (\array_key_exists('Secure', $data) && null !== $data['Secure']) {
            $object->setSecure($data['Secure']);
        } elseif (\array_key_exists('Secure', $data) && null === $data['Secure']) {
            $object->setSecure(null);
        }
        if (\array_key_exists('Official', $data) && null !== $data['Official']) {
            $object->setOfficial($data['Official']);
        } elseif (\array_key_exists('Official', $data) && null === $data['Official']) {
            $object->setOfficial(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getMirrors()) {
            $values = [];
            foreach ($object->getMirrors() as $value) {
                $values[] = $value;
            }
            $data['Mirrors'] = $values;
        }
        if (null !== $object->getSecure()) {
            $data['Secure'] = $object->getSecure();
        }
        if (null !== $object->getOfficial()) {
            $data['Official'] = $object->getOfficial();
        }

        return $data;
    }
}
