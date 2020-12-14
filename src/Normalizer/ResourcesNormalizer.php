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

class ResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\Resources' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\Resources' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Resources();
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

        return $data;
    }
}
