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

class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\TaskSpecContainerSpecPrivileges' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\TaskSpecContainerSpecPrivileges' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskSpecContainerSpecPrivileges();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CredentialSpec', $data)) {
            $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], 'Docker\\API\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec', 'json', $context));
        }
        if (\array_key_exists('SELinuxContext', $data)) {
            $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], 'Docker\\API\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCredentialSpec()) {
            $data['CredentialSpec'] = $this->normalizer->normalize($object->getCredentialSpec(), 'json', $context);
        }
        if (null !== $object->getSELinuxContext()) {
            $data['SELinuxContext'] = $this->normalizer->normalize($object->getSELinuxContext(), 'json', $context);
        }

        return $data;
    }
}
