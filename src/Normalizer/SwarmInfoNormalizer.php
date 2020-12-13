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

class SwarmInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\SwarmInfo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\SwarmInfo' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NodeID', $data)) {
            $object->setNodeID($data['NodeID']);
        }
        if (\array_key_exists('NodeAddr', $data)) {
            $object->setNodeAddr($data['NodeAddr']);
        }
        if (\array_key_exists('LocalNodeState', $data)) {
            $object->setLocalNodeState($data['LocalNodeState']);
        }
        if (\array_key_exists('ControlAvailable', $data)) {
            $object->setControlAvailable($data['ControlAvailable']);
        }
        if (\array_key_exists('Error', $data)) {
            $object->setError($data['Error']);
        }
        if (\array_key_exists('RemoteManagers', $data) && null !== $data['RemoteManagers']) {
            $values = [];
            foreach ($data['RemoteManagers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\PeerNode', 'json', $context);
            }
            $object->setRemoteManagers($values);
        } elseif (\array_key_exists('RemoteManagers', $data) && null === $data['RemoteManagers']) {
            $object->setRemoteManagers(null);
        }
        if (\array_key_exists('Nodes', $data) && null !== $data['Nodes']) {
            $object->setNodes($data['Nodes']);
        } elseif (\array_key_exists('Nodes', $data) && null === $data['Nodes']) {
            $object->setNodes(null);
        }
        if (\array_key_exists('Managers', $data) && null !== $data['Managers']) {
            $object->setManagers($data['Managers']);
        } elseif (\array_key_exists('Managers', $data) && null === $data['Managers']) {
            $object->setManagers(null);
        }
        if (\array_key_exists('Cluster', $data) && null !== $data['Cluster']) {
            $object->setCluster($this->denormalizer->denormalize($data['Cluster'], 'Docker\\API\\Model\\ClusterInfo', 'json', $context));
        } elseif (\array_key_exists('Cluster', $data) && null === $data['Cluster']) {
            $object->setCluster(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getNodeID()) {
            $data['NodeID'] = $object->getNodeID();
        }
        if (null !== $object->getNodeAddr()) {
            $data['NodeAddr'] = $object->getNodeAddr();
        }
        if (null !== $object->getLocalNodeState()) {
            $data['LocalNodeState'] = $object->getLocalNodeState();
        }
        if (null !== $object->getControlAvailable()) {
            $data['ControlAvailable'] = $object->getControlAvailable();
        }
        if (null !== $object->getError()) {
            $data['Error'] = $object->getError();
        }
        if (null !== $object->getRemoteManagers()) {
            $values = [];
            foreach ($object->getRemoteManagers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['RemoteManagers'] = $values;
        }
        if (null !== $object->getNodes()) {
            $data['Nodes'] = $object->getNodes();
        }
        if (null !== $object->getManagers()) {
            $data['Managers'] = $object->getManagers();
        }
        if (null !== $object->getCluster()) {
            $data['Cluster'] = $this->normalizer->normalize($object->getCluster(), 'json', $context);
        }

        return $data;
    }
}
