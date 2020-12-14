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

class TaskSpecContainerSpecSecretsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\TaskSpecContainerSpecSecretsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\TaskSpecContainerSpecSecretsItem' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskSpecContainerSpecSecretsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('File', $data) && null !== $data['File']) {
            $object->setFile($this->denormalizer->denormalize($data['File'], 'Docker\\API\\Model\\TaskSpecContainerSpecSecretsItemFile', 'json', $context));
        } elseif (\array_key_exists('File', $data) && null === $data['File']) {
            $object->setFile(null);
        }
        if (\array_key_exists('SecretID', $data) && null !== $data['SecretID']) {
            $object->setSecretID($data['SecretID']);
        } elseif (\array_key_exists('SecretID', $data) && null === $data['SecretID']) {
            $object->setSecretID(null);
        }
        if (\array_key_exists('SecretName', $data) && null !== $data['SecretName']) {
            $object->setSecretName($data['SecretName']);
        } elseif (\array_key_exists('SecretName', $data) && null === $data['SecretName']) {
            $object->setSecretName(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getFile()) {
            $data['File'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getSecretID()) {
            $data['SecretID'] = $object->getSecretID();
        }
        if (null !== $object->getSecretName()) {
            $data['SecretName'] = $object->getSecretName();
        }

        return $data;
    }
}
