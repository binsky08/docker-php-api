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

class ContainersIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ContainersIdJsonGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ContainersIdJsonGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ContainersIdJsonGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Id', $data) && null !== $data['Id']) {
            $object->setId($data['Id']);
        } elseif (\array_key_exists('Id', $data) && null === $data['Id']) {
            $object->setId(null);
        }
        if (\array_key_exists('Created', $data) && null !== $data['Created']) {
            $object->setCreated($data['Created']);
        } elseif (\array_key_exists('Created', $data) && null === $data['Created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('Path', $data) && null !== $data['Path']) {
            $object->setPath($data['Path']);
        } elseif (\array_key_exists('Path', $data) && null === $data['Path']) {
            $object->setPath(null);
        }
        if (\array_key_exists('Args', $data) && null !== $data['Args']) {
            $values = [];
            foreach ($data['Args'] as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        } elseif (\array_key_exists('Args', $data) && null === $data['Args']) {
            $object->setArgs(null);
        }
        if (\array_key_exists('State', $data) && null !== $data['State']) {
            $object->setState($this->denormalizer->denormalize($data['State'], 'Docker\\API\\Model\\ContainerState', 'json', $context));
        } elseif (\array_key_exists('State', $data) && null === $data['State']) {
            $object->setState(null);
        }
        if (\array_key_exists('Image', $data) && null !== $data['Image']) {
            $object->setImage($data['Image']);
        } elseif (\array_key_exists('Image', $data) && null === $data['Image']) {
            $object->setImage(null);
        }
        if (\array_key_exists('ResolvConfPath', $data) && null !== $data['ResolvConfPath']) {
            $object->setResolvConfPath($data['ResolvConfPath']);
        } elseif (\array_key_exists('ResolvConfPath', $data) && null === $data['ResolvConfPath']) {
            $object->setResolvConfPath(null);
        }
        if (\array_key_exists('HostnamePath', $data) && null !== $data['HostnamePath']) {
            $object->setHostnamePath($data['HostnamePath']);
        } elseif (\array_key_exists('HostnamePath', $data) && null === $data['HostnamePath']) {
            $object->setHostnamePath(null);
        }
        if (\array_key_exists('HostsPath', $data) && null !== $data['HostsPath']) {
            $object->setHostsPath($data['HostsPath']);
        } elseif (\array_key_exists('HostsPath', $data) && null === $data['HostsPath']) {
            $object->setHostsPath(null);
        }
        if (\array_key_exists('LogPath', $data) && null !== $data['LogPath']) {
            $object->setLogPath($data['LogPath']);
        } elseif (\array_key_exists('LogPath', $data) && null === $data['LogPath']) {
            $object->setLogPath(null);
        }
        if (\array_key_exists('Name', $data) && null !== $data['Name']) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (\array_key_exists('RestartCount', $data) && null !== $data['RestartCount']) {
            $object->setRestartCount($data['RestartCount']);
        } elseif (\array_key_exists('RestartCount', $data) && null === $data['RestartCount']) {
            $object->setRestartCount(null);
        }
        if (\array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $object->setDriver($data['Driver']);
        } elseif (\array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (\array_key_exists('Platform', $data) && null !== $data['Platform']) {
            $object->setPlatform($data['Platform']);
        } elseif (\array_key_exists('Platform', $data) && null === $data['Platform']) {
            $object->setPlatform(null);
        }
        if (\array_key_exists('MountLabel', $data) && null !== $data['MountLabel']) {
            $object->setMountLabel($data['MountLabel']);
        } elseif (\array_key_exists('MountLabel', $data) && null === $data['MountLabel']) {
            $object->setMountLabel(null);
        }
        if (\array_key_exists('ProcessLabel', $data) && null !== $data['ProcessLabel']) {
            $object->setProcessLabel($data['ProcessLabel']);
        } elseif (\array_key_exists('ProcessLabel', $data) && null === $data['ProcessLabel']) {
            $object->setProcessLabel(null);
        }
        if (\array_key_exists('AppArmorProfile', $data) && null !== $data['AppArmorProfile']) {
            $object->setAppArmorProfile($data['AppArmorProfile']);
        } elseif (\array_key_exists('AppArmorProfile', $data) && null === $data['AppArmorProfile']) {
            $object->setAppArmorProfile(null);
        }
        if (\array_key_exists('ExecIDs', $data) && null !== $data['ExecIDs']) {
            $values_1 = [];
            foreach ($data['ExecIDs'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setExecIDs($values_1);
        } elseif (\array_key_exists('ExecIDs', $data) && null === $data['ExecIDs']) {
            $object->setExecIDs(null);
        }
        if (\array_key_exists('HostConfig', $data) && null !== $data['HostConfig']) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], 'Docker\\API\\Model\\HostConfig', 'json', $context));
        } elseif (\array_key_exists('HostConfig', $data) && null === $data['HostConfig']) {
            $object->setHostConfig(null);
        }
        if (\array_key_exists('GraphDriver', $data) && null !== $data['GraphDriver']) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], 'Docker\\API\\Model\\GraphDriverData', 'json', $context));
        } elseif (\array_key_exists('GraphDriver', $data) && null === $data['GraphDriver']) {
            $object->setGraphDriver(null);
        }
        if (\array_key_exists('SizeRw', $data) && null !== $data['SizeRw']) {
            $object->setSizeRw($data['SizeRw']);
        } elseif (\array_key_exists('SizeRw', $data) && null === $data['SizeRw']) {
            $object->setSizeRw(null);
        }
        if (\array_key_exists('SizeRootFs', $data) && null !== $data['SizeRootFs']) {
            $object->setSizeRootFs($data['SizeRootFs']);
        } elseif (\array_key_exists('SizeRootFs', $data) && null === $data['SizeRootFs']) {
            $object->setSizeRootFs(null);
        }
        if (\array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $values_2 = [];
            foreach ($data['Mounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\MountPoint', 'json', $context);
            }
            $object->setMounts($values_2);
        } elseif (\array_key_exists('Mounts', $data) && null === $data['Mounts']) {
            $object->setMounts(null);
        }
        if (\array_key_exists('Config', $data) && null !== $data['Config']) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\API\\Model\\ContainerConfig', 'json', $context));
        } elseif (\array_key_exists('Config', $data) && null === $data['Config']) {
            $object->setConfig(null);
        }
        if (\array_key_exists('NetworkSettings', $data) && null !== $data['NetworkSettings']) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], 'Docker\\API\\Model\\NetworkSettings', 'json', $context));
        } elseif (\array_key_exists('NetworkSettings', $data) && null === $data['NetworkSettings']) {
            $object->setNetworkSettings(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getPath()) {
            $data['Path'] = $object->getPath();
        }
        if (null !== $object->getArgs()) {
            $values = [];
            foreach ($object->getArgs() as $value) {
                $values[] = $value;
            }
            $data['Args'] = $values;
        }
        if (null !== $object->getState()) {
            $data['State'] = $this->normalizer->normalize($object->getState(), 'json', $context);
        }
        if (null !== $object->getImage()) {
            $data['Image'] = $object->getImage();
        }
        if (null !== $object->getResolvConfPath()) {
            $data['ResolvConfPath'] = $object->getResolvConfPath();
        }
        if (null !== $object->getHostnamePath()) {
            $data['HostnamePath'] = $object->getHostnamePath();
        }
        if (null !== $object->getHostsPath()) {
            $data['HostsPath'] = $object->getHostsPath();
        }
        if (null !== $object->getLogPath()) {
            $data['LogPath'] = $object->getLogPath();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getRestartCount()) {
            $data['RestartCount'] = $object->getRestartCount();
        }
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        }
        if (null !== $object->getPlatform()) {
            $data['Platform'] = $object->getPlatform();
        }
        if (null !== $object->getMountLabel()) {
            $data['MountLabel'] = $object->getMountLabel();
        }
        if (null !== $object->getProcessLabel()) {
            $data['ProcessLabel'] = $object->getProcessLabel();
        }
        if (null !== $object->getAppArmorProfile()) {
            $data['AppArmorProfile'] = $object->getAppArmorProfile();
        }
        if (null !== $object->getExecIDs()) {
            $values_1 = [];
            foreach ($object->getExecIDs() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['ExecIDs'] = $values_1;
        }
        if (null !== $object->getHostConfig()) {
            $data['HostConfig'] = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
        }
        if (null !== $object->getGraphDriver()) {
            $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
        }
        if (null !== $object->getSizeRw()) {
            $data['SizeRw'] = $object->getSizeRw();
        }
        if (null !== $object->getSizeRootFs()) {
            $data['SizeRootFs'] = $object->getSizeRootFs();
        }
        if (null !== $object->getMounts()) {
            $values_2 = [];
            foreach ($object->getMounts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Mounts'] = $values_2;
        }
        if (null !== $object->getConfig()) {
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkSettings()) {
            $data['NetworkSettings'] = $this->normalizer->normalize($object->getNetworkSettings(), 'json', $context);
        }

        return $data;
    }
}
