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

class SwarmJoinPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\SwarmJoinPostBody' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\SwarmJoinPostBody' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmJoinPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ListenAddr', $data) && null !== $data['ListenAddr']) {
            $object->setListenAddr($data['ListenAddr']);
        } elseif (\array_key_exists('ListenAddr', $data) && null === $data['ListenAddr']) {
            $object->setListenAddr(null);
        }
        if (\array_key_exists('AdvertiseAddr', $data) && null !== $data['AdvertiseAddr']) {
            $object->setAdvertiseAddr($data['AdvertiseAddr']);
        } elseif (\array_key_exists('AdvertiseAddr', $data) && null === $data['AdvertiseAddr']) {
            $object->setAdvertiseAddr(null);
        }
        if (\array_key_exists('DataPathAddr', $data) && null !== $data['DataPathAddr']) {
            $object->setDataPathAddr($data['DataPathAddr']);
        } elseif (\array_key_exists('DataPathAddr', $data) && null === $data['DataPathAddr']) {
            $object->setDataPathAddr(null);
        }
        if (\array_key_exists('RemoteAddrs', $data) && null !== $data['RemoteAddrs']) {
            $values = [];
            foreach ($data['RemoteAddrs'] as $value) {
                $values[] = $value;
            }
            $object->setRemoteAddrs($values);
        } elseif (\array_key_exists('RemoteAddrs', $data) && null === $data['RemoteAddrs']) {
            $object->setRemoteAddrs(null);
        }
        if (\array_key_exists('JoinToken', $data) && null !== $data['JoinToken']) {
            $object->setJoinToken($data['JoinToken']);
        } elseif (\array_key_exists('JoinToken', $data) && null === $data['JoinToken']) {
            $object->setJoinToken(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getListenAddr()) {
            $data['ListenAddr'] = $object->getListenAddr();
        }
        if (null !== $object->getAdvertiseAddr()) {
            $data['AdvertiseAddr'] = $object->getAdvertiseAddr();
        }
        if (null !== $object->getDataPathAddr()) {
            $data['DataPathAddr'] = $object->getDataPathAddr();
        }
        if (null !== $object->getRemoteAddrs()) {
            $values = [];
            foreach ($object->getRemoteAddrs() as $value) {
                $values[] = $value;
            }
            $data['RemoteAddrs'] = $values;
        }
        if (null !== $object->getJoinToken()) {
            $data['JoinToken'] = $object->getJoinToken();
        }

        return $data;
    }
}
