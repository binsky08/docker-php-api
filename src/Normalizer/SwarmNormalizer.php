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

class SwarmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\Swarm' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\Swarm' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Swarm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ID', $data) && null !== $data['ID']) {
            $object->setID($data['ID']);
        } elseif (\array_key_exists('ID', $data) && null === $data['ID']) {
            $object->setID(null);
        }
        if (\array_key_exists('Version', $data) && null !== $data['Version']) {
            $object->setVersion($this->denormalizer->denormalize($data['Version'], 'Docker\\API\\Model\\ObjectVersion', 'json', $context));
        } elseif (\array_key_exists('Version', $data) && null === $data['Version']) {
            $object->setVersion(null);
        }
        if (\array_key_exists('CreatedAt', $data) && null !== $data['CreatedAt']) {
            $object->setCreatedAt($data['CreatedAt']);
        } elseif (\array_key_exists('CreatedAt', $data) && null === $data['CreatedAt']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('UpdatedAt', $data) && null !== $data['UpdatedAt']) {
            $object->setUpdatedAt($data['UpdatedAt']);
        } elseif (\array_key_exists('UpdatedAt', $data) && null === $data['UpdatedAt']) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('Spec', $data) && null !== $data['Spec']) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Docker\\API\\Model\\SwarmSpec', 'json', $context));
        } elseif (\array_key_exists('Spec', $data) && null === $data['Spec']) {
            $object->setSpec(null);
        }
        if (\array_key_exists('TLSInfo', $data) && null !== $data['TLSInfo']) {
            $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], 'Docker\\API\\Model\\TLSInfo', 'json', $context));
        } elseif (\array_key_exists('TLSInfo', $data) && null === $data['TLSInfo']) {
            $object->setTLSInfo(null);
        }
        if (\array_key_exists('RootRotationInProgress', $data) && null !== $data['RootRotationInProgress']) {
            $object->setRootRotationInProgress($data['RootRotationInProgress']);
        } elseif (\array_key_exists('RootRotationInProgress', $data) && null === $data['RootRotationInProgress']) {
            $object->setRootRotationInProgress(null);
        }
        if (\array_key_exists('JoinTokens', $data) && null !== $data['JoinTokens']) {
            $object->setJoinTokens($this->denormalizer->denormalize($data['JoinTokens'], 'Docker\\API\\Model\\JoinTokens', 'json', $context));
        } elseif (\array_key_exists('JoinTokens', $data) && null === $data['JoinTokens']) {
            $object->setJoinTokens(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if (null !== $object->getVersion()) {
            $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data['CreatedAt'] = $object->getCreatedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['UpdatedAt'] = $object->getUpdatedAt();
        }
        if (null !== $object->getSpec()) {
            $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if (null !== $object->getTLSInfo()) {
            $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
        }
        if (null !== $object->getRootRotationInProgress()) {
            $data['RootRotationInProgress'] = $object->getRootRotationInProgress();
        }
        if (null !== $object->getJoinTokens()) {
            $data['JoinTokens'] = $this->normalizer->normalize($object->getJoinTokens(), 'json', $context);
        }

        return $data;
    }
}
