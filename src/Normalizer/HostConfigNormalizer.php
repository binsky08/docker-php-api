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

class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\HostConfig' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\HostConfig' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\HostConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CpuShares', $data) && null !== $data['CpuShares']) {
            $object->setCpuShares($data['CpuShares']);
        } elseif (\array_key_exists('CpuShares', $data) && null === $data['CpuShares']) {
            $object->setCpuShares(null);
        }
        if (\array_key_exists('Memory', $data) && null !== $data['Memory']) {
            $object->setMemory($data['Memory']);
        } elseif (\array_key_exists('Memory', $data) && null === $data['Memory']) {
            $object->setMemory(null);
        }
        if (\array_key_exists('CgroupParent', $data) && null !== $data['CgroupParent']) {
            $object->setCgroupParent($data['CgroupParent']);
        } elseif (\array_key_exists('CgroupParent', $data) && null === $data['CgroupParent']) {
            $object->setCgroupParent(null);
        }
        if (\array_key_exists('BlkioWeight', $data) && null !== $data['BlkioWeight']) {
            $object->setBlkioWeight($data['BlkioWeight']);
        } elseif (\array_key_exists('BlkioWeight', $data) && null === $data['BlkioWeight']) {
            $object->setBlkioWeight(null);
        }
        if (\array_key_exists('BlkioWeightDevice', $data) && null !== $data['BlkioWeightDevice']) {
            $values = [];
            foreach ($data['BlkioWeightDevice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
        } elseif (\array_key_exists('BlkioWeightDevice', $data) && null === $data['BlkioWeightDevice']) {
            $object->setBlkioWeightDevice(null);
        }
        if (\array_key_exists('BlkioDeviceReadBps', $data) && null !== $data['BlkioDeviceReadBps']) {
            $values_1 = [];
            foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
        } elseif (\array_key_exists('BlkioDeviceReadBps', $data) && null === $data['BlkioDeviceReadBps']) {
            $object->setBlkioDeviceReadBps(null);
        }
        if (\array_key_exists('BlkioDeviceWriteBps', $data) && null !== $data['BlkioDeviceWriteBps']) {
            $values_2 = [];
            foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
        } elseif (\array_key_exists('BlkioDeviceWriteBps', $data) && null === $data['BlkioDeviceWriteBps']) {
            $object->setBlkioDeviceWriteBps(null);
        }
        if (\array_key_exists('BlkioDeviceReadIOps', $data) && null !== $data['BlkioDeviceReadIOps']) {
            $values_3 = [];
            foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
        } elseif (\array_key_exists('BlkioDeviceReadIOps', $data) && null === $data['BlkioDeviceReadIOps']) {
            $object->setBlkioDeviceReadIOps(null);
        }
        if (\array_key_exists('BlkioDeviceWriteIOps', $data) && null !== $data['BlkioDeviceWriteIOps']) {
            $values_4 = [];
            foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteIOps($values_4);
        } elseif (\array_key_exists('BlkioDeviceWriteIOps', $data) && null === $data['BlkioDeviceWriteIOps']) {
            $object->setBlkioDeviceWriteIOps(null);
        }
        if (\array_key_exists('CpuPeriod', $data) && null !== $data['CpuPeriod']) {
            $object->setCpuPeriod($data['CpuPeriod']);
        } elseif (\array_key_exists('CpuPeriod', $data) && null === $data['CpuPeriod']) {
            $object->setCpuPeriod(null);
        }
        if (\array_key_exists('CpuQuota', $data) && null !== $data['CpuQuota']) {
            $object->setCpuQuota($data['CpuQuota']);
        } elseif (\array_key_exists('CpuQuota', $data) && null === $data['CpuQuota']) {
            $object->setCpuQuota(null);
        }
        if (\array_key_exists('CpuRealtimePeriod', $data) && null !== $data['CpuRealtimePeriod']) {
            $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
        } elseif (\array_key_exists('CpuRealtimePeriod', $data) && null === $data['CpuRealtimePeriod']) {
            $object->setCpuRealtimePeriod(null);
        }
        if (\array_key_exists('CpuRealtimeRuntime', $data) && null !== $data['CpuRealtimeRuntime']) {
            $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
        } elseif (\array_key_exists('CpuRealtimeRuntime', $data) && null === $data['CpuRealtimeRuntime']) {
            $object->setCpuRealtimeRuntime(null);
        }
        if (\array_key_exists('CpusetCpus', $data) && null !== $data['CpusetCpus']) {
            $object->setCpusetCpus($data['CpusetCpus']);
        } elseif (\array_key_exists('CpusetCpus', $data) && null === $data['CpusetCpus']) {
            $object->setCpusetCpus(null);
        }
        if (\array_key_exists('CpusetMems', $data) && null !== $data['CpusetMems']) {
            $object->setCpusetMems($data['CpusetMems']);
        } elseif (\array_key_exists('CpusetMems', $data) && null === $data['CpusetMems']) {
            $object->setCpusetMems(null);
        }
        if (\array_key_exists('Devices', $data) && null !== $data['Devices']) {
            $values_5 = [];
            foreach ($data['Devices'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\API\\Model\\DeviceMapping', 'json', $context);
            }
            $object->setDevices($values_5);
        } elseif (\array_key_exists('Devices', $data) && null === $data['Devices']) {
            $object->setDevices(null);
        }
        if (\array_key_exists('DeviceCgroupRules', $data) && null !== $data['DeviceCgroupRules']) {
            $values_6 = [];
            foreach ($data['DeviceCgroupRules'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setDeviceCgroupRules($values_6);
        } elseif (\array_key_exists('DeviceCgroupRules', $data) && null === $data['DeviceCgroupRules']) {
            $object->setDeviceCgroupRules(null);
        }
        if (\array_key_exists('DiskQuota', $data) && null !== $data['DiskQuota']) {
            $object->setDiskQuota($data['DiskQuota']);
        } elseif (\array_key_exists('DiskQuota', $data) && null === $data['DiskQuota']) {
            $object->setDiskQuota(null);
        }
        if (\array_key_exists('KernelMemory', $data) && null !== $data['KernelMemory']) {
            $object->setKernelMemory($data['KernelMemory']);
        } elseif (\array_key_exists('KernelMemory', $data) && null === $data['KernelMemory']) {
            $object->setKernelMemory(null);
        }
        if (\array_key_exists('MemoryReservation', $data) && null !== $data['MemoryReservation']) {
            $object->setMemoryReservation($data['MemoryReservation']);
        } elseif (\array_key_exists('MemoryReservation', $data) && null === $data['MemoryReservation']) {
            $object->setMemoryReservation(null);
        }
        if (\array_key_exists('MemorySwap', $data) && null !== $data['MemorySwap']) {
            $object->setMemorySwap($data['MemorySwap']);
        } elseif (\array_key_exists('MemorySwap', $data) && null === $data['MemorySwap']) {
            $object->setMemorySwap(null);
        }
        if (\array_key_exists('MemorySwappiness', $data) && null !== $data['MemorySwappiness']) {
            $object->setMemorySwappiness($data['MemorySwappiness']);
        } elseif (\array_key_exists('MemorySwappiness', $data) && null === $data['MemorySwappiness']) {
            $object->setMemorySwappiness(null);
        }
        if (\array_key_exists('NanoCPUs', $data) && null !== $data['NanoCPUs']) {
            $object->setNanoCPUs($data['NanoCPUs']);
        } elseif (\array_key_exists('NanoCPUs', $data) && null === $data['NanoCPUs']) {
            $object->setNanoCPUs(null);
        }
        if (\array_key_exists('OomKillDisable', $data) && null !== $data['OomKillDisable']) {
            $object->setOomKillDisable($data['OomKillDisable']);
        } elseif (\array_key_exists('OomKillDisable', $data) && null === $data['OomKillDisable']) {
            $object->setOomKillDisable(null);
        }
        if (\array_key_exists('PidsLimit', $data) && null !== $data['PidsLimit']) {
            $object->setPidsLimit($data['PidsLimit']);
        } elseif (\array_key_exists('PidsLimit', $data) && null === $data['PidsLimit']) {
            $object->setPidsLimit(null);
        }
        if (\array_key_exists('Ulimits', $data) && null !== $data['Ulimits']) {
            $values_7 = [];
            foreach ($data['Ulimits'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Docker\\API\\Model\\ResourcesUlimitsItem', 'json', $context);
            }
            $object->setUlimits($values_7);
        } elseif (\array_key_exists('Ulimits', $data) && null === $data['Ulimits']) {
            $object->setUlimits(null);
        }
        if (\array_key_exists('CpuCount', $data) && null !== $data['CpuCount']) {
            $object->setCpuCount($data['CpuCount']);
        } elseif (\array_key_exists('CpuCount', $data) && null === $data['CpuCount']) {
            $object->setCpuCount(null);
        }
        if (\array_key_exists('CpuPercent', $data) && null !== $data['CpuPercent']) {
            $object->setCpuPercent($data['CpuPercent']);
        } elseif (\array_key_exists('CpuPercent', $data) && null === $data['CpuPercent']) {
            $object->setCpuPercent(null);
        }
        if (\array_key_exists('IOMaximumIOps', $data) && null !== $data['IOMaximumIOps']) {
            $object->setIOMaximumIOps($data['IOMaximumIOps']);
        } elseif (\array_key_exists('IOMaximumIOps', $data) && null === $data['IOMaximumIOps']) {
            $object->setIOMaximumIOps(null);
        }
        if (\array_key_exists('IOMaximumBandwidth', $data) && null !== $data['IOMaximumBandwidth']) {
            $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
        } elseif (\array_key_exists('IOMaximumBandwidth', $data) && null === $data['IOMaximumBandwidth']) {
            $object->setIOMaximumBandwidth(null);
        }
        if (\array_key_exists('Binds', $data) && null !== $data['Binds']) {
            $values_8 = [];
            foreach ($data['Binds'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setBinds($values_8);
        } elseif (\array_key_exists('Binds', $data) && null === $data['Binds']) {
            $object->setBinds(null);
        }
        if (\array_key_exists('ContainerIDFile', $data) && null !== $data['ContainerIDFile']) {
            $object->setContainerIDFile($data['ContainerIDFile']);
        } elseif (\array_key_exists('ContainerIDFile', $data) && null === $data['ContainerIDFile']) {
            $object->setContainerIDFile(null);
        }
        if (\array_key_exists('LogConfig', $data) && null !== $data['LogConfig']) {
            $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], 'Docker\\API\\Model\\HostConfigLogConfig', 'json', $context));
        } elseif (\array_key_exists('LogConfig', $data) && null === $data['LogConfig']) {
            $object->setLogConfig(null);
        }
        if (\array_key_exists('NetworkMode', $data) && null !== $data['NetworkMode']) {
            $object->setNetworkMode($data['NetworkMode']);
        } elseif (\array_key_exists('NetworkMode', $data) && null === $data['NetworkMode']) {
            $object->setNetworkMode(null);
        }
        if (\array_key_exists('PortBindings', $data) && null !== $data['PortBindings']) {
            $values_9 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['PortBindings'] as $key => $value_9) {
                $values_10 = [];
                foreach ($value_9 as $value_10) {
                    $values_10[] = $this->denormalizer->denormalize($value_10, 'Docker\\API\\Model\\PortBinding', 'json', $context);
                }
                $values_9[$key] = $values_10;
            }
            $object->setPortBindings($values_9);
        } elseif (\array_key_exists('PortBindings', $data) && null === $data['PortBindings']) {
            $object->setPortBindings(null);
        }
        if (\array_key_exists('RestartPolicy', $data) && null !== $data['RestartPolicy']) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], 'Docker\\API\\Model\\RestartPolicy', 'json', $context));
        } elseif (\array_key_exists('RestartPolicy', $data) && null === $data['RestartPolicy']) {
            $object->setRestartPolicy(null);
        }
        if (\array_key_exists('AutoRemove', $data) && null !== $data['AutoRemove']) {
            $object->setAutoRemove($data['AutoRemove']);
        } elseif (\array_key_exists('AutoRemove', $data) && null === $data['AutoRemove']) {
            $object->setAutoRemove(null);
        }
        if (\array_key_exists('VolumeDriver', $data) && null !== $data['VolumeDriver']) {
            $object->setVolumeDriver($data['VolumeDriver']);
        } elseif (\array_key_exists('VolumeDriver', $data) && null === $data['VolumeDriver']) {
            $object->setVolumeDriver(null);
        }
        if (\array_key_exists('VolumesFrom', $data) && null !== $data['VolumesFrom']) {
            $values_11 = [];
            foreach ($data['VolumesFrom'] as $value_11) {
                $values_11[] = $value_11;
            }
            $object->setVolumesFrom($values_11);
        } elseif (\array_key_exists('VolumesFrom', $data) && null === $data['VolumesFrom']) {
            $object->setVolumesFrom(null);
        }
        if (\array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $values_12 = [];
            foreach ($data['Mounts'] as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, 'Docker\\API\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_12);
        } elseif (\array_key_exists('Mounts', $data) && null === $data['Mounts']) {
            $object->setMounts(null);
        }
        if (\array_key_exists('CapAdd', $data) && null !== $data['CapAdd']) {
            $values_13 = [];
            foreach ($data['CapAdd'] as $value_13) {
                $values_13[] = $value_13;
            }
            $object->setCapAdd($values_13);
        } elseif (\array_key_exists('CapAdd', $data) && null === $data['CapAdd']) {
            $object->setCapAdd(null);
        }
        if (\array_key_exists('CapDrop', $data) && null !== $data['CapDrop']) {
            $values_14 = [];
            foreach ($data['CapDrop'] as $value_14) {
                $values_14[] = $value_14;
            }
            $object->setCapDrop($values_14);
        } elseif (\array_key_exists('CapDrop', $data) && null === $data['CapDrop']) {
            $object->setCapDrop(null);
        }
        if (\array_key_exists('Dns', $data) && null !== $data['Dns']) {
            $values_15 = [];
            foreach ($data['Dns'] as $value_15) {
                $values_15[] = $value_15;
            }
            $object->setDns($values_15);
        } elseif (\array_key_exists('Dns', $data) && null === $data['Dns']) {
            $object->setDns(null);
        }
        if (\array_key_exists('DnsOptions', $data) && null !== $data['DnsOptions']) {
            $values_16 = [];
            foreach ($data['DnsOptions'] as $value_16) {
                $values_16[] = $value_16;
            }
            $object->setDnsOptions($values_16);
        } elseif (\array_key_exists('DnsOptions', $data) && null === $data['DnsOptions']) {
            $object->setDnsOptions(null);
        }
        if (\array_key_exists('DnsSearch', $data) && null !== $data['DnsSearch']) {
            $values_17 = [];
            foreach ($data['DnsSearch'] as $value_17) {
                $values_17[] = $value_17;
            }
            $object->setDnsSearch($values_17);
        } elseif (\array_key_exists('DnsSearch', $data) && null === $data['DnsSearch']) {
            $object->setDnsSearch(null);
        }
        if (\array_key_exists('ExtraHosts', $data) && null !== $data['ExtraHosts']) {
            $values_18 = [];
            foreach ($data['ExtraHosts'] as $value_18) {
                $values_18[] = $value_18;
            }
            $object->setExtraHosts($values_18);
        } elseif (\array_key_exists('ExtraHosts', $data) && null === $data['ExtraHosts']) {
            $object->setExtraHosts(null);
        }
        if (\array_key_exists('GroupAdd', $data) && null !== $data['GroupAdd']) {
            $values_19 = [];
            foreach ($data['GroupAdd'] as $value_19) {
                $values_19[] = $value_19;
            }
            $object->setGroupAdd($values_19);
        } elseif (\array_key_exists('GroupAdd', $data) && null === $data['GroupAdd']) {
            $object->setGroupAdd(null);
        }
        if (\array_key_exists('IpcMode', $data) && null !== $data['IpcMode']) {
            $object->setIpcMode($data['IpcMode']);
        } elseif (\array_key_exists('IpcMode', $data) && null === $data['IpcMode']) {
            $object->setIpcMode(null);
        }
        if (\array_key_exists('Cgroup', $data) && null !== $data['Cgroup']) {
            $object->setCgroup($data['Cgroup']);
        } elseif (\array_key_exists('Cgroup', $data) && null === $data['Cgroup']) {
            $object->setCgroup(null);
        }
        if (\array_key_exists('Links', $data) && null !== $data['Links']) {
            $values_20 = [];
            foreach ($data['Links'] as $value_20) {
                $values_20[] = $value_20;
            }
            $object->setLinks($values_20);
        } elseif (\array_key_exists('Links', $data) && null === $data['Links']) {
            $object->setLinks(null);
        }
        if (\array_key_exists('OomScoreAdj', $data) && null !== $data['OomScoreAdj']) {
            $object->setOomScoreAdj($data['OomScoreAdj']);
        } elseif (\array_key_exists('OomScoreAdj', $data) && null === $data['OomScoreAdj']) {
            $object->setOomScoreAdj(null);
        }
        if (\array_key_exists('PidMode', $data) && null !== $data['PidMode']) {
            $object->setPidMode($data['PidMode']);
        } elseif (\array_key_exists('PidMode', $data) && null === $data['PidMode']) {
            $object->setPidMode(null);
        }
        if (\array_key_exists('Privileged', $data) && null !== $data['Privileged']) {
            $object->setPrivileged($data['Privileged']);
        } elseif (\array_key_exists('Privileged', $data) && null === $data['Privileged']) {
            $object->setPrivileged(null);
        }
        if (\array_key_exists('PublishAllPorts', $data) && null !== $data['PublishAllPorts']) {
            $object->setPublishAllPorts($data['PublishAllPorts']);
        } elseif (\array_key_exists('PublishAllPorts', $data) && null === $data['PublishAllPorts']) {
            $object->setPublishAllPorts(null);
        }
        if (\array_key_exists('ReadonlyRootfs', $data) && null !== $data['ReadonlyRootfs']) {
            $object->setReadonlyRootfs($data['ReadonlyRootfs']);
        } elseif (\array_key_exists('ReadonlyRootfs', $data) && null === $data['ReadonlyRootfs']) {
            $object->setReadonlyRootfs(null);
        }
        if (\array_key_exists('SecurityOpt', $data) && null !== $data['SecurityOpt']) {
            $values_21 = [];
            foreach ($data['SecurityOpt'] as $value_21) {
                $values_21[] = $value_21;
            }
            $object->setSecurityOpt($values_21);
        } elseif (\array_key_exists('SecurityOpt', $data) && null === $data['SecurityOpt']) {
            $object->setSecurityOpt(null);
        }
        if (\array_key_exists('StorageOpt', $data) && null !== $data['StorageOpt']) {
            $values_22 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['StorageOpt'] as $key_1 => $value_22) {
                $values_22[$key_1] = $value_22;
            }
            $object->setStorageOpt($values_22);
        } elseif (\array_key_exists('StorageOpt', $data) && null === $data['StorageOpt']) {
            $object->setStorageOpt(null);
        }
        if (\array_key_exists('Tmpfs', $data) && null !== $data['Tmpfs']) {
            $values_23 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Tmpfs'] as $key_2 => $value_23) {
                $values_23[$key_2] = $value_23;
            }
            $object->setTmpfs($values_23);
        } elseif (\array_key_exists('Tmpfs', $data) && null === $data['Tmpfs']) {
            $object->setTmpfs(null);
        }
        if (\array_key_exists('UTSMode', $data) && null !== $data['UTSMode']) {
            $object->setUTSMode($data['UTSMode']);
        } elseif (\array_key_exists('UTSMode', $data) && null === $data['UTSMode']) {
            $object->setUTSMode(null);
        }
        if (\array_key_exists('UsernsMode', $data) && null !== $data['UsernsMode']) {
            $object->setUsernsMode($data['UsernsMode']);
        } elseif (\array_key_exists('UsernsMode', $data) && null === $data['UsernsMode']) {
            $object->setUsernsMode(null);
        }
        if (\array_key_exists('ShmSize', $data) && null !== $data['ShmSize']) {
            $object->setShmSize($data['ShmSize']);
        } elseif (\array_key_exists('ShmSize', $data) && null === $data['ShmSize']) {
            $object->setShmSize(null);
        }
        if (\array_key_exists('Sysctls', $data) && null !== $data['Sysctls']) {
            $values_24 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Sysctls'] as $key_3 => $value_24) {
                $values_24[$key_3] = $value_24;
            }
            $object->setSysctls($values_24);
        } elseif (\array_key_exists('Sysctls', $data) && null === $data['Sysctls']) {
            $object->setSysctls(null);
        }
        if (\array_key_exists('Runtime', $data) && null !== $data['Runtime']) {
            $object->setRuntime($data['Runtime']);
        } elseif (\array_key_exists('Runtime', $data) && null === $data['Runtime']) {
            $object->setRuntime(null);
        }
        if (\array_key_exists('ConsoleSize', $data) && null !== $data['ConsoleSize']) {
            $values_25 = [];
            foreach ($data['ConsoleSize'] as $value_25) {
                $values_25[] = $value_25;
            }
            $object->setConsoleSize($values_25);
        } elseif (\array_key_exists('ConsoleSize', $data) && null === $data['ConsoleSize']) {
            $object->setConsoleSize(null);
        }
        if (\array_key_exists('Isolation', $data) && null !== $data['Isolation']) {
            $object->setIsolation($data['Isolation']);
        } elseif (\array_key_exists('Isolation', $data) && null === $data['Isolation']) {
            $object->setIsolation(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCpuShares()) {
            $data['CpuShares'] = $object->getCpuShares();
        }
        if (null !== $object->getMemory()) {
            $data['Memory'] = $object->getMemory();
        }
        if (null !== $object->getCgroupParent()) {
            $data['CgroupParent'] = $object->getCgroupParent();
        }
        if (null !== $object->getBlkioWeight()) {
            $data['BlkioWeight'] = $object->getBlkioWeight();
        }
        if (null !== $object->getBlkioWeightDevice()) {
            $values = [];
            foreach ($object->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['BlkioWeightDevice'] = $values;
        }
        if (null !== $object->getBlkioDeviceReadBps()) {
            $values_1 = [];
            foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['BlkioDeviceReadBps'] = $values_1;
        }
        if (null !== $object->getBlkioDeviceWriteBps()) {
            $values_2 = [];
            foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['BlkioDeviceWriteBps'] = $values_2;
        }
        if (null !== $object->getBlkioDeviceReadIOps()) {
            $values_3 = [];
            foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['BlkioDeviceReadIOps'] = $values_3;
        }
        if (null !== $object->getBlkioDeviceWriteIOps()) {
            $values_4 = [];
            foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['BlkioDeviceWriteIOps'] = $values_4;
        }
        if (null !== $object->getCpuPeriod()) {
            $data['CpuPeriod'] = $object->getCpuPeriod();
        }
        if (null !== $object->getCpuQuota()) {
            $data['CpuQuota'] = $object->getCpuQuota();
        }
        if (null !== $object->getCpuRealtimePeriod()) {
            $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
        }
        if (null !== $object->getCpuRealtimeRuntime()) {
            $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
        }
        if (null !== $object->getCpusetCpus()) {
            $data['CpusetCpus'] = $object->getCpusetCpus();
        }
        if (null !== $object->getCpusetMems()) {
            $data['CpusetMems'] = $object->getCpusetMems();
        }
        if (null !== $object->getDevices()) {
            $values_5 = [];
            foreach ($object->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['Devices'] = $values_5;
        }
        if (null !== $object->getDeviceCgroupRules()) {
            $values_6 = [];
            foreach ($object->getDeviceCgroupRules() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['DeviceCgroupRules'] = $values_6;
        }
        if (null !== $object->getDiskQuota()) {
            $data['DiskQuota'] = $object->getDiskQuota();
        }
        if (null !== $object->getKernelMemory()) {
            $data['KernelMemory'] = $object->getKernelMemory();
        }
        if (null !== $object->getMemoryReservation()) {
            $data['MemoryReservation'] = $object->getMemoryReservation();
        }
        if (null !== $object->getMemorySwap()) {
            $data['MemorySwap'] = $object->getMemorySwap();
        }
        if (null !== $object->getMemorySwappiness()) {
            $data['MemorySwappiness'] = $object->getMemorySwappiness();
        }
        if (null !== $object->getNanoCPUs()) {
            $data['NanoCPUs'] = $object->getNanoCPUs();
        }
        if (null !== $object->getOomKillDisable()) {
            $data['OomKillDisable'] = $object->getOomKillDisable();
        }
        if (null !== $object->getPidsLimit()) {
            $data['PidsLimit'] = $object->getPidsLimit();
        }
        if (null !== $object->getUlimits()) {
            $values_7 = [];
            foreach ($object->getUlimits() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['Ulimits'] = $values_7;
        }
        if (null !== $object->getCpuCount()) {
            $data['CpuCount'] = $object->getCpuCount();
        }
        if (null !== $object->getCpuPercent()) {
            $data['CpuPercent'] = $object->getCpuPercent();
        }
        if (null !== $object->getIOMaximumIOps()) {
            $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
        }
        if (null !== $object->getIOMaximumBandwidth()) {
            $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
        }
        if (null !== $object->getBinds()) {
            $values_8 = [];
            foreach ($object->getBinds() as $value_8) {
                $values_8[] = $value_8;
            }
            $data['Binds'] = $values_8;
        }
        if (null !== $object->getContainerIDFile()) {
            $data['ContainerIDFile'] = $object->getContainerIDFile();
        }
        if (null !== $object->getLogConfig()) {
            $data['LogConfig'] = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkMode()) {
            $data['NetworkMode'] = $object->getNetworkMode();
        }
        if (null !== $object->getPortBindings()) {
            $values_9 = [];
            foreach ($object->getPortBindings() as $key => $value_9) {
                $values_10 = [];
                foreach ($value_9 as $value_10) {
                    $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
                }
                $values_9[$key] = $values_10;
            }
            $data['PortBindings'] = $values_9;
        }
        if (null !== $object->getRestartPolicy()) {
            $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        }
        if (null !== $object->getAutoRemove()) {
            $data['AutoRemove'] = $object->getAutoRemove();
        }
        if (null !== $object->getVolumeDriver()) {
            $data['VolumeDriver'] = $object->getVolumeDriver();
        }
        if (null !== $object->getVolumesFrom()) {
            $values_11 = [];
            foreach ($object->getVolumesFrom() as $value_11) {
                $values_11[] = $value_11;
            }
            $data['VolumesFrom'] = $values_11;
        }
        if (null !== $object->getMounts()) {
            $values_12 = [];
            foreach ($object->getMounts() as $value_12) {
                $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
            }
            $data['Mounts'] = $values_12;
        }
        if (null !== $object->getCapAdd()) {
            $values_13 = [];
            foreach ($object->getCapAdd() as $value_13) {
                $values_13[] = $value_13;
            }
            $data['CapAdd'] = $values_13;
        }
        if (null !== $object->getCapDrop()) {
            $values_14 = [];
            foreach ($object->getCapDrop() as $value_14) {
                $values_14[] = $value_14;
            }
            $data['CapDrop'] = $values_14;
        }
        if (null !== $object->getDns()) {
            $values_15 = [];
            foreach ($object->getDns() as $value_15) {
                $values_15[] = $value_15;
            }
            $data['Dns'] = $values_15;
        }
        if (null !== $object->getDnsOptions()) {
            $values_16 = [];
            foreach ($object->getDnsOptions() as $value_16) {
                $values_16[] = $value_16;
            }
            $data['DnsOptions'] = $values_16;
        }
        if (null !== $object->getDnsSearch()) {
            $values_17 = [];
            foreach ($object->getDnsSearch() as $value_17) {
                $values_17[] = $value_17;
            }
            $data['DnsSearch'] = $values_17;
        }
        if (null !== $object->getExtraHosts()) {
            $values_18 = [];
            foreach ($object->getExtraHosts() as $value_18) {
                $values_18[] = $value_18;
            }
            $data['ExtraHosts'] = $values_18;
        }
        if (null !== $object->getGroupAdd()) {
            $values_19 = [];
            foreach ($object->getGroupAdd() as $value_19) {
                $values_19[] = $value_19;
            }
            $data['GroupAdd'] = $values_19;
        }
        if (null !== $object->getIpcMode()) {
            $data['IpcMode'] = $object->getIpcMode();
        }
        if (null !== $object->getCgroup()) {
            $data['Cgroup'] = $object->getCgroup();
        }
        if (null !== $object->getLinks()) {
            $values_20 = [];
            foreach ($object->getLinks() as $value_20) {
                $values_20[] = $value_20;
            }
            $data['Links'] = $values_20;
        }
        if (null !== $object->getOomScoreAdj()) {
            $data['OomScoreAdj'] = $object->getOomScoreAdj();
        }
        if (null !== $object->getPidMode()) {
            $data['PidMode'] = $object->getPidMode();
        }
        if (null !== $object->getPrivileged()) {
            $data['Privileged'] = $object->getPrivileged();
        }
        if (null !== $object->getPublishAllPorts()) {
            $data['PublishAllPorts'] = $object->getPublishAllPorts();
        }
        if (null !== $object->getReadonlyRootfs()) {
            $data['ReadonlyRootfs'] = $object->getReadonlyRootfs();
        }
        if (null !== $object->getSecurityOpt()) {
            $values_21 = [];
            foreach ($object->getSecurityOpt() as $value_21) {
                $values_21[] = $value_21;
            }
            $data['SecurityOpt'] = $values_21;
        }
        if (null !== $object->getStorageOpt()) {
            $values_22 = [];
            foreach ($object->getStorageOpt() as $key_1 => $value_22) {
                $values_22[$key_1] = $value_22;
            }
            $data['StorageOpt'] = $values_22;
        }
        if (null !== $object->getTmpfs()) {
            $values_23 = [];
            foreach ($object->getTmpfs() as $key_2 => $value_23) {
                $values_23[$key_2] = $value_23;
            }
            $data['Tmpfs'] = $values_23;
        }
        if (null !== $object->getUTSMode()) {
            $data['UTSMode'] = $object->getUTSMode();
        }
        if (null !== $object->getUsernsMode()) {
            $data['UsernsMode'] = $object->getUsernsMode();
        }
        if (null !== $object->getShmSize()) {
            $data['ShmSize'] = $object->getShmSize();
        }
        if (null !== $object->getSysctls()) {
            $values_24 = [];
            foreach ($object->getSysctls() as $key_3 => $value_24) {
                $values_24[$key_3] = $value_24;
            }
            $data['Sysctls'] = $values_24;
        }
        if (null !== $object->getRuntime()) {
            $data['Runtime'] = $object->getRuntime();
        }
        if (null !== $object->getConsoleSize()) {
            $values_25 = [];
            foreach ($object->getConsoleSize() as $value_25) {
                $values_25[] = $value_25;
            }
            $data['ConsoleSize'] = $values_25;
        }
        if (null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        }

        return $data;
    }
}
