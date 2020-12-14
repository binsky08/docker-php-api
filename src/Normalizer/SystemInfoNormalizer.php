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

class SystemInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\SystemInfo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\SystemInfo' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SystemInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ID', $data) && null !== $data['ID']) {
            $object->setID($data['ID']);
        } elseif (\array_key_exists('ID', $data) && null === $data['ID']) {
            $object->setID(null);
        }
        if (\array_key_exists('Containers', $data) && null !== $data['Containers']) {
            $object->setContainers($data['Containers']);
        } elseif (\array_key_exists('Containers', $data) && null === $data['Containers']) {
            $object->setContainers(null);
        }
        if (\array_key_exists('ContainersRunning', $data) && null !== $data['ContainersRunning']) {
            $object->setContainersRunning($data['ContainersRunning']);
        } elseif (\array_key_exists('ContainersRunning', $data) && null === $data['ContainersRunning']) {
            $object->setContainersRunning(null);
        }
        if (\array_key_exists('ContainersPaused', $data) && null !== $data['ContainersPaused']) {
            $object->setContainersPaused($data['ContainersPaused']);
        } elseif (\array_key_exists('ContainersPaused', $data) && null === $data['ContainersPaused']) {
            $object->setContainersPaused(null);
        }
        if (\array_key_exists('ContainersStopped', $data) && null !== $data['ContainersStopped']) {
            $object->setContainersStopped($data['ContainersStopped']);
        } elseif (\array_key_exists('ContainersStopped', $data) && null === $data['ContainersStopped']) {
            $object->setContainersStopped(null);
        }
        if (\array_key_exists('Images', $data) && null !== $data['Images']) {
            $object->setImages($data['Images']);
        } elseif (\array_key_exists('Images', $data) && null === $data['Images']) {
            $object->setImages(null);
        }
        if (\array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $object->setDriver($data['Driver']);
        } elseif (\array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (\array_key_exists('DriverStatus', $data) && null !== $data['DriverStatus']) {
            $values = [];
            foreach ($data['DriverStatus'] as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setDriverStatus($values);
        } elseif (\array_key_exists('DriverStatus', $data) && null === $data['DriverStatus']) {
            $object->setDriverStatus(null);
        }
        if (\array_key_exists('DockerRootDir', $data) && null !== $data['DockerRootDir']) {
            $object->setDockerRootDir($data['DockerRootDir']);
        } elseif (\array_key_exists('DockerRootDir', $data) && null === $data['DockerRootDir']) {
            $object->setDockerRootDir(null);
        }
        if (\array_key_exists('Plugins', $data) && null !== $data['Plugins']) {
            $object->setPlugins($this->denormalizer->denormalize($data['Plugins'], 'Docker\\API\\Model\\PluginsInfo', 'json', $context));
        } elseif (\array_key_exists('Plugins', $data) && null === $data['Plugins']) {
            $object->setPlugins(null);
        }
        if (\array_key_exists('MemoryLimit', $data) && null !== $data['MemoryLimit']) {
            $object->setMemoryLimit($data['MemoryLimit']);
        } elseif (\array_key_exists('MemoryLimit', $data) && null === $data['MemoryLimit']) {
            $object->setMemoryLimit(null);
        }
        if (\array_key_exists('SwapLimit', $data) && null !== $data['SwapLimit']) {
            $object->setSwapLimit($data['SwapLimit']);
        } elseif (\array_key_exists('SwapLimit', $data) && null === $data['SwapLimit']) {
            $object->setSwapLimit(null);
        }
        if (\array_key_exists('KernelMemory', $data) && null !== $data['KernelMemory']) {
            $object->setKernelMemory($data['KernelMemory']);
        } elseif (\array_key_exists('KernelMemory', $data) && null === $data['KernelMemory']) {
            $object->setKernelMemory(null);
        }
        if (\array_key_exists('CpuCfsPeriod', $data) && null !== $data['CpuCfsPeriod']) {
            $object->setCpuCfsPeriod($data['CpuCfsPeriod']);
        } elseif (\array_key_exists('CpuCfsPeriod', $data) && null === $data['CpuCfsPeriod']) {
            $object->setCpuCfsPeriod(null);
        }
        if (\array_key_exists('CpuCfsQuota', $data) && null !== $data['CpuCfsQuota']) {
            $object->setCpuCfsQuota($data['CpuCfsQuota']);
        } elseif (\array_key_exists('CpuCfsQuota', $data) && null === $data['CpuCfsQuota']) {
            $object->setCpuCfsQuota(null);
        }
        if (\array_key_exists('CPUShares', $data) && null !== $data['CPUShares']) {
            $object->setCPUShares($data['CPUShares']);
        } elseif (\array_key_exists('CPUShares', $data) && null === $data['CPUShares']) {
            $object->setCPUShares(null);
        }
        if (\array_key_exists('CPUSet', $data) && null !== $data['CPUSet']) {
            $object->setCPUSet($data['CPUSet']);
        } elseif (\array_key_exists('CPUSet', $data) && null === $data['CPUSet']) {
            $object->setCPUSet(null);
        }
        if (\array_key_exists('PidsLimit', $data) && null !== $data['PidsLimit']) {
            $object->setPidsLimit($data['PidsLimit']);
        } elseif (\array_key_exists('PidsLimit', $data) && null === $data['PidsLimit']) {
            $object->setPidsLimit(null);
        }
        if (\array_key_exists('OomKillDisable', $data) && null !== $data['OomKillDisable']) {
            $object->setOomKillDisable($data['OomKillDisable']);
        } elseif (\array_key_exists('OomKillDisable', $data) && null === $data['OomKillDisable']) {
            $object->setOomKillDisable(null);
        }
        if (\array_key_exists('IPv4Forwarding', $data) && null !== $data['IPv4Forwarding']) {
            $object->setIPv4Forwarding($data['IPv4Forwarding']);
        } elseif (\array_key_exists('IPv4Forwarding', $data) && null === $data['IPv4Forwarding']) {
            $object->setIPv4Forwarding(null);
        }
        if (\array_key_exists('BridgeNfIptables', $data) && null !== $data['BridgeNfIptables']) {
            $object->setBridgeNfIptables($data['BridgeNfIptables']);
        } elseif (\array_key_exists('BridgeNfIptables', $data) && null === $data['BridgeNfIptables']) {
            $object->setBridgeNfIptables(null);
        }
        if (\array_key_exists('BridgeNfIp6tables', $data) && null !== $data['BridgeNfIp6tables']) {
            $object->setBridgeNfIp6tables($data['BridgeNfIp6tables']);
        } elseif (\array_key_exists('BridgeNfIp6tables', $data) && null === $data['BridgeNfIp6tables']) {
            $object->setBridgeNfIp6tables(null);
        }
        if (\array_key_exists('Debug', $data) && null !== $data['Debug']) {
            $object->setDebug($data['Debug']);
        } elseif (\array_key_exists('Debug', $data) && null === $data['Debug']) {
            $object->setDebug(null);
        }
        if (\array_key_exists('NFd', $data) && null !== $data['NFd']) {
            $object->setNFd($data['NFd']);
        } elseif (\array_key_exists('NFd', $data) && null === $data['NFd']) {
            $object->setNFd(null);
        }
        if (\array_key_exists('NGoroutines', $data) && null !== $data['NGoroutines']) {
            $object->setNGoroutines($data['NGoroutines']);
        } elseif (\array_key_exists('NGoroutines', $data) && null === $data['NGoroutines']) {
            $object->setNGoroutines(null);
        }
        if (\array_key_exists('SystemTime', $data) && null !== $data['SystemTime']) {
            $object->setSystemTime($data['SystemTime']);
        } elseif (\array_key_exists('SystemTime', $data) && null === $data['SystemTime']) {
            $object->setSystemTime(null);
        }
        if (\array_key_exists('LoggingDriver', $data) && null !== $data['LoggingDriver']) {
            $object->setLoggingDriver($data['LoggingDriver']);
        } elseif (\array_key_exists('LoggingDriver', $data) && null === $data['LoggingDriver']) {
            $object->setLoggingDriver(null);
        }
        if (\array_key_exists('CgroupDriver', $data) && null !== $data['CgroupDriver']) {
            $object->setCgroupDriver($data['CgroupDriver']);
        } elseif (\array_key_exists('CgroupDriver', $data) && null === $data['CgroupDriver']) {
            $object->setCgroupDriver(null);
        }
        if (\array_key_exists('CgroupVersion', $data) && null !== $data['CgroupVersion']) {
            $object->setCgroupVersion($data['CgroupVersion']);
        } elseif (\array_key_exists('CgroupVersion', $data) && null === $data['CgroupVersion']) {
            $object->setCgroupVersion(null);
        }
        if (\array_key_exists('NEventsListener', $data) && null !== $data['NEventsListener']) {
            $object->setNEventsListener($data['NEventsListener']);
        } elseif (\array_key_exists('NEventsListener', $data) && null === $data['NEventsListener']) {
            $object->setNEventsListener(null);
        }
        if (\array_key_exists('KernelVersion', $data) && null !== $data['KernelVersion']) {
            $object->setKernelVersion($data['KernelVersion']);
        } elseif (\array_key_exists('KernelVersion', $data) && null === $data['KernelVersion']) {
            $object->setKernelVersion(null);
        }
        if (\array_key_exists('OperatingSystem', $data) && null !== $data['OperatingSystem']) {
            $object->setOperatingSystem($data['OperatingSystem']);
        } elseif (\array_key_exists('OperatingSystem', $data) && null === $data['OperatingSystem']) {
            $object->setOperatingSystem(null);
        }
        if (\array_key_exists('OSVersion', $data) && null !== $data['OSVersion']) {
            $object->setOSVersion($data['OSVersion']);
        } elseif (\array_key_exists('OSVersion', $data) && null === $data['OSVersion']) {
            $object->setOSVersion(null);
        }
        if (\array_key_exists('OSType', $data) && null !== $data['OSType']) {
            $object->setOSType($data['OSType']);
        } elseif (\array_key_exists('OSType', $data) && null === $data['OSType']) {
            $object->setOSType(null);
        }
        if (\array_key_exists('Architecture', $data) && null !== $data['Architecture']) {
            $object->setArchitecture($data['Architecture']);
        } elseif (\array_key_exists('Architecture', $data) && null === $data['Architecture']) {
            $object->setArchitecture(null);
        }
        if (\array_key_exists('NCPU', $data) && null !== $data['NCPU']) {
            $object->setNCPU($data['NCPU']);
        } elseif (\array_key_exists('NCPU', $data) && null === $data['NCPU']) {
            $object->setNCPU(null);
        }
        if (\array_key_exists('MemTotal', $data) && null !== $data['MemTotal']) {
            $object->setMemTotal($data['MemTotal']);
        } elseif (\array_key_exists('MemTotal', $data) && null === $data['MemTotal']) {
            $object->setMemTotal(null);
        }
        if (\array_key_exists('IndexServerAddress', $data) && null !== $data['IndexServerAddress']) {
            $object->setIndexServerAddress($data['IndexServerAddress']);
        } elseif (\array_key_exists('IndexServerAddress', $data) && null === $data['IndexServerAddress']) {
            $object->setIndexServerAddress(null);
        }
        if (\array_key_exists('RegistryConfig', $data) && null !== $data['RegistryConfig']) {
            $object->setRegistryConfig($this->denormalizer->denormalize($data['RegistryConfig'], 'Docker\\API\\Model\\RegistryServiceConfig', 'json', $context));
        } elseif (\array_key_exists('RegistryConfig', $data) && null === $data['RegistryConfig']) {
            $object->setRegistryConfig(null);
        }
        if (\array_key_exists('GenericResources', $data) && null !== $data['GenericResources']) {
            $values_2 = [];
            foreach ($data['GenericResources'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\GenericResourcesItem', 'json', $context);
            }
            $object->setGenericResources($values_2);
        } elseif (\array_key_exists('GenericResources', $data) && null === $data['GenericResources']) {
            $object->setGenericResources(null);
        }
        if (\array_key_exists('HttpProxy', $data) && null !== $data['HttpProxy']) {
            $object->setHttpProxy($data['HttpProxy']);
        } elseif (\array_key_exists('HttpProxy', $data) && null === $data['HttpProxy']) {
            $object->setHttpProxy(null);
        }
        if (\array_key_exists('HttpsProxy', $data) && null !== $data['HttpsProxy']) {
            $object->setHttpsProxy($data['HttpsProxy']);
        } elseif (\array_key_exists('HttpsProxy', $data) && null === $data['HttpsProxy']) {
            $object->setHttpsProxy(null);
        }
        if (\array_key_exists('NoProxy', $data) && null !== $data['NoProxy']) {
            $object->setNoProxy($data['NoProxy']);
        } elseif (\array_key_exists('NoProxy', $data) && null === $data['NoProxy']) {
            $object->setNoProxy(null);
        }
        if (\array_key_exists('Name', $data) && null !== $data['Name']) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (\array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $values_3 = [];
            foreach ($data['Labels'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLabels($values_3);
        } elseif (\array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (\array_key_exists('ExperimentalBuild', $data) && null !== $data['ExperimentalBuild']) {
            $object->setExperimentalBuild($data['ExperimentalBuild']);
        } elseif (\array_key_exists('ExperimentalBuild', $data) && null === $data['ExperimentalBuild']) {
            $object->setExperimentalBuild(null);
        }
        if (\array_key_exists('ServerVersion', $data) && null !== $data['ServerVersion']) {
            $object->setServerVersion($data['ServerVersion']);
        } elseif (\array_key_exists('ServerVersion', $data) && null === $data['ServerVersion']) {
            $object->setServerVersion(null);
        }
        if (\array_key_exists('ClusterStore', $data) && null !== $data['ClusterStore']) {
            $object->setClusterStore($data['ClusterStore']);
        } elseif (\array_key_exists('ClusterStore', $data) && null === $data['ClusterStore']) {
            $object->setClusterStore(null);
        }
        if (\array_key_exists('ClusterAdvertise', $data) && null !== $data['ClusterAdvertise']) {
            $object->setClusterAdvertise($data['ClusterAdvertise']);
        } elseif (\array_key_exists('ClusterAdvertise', $data) && null === $data['ClusterAdvertise']) {
            $object->setClusterAdvertise(null);
        }
        if (\array_key_exists('Runtimes', $data) && null !== $data['Runtimes']) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Runtimes'] as $key => $value_4) {
                $values_4[$key] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\Model\\Runtime', 'json', $context);
            }
            $object->setRuntimes($values_4);
        } elseif (\array_key_exists('Runtimes', $data) && null === $data['Runtimes']) {
            $object->setRuntimes(null);
        }
        if (\array_key_exists('DefaultRuntime', $data) && null !== $data['DefaultRuntime']) {
            $object->setDefaultRuntime($data['DefaultRuntime']);
        } elseif (\array_key_exists('DefaultRuntime', $data) && null === $data['DefaultRuntime']) {
            $object->setDefaultRuntime(null);
        }
        if (\array_key_exists('Swarm', $data) && null !== $data['Swarm']) {
            $object->setSwarm($this->denormalizer->denormalize($data['Swarm'], 'Docker\\API\\Model\\SwarmInfo', 'json', $context));
        } elseif (\array_key_exists('Swarm', $data) && null === $data['Swarm']) {
            $object->setSwarm(null);
        }
        if (\array_key_exists('LiveRestoreEnabled', $data) && null !== $data['LiveRestoreEnabled']) {
            $object->setLiveRestoreEnabled($data['LiveRestoreEnabled']);
        } elseif (\array_key_exists('LiveRestoreEnabled', $data) && null === $data['LiveRestoreEnabled']) {
            $object->setLiveRestoreEnabled(null);
        }
        if (\array_key_exists('Isolation', $data) && null !== $data['Isolation']) {
            $object->setIsolation($data['Isolation']);
        } elseif (\array_key_exists('Isolation', $data) && null === $data['Isolation']) {
            $object->setIsolation(null);
        }
        if (\array_key_exists('InitBinary', $data) && null !== $data['InitBinary']) {
            $object->setInitBinary($data['InitBinary']);
        } elseif (\array_key_exists('InitBinary', $data) && null === $data['InitBinary']) {
            $object->setInitBinary(null);
        }
        if (\array_key_exists('ContainerdCommit', $data) && null !== $data['ContainerdCommit']) {
            $object->setContainerdCommit($this->denormalizer->denormalize($data['ContainerdCommit'], 'Docker\\API\\Model\\Commit', 'json', $context));
        } elseif (\array_key_exists('ContainerdCommit', $data) && null === $data['ContainerdCommit']) {
            $object->setContainerdCommit(null);
        }
        if (\array_key_exists('RuncCommit', $data) && null !== $data['RuncCommit']) {
            $object->setRuncCommit($this->denormalizer->denormalize($data['RuncCommit'], 'Docker\\API\\Model\\Commit', 'json', $context));
        } elseif (\array_key_exists('RuncCommit', $data) && null === $data['RuncCommit']) {
            $object->setRuncCommit(null);
        }
        if (\array_key_exists('InitCommit', $data) && null !== $data['InitCommit']) {
            $object->setInitCommit($this->denormalizer->denormalize($data['InitCommit'], 'Docker\\API\\Model\\Commit', 'json', $context));
        } elseif (\array_key_exists('InitCommit', $data) && null === $data['InitCommit']) {
            $object->setInitCommit(null);
        }
        if (\array_key_exists('SecurityOptions', $data) && null !== $data['SecurityOptions']) {
            $values_5 = [];
            foreach ($data['SecurityOptions'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setSecurityOptions($values_5);
        } elseif (\array_key_exists('SecurityOptions', $data) && null === $data['SecurityOptions']) {
            $object->setSecurityOptions(null);
        }
        if (\array_key_exists('ProductLicense', $data) && null !== $data['ProductLicense']) {
            $object->setProductLicense($data['ProductLicense']);
        } elseif (\array_key_exists('ProductLicense', $data) && null === $data['ProductLicense']) {
            $object->setProductLicense(null);
        }
        if (\array_key_exists('DefaultAddressPools', $data) && null !== $data['DefaultAddressPools']) {
            $values_6 = [];
            foreach ($data['DefaultAddressPools'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Docker\\API\\Model\\SystemInfoDefaultAddressPoolsItem', 'json', $context);
            }
            $object->setDefaultAddressPools($values_6);
        } elseif (\array_key_exists('DefaultAddressPools', $data) && null === $data['DefaultAddressPools']) {
            $object->setDefaultAddressPools(null);
        }
        if (\array_key_exists('Warnings', $data) && null !== $data['Warnings']) {
            $values_7 = [];
            foreach ($data['Warnings'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setWarnings($values_7);
        } elseif (\array_key_exists('Warnings', $data) && null === $data['Warnings']) {
            $object->setWarnings(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if (null !== $object->getContainers()) {
            $data['Containers'] = $object->getContainers();
        }
        if (null !== $object->getContainersRunning()) {
            $data['ContainersRunning'] = $object->getContainersRunning();
        }
        if (null !== $object->getContainersPaused()) {
            $data['ContainersPaused'] = $object->getContainersPaused();
        }
        if (null !== $object->getContainersStopped()) {
            $data['ContainersStopped'] = $object->getContainersStopped();
        }
        if (null !== $object->getImages()) {
            $data['Images'] = $object->getImages();
        }
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        }
        if (null !== $object->getDriverStatus()) {
            $values = [];
            foreach ($object->getDriverStatus() as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['DriverStatus'] = $values;
        }
        if (null !== $object->getDockerRootDir()) {
            $data['DockerRootDir'] = $object->getDockerRootDir();
        }
        if (null !== $object->getPlugins()) {
            $data['Plugins'] = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
        }
        if (null !== $object->getMemoryLimit()) {
            $data['MemoryLimit'] = $object->getMemoryLimit();
        }
        if (null !== $object->getSwapLimit()) {
            $data['SwapLimit'] = $object->getSwapLimit();
        }
        if (null !== $object->getKernelMemory()) {
            $data['KernelMemory'] = $object->getKernelMemory();
        }
        if (null !== $object->getCpuCfsPeriod()) {
            $data['CpuCfsPeriod'] = $object->getCpuCfsPeriod();
        }
        if (null !== $object->getCpuCfsQuota()) {
            $data['CpuCfsQuota'] = $object->getCpuCfsQuota();
        }
        if (null !== $object->getCPUShares()) {
            $data['CPUShares'] = $object->getCPUShares();
        }
        if (null !== $object->getCPUSet()) {
            $data['CPUSet'] = $object->getCPUSet();
        }
        if (null !== $object->getPidsLimit()) {
            $data['PidsLimit'] = $object->getPidsLimit();
        }
        if (null !== $object->getOomKillDisable()) {
            $data['OomKillDisable'] = $object->getOomKillDisable();
        }
        if (null !== $object->getIPv4Forwarding()) {
            $data['IPv4Forwarding'] = $object->getIPv4Forwarding();
        }
        if (null !== $object->getBridgeNfIptables()) {
            $data['BridgeNfIptables'] = $object->getBridgeNfIptables();
        }
        if (null !== $object->getBridgeNfIp6tables()) {
            $data['BridgeNfIp6tables'] = $object->getBridgeNfIp6tables();
        }
        if (null !== $object->getDebug()) {
            $data['Debug'] = $object->getDebug();
        }
        if (null !== $object->getNFd()) {
            $data['NFd'] = $object->getNFd();
        }
        if (null !== $object->getNGoroutines()) {
            $data['NGoroutines'] = $object->getNGoroutines();
        }
        if (null !== $object->getSystemTime()) {
            $data['SystemTime'] = $object->getSystemTime();
        }
        if (null !== $object->getLoggingDriver()) {
            $data['LoggingDriver'] = $object->getLoggingDriver();
        }
        if (null !== $object->getCgroupDriver()) {
            $data['CgroupDriver'] = $object->getCgroupDriver();
        }
        if (null !== $object->getCgroupVersion()) {
            $data['CgroupVersion'] = $object->getCgroupVersion();
        }
        if (null !== $object->getNEventsListener()) {
            $data['NEventsListener'] = $object->getNEventsListener();
        }
        if (null !== $object->getKernelVersion()) {
            $data['KernelVersion'] = $object->getKernelVersion();
        }
        if (null !== $object->getOperatingSystem()) {
            $data['OperatingSystem'] = $object->getOperatingSystem();
        }
        if (null !== $object->getOSVersion()) {
            $data['OSVersion'] = $object->getOSVersion();
        }
        if (null !== $object->getOSType()) {
            $data['OSType'] = $object->getOSType();
        }
        if (null !== $object->getArchitecture()) {
            $data['Architecture'] = $object->getArchitecture();
        }
        if (null !== $object->getNCPU()) {
            $data['NCPU'] = $object->getNCPU();
        }
        if (null !== $object->getMemTotal()) {
            $data['MemTotal'] = $object->getMemTotal();
        }
        if (null !== $object->getIndexServerAddress()) {
            $data['IndexServerAddress'] = $object->getIndexServerAddress();
        }
        if (null !== $object->getRegistryConfig()) {
            $data['RegistryConfig'] = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
        }
        if (null !== $object->getGenericResources()) {
            $values_2 = [];
            foreach ($object->getGenericResources() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['GenericResources'] = $values_2;
        }
        if (null !== $object->getHttpProxy()) {
            $data['HttpProxy'] = $object->getHttpProxy();
        }
        if (null !== $object->getHttpsProxy()) {
            $data['HttpsProxy'] = $object->getHttpsProxy();
        }
        if (null !== $object->getNoProxy()) {
            $data['NoProxy'] = $object->getNoProxy();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values_3 = [];
            foreach ($object->getLabels() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['Labels'] = $values_3;
        }
        if (null !== $object->getExperimentalBuild()) {
            $data['ExperimentalBuild'] = $object->getExperimentalBuild();
        }
        if (null !== $object->getServerVersion()) {
            $data['ServerVersion'] = $object->getServerVersion();
        }
        if (null !== $object->getClusterStore()) {
            $data['ClusterStore'] = $object->getClusterStore();
        }
        if (null !== $object->getClusterAdvertise()) {
            $data['ClusterAdvertise'] = $object->getClusterAdvertise();
        }
        if (null !== $object->getRuntimes()) {
            $values_4 = [];
            foreach ($object->getRuntimes() as $key => $value_4) {
                $values_4[$key] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['Runtimes'] = $values_4;
        }
        if (null !== $object->getDefaultRuntime()) {
            $data['DefaultRuntime'] = $object->getDefaultRuntime();
        }
        if (null !== $object->getSwarm()) {
            $data['Swarm'] = $this->normalizer->normalize($object->getSwarm(), 'json', $context);
        }
        if (null !== $object->getLiveRestoreEnabled()) {
            $data['LiveRestoreEnabled'] = $object->getLiveRestoreEnabled();
        }
        if (null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        }
        if (null !== $object->getInitBinary()) {
            $data['InitBinary'] = $object->getInitBinary();
        }
        if (null !== $object->getContainerdCommit()) {
            $data['ContainerdCommit'] = $this->normalizer->normalize($object->getContainerdCommit(), 'json', $context);
        }
        if (null !== $object->getRuncCommit()) {
            $data['RuncCommit'] = $this->normalizer->normalize($object->getRuncCommit(), 'json', $context);
        }
        if (null !== $object->getInitCommit()) {
            $data['InitCommit'] = $this->normalizer->normalize($object->getInitCommit(), 'json', $context);
        }
        if (null !== $object->getSecurityOptions()) {
            $values_5 = [];
            foreach ($object->getSecurityOptions() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['SecurityOptions'] = $values_5;
        }
        if (null !== $object->getProductLicense()) {
            $data['ProductLicense'] = $object->getProductLicense();
        }
        if (null !== $object->getDefaultAddressPools()) {
            $values_6 = [];
            foreach ($object->getDefaultAddressPools() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['DefaultAddressPools'] = $values_6;
        }
        if (null !== $object->getWarnings()) {
            $values_7 = [];
            foreach ($object->getWarnings() as $value_7) {
                $values_7[] = $value_7;
            }
            $data['Warnings'] = $values_7;
        }

        return $data;
    }
}
