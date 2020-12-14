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

class SwarmSpecRaftNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\SwarmSpecRaft' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\SwarmSpecRaft' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmSpecRaft();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SnapshotInterval', $data) && null !== $data['SnapshotInterval']) {
            $object->setSnapshotInterval($data['SnapshotInterval']);
        } elseif (\array_key_exists('SnapshotInterval', $data) && null === $data['SnapshotInterval']) {
            $object->setSnapshotInterval(null);
        }
        if (\array_key_exists('KeepOldSnapshots', $data) && null !== $data['KeepOldSnapshots']) {
            $object->setKeepOldSnapshots($data['KeepOldSnapshots']);
        } elseif (\array_key_exists('KeepOldSnapshots', $data) && null === $data['KeepOldSnapshots']) {
            $object->setKeepOldSnapshots(null);
        }
        if (\array_key_exists('LogEntriesForSlowFollowers', $data) && null !== $data['LogEntriesForSlowFollowers']) {
            $object->setLogEntriesForSlowFollowers($data['LogEntriesForSlowFollowers']);
        } elseif (\array_key_exists('LogEntriesForSlowFollowers', $data) && null === $data['LogEntriesForSlowFollowers']) {
            $object->setLogEntriesForSlowFollowers(null);
        }
        if (\array_key_exists('ElectionTick', $data) && null !== $data['ElectionTick']) {
            $object->setElectionTick($data['ElectionTick']);
        } elseif (\array_key_exists('ElectionTick', $data) && null === $data['ElectionTick']) {
            $object->setElectionTick(null);
        }
        if (\array_key_exists('HeartbeatTick', $data) && null !== $data['HeartbeatTick']) {
            $object->setHeartbeatTick($data['HeartbeatTick']);
        } elseif (\array_key_exists('HeartbeatTick', $data) && null === $data['HeartbeatTick']) {
            $object->setHeartbeatTick(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getSnapshotInterval()) {
            $data['SnapshotInterval'] = $object->getSnapshotInterval();
        }
        if (null !== $object->getKeepOldSnapshots()) {
            $data['KeepOldSnapshots'] = $object->getKeepOldSnapshots();
        }
        if (null !== $object->getLogEntriesForSlowFollowers()) {
            $data['LogEntriesForSlowFollowers'] = $object->getLogEntriesForSlowFollowers();
        }
        if (null !== $object->getElectionTick()) {
            $data['ElectionTick'] = $object->getElectionTick();
        }
        if (null !== $object->getHeartbeatTick()) {
            $data['HeartbeatTick'] = $object->getHeartbeatTick();
        }

        return $data;
    }
}
