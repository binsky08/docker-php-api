<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TaskSpecContainerSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\TaskSpecContainerSpec' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\TaskSpecContainerSpec' === $data::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskSpecContainerSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Image', $data) && null !== $data['Image']) {
            $object->setImage($data['Image']);
        } elseif (\array_key_exists('Image', $data) && null === $data['Image']) {
            $object->setImage(null);
        }
        if (\array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        } elseif (\array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (\array_key_exists('Command', $data) && null !== $data['Command']) {
            $values_1 = [];
            foreach ($data['Command'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCommand($values_1);
        } elseif (\array_key_exists('Command', $data) && null === $data['Command']) {
            $object->setCommand(null);
        }
        if (\array_key_exists('Args', $data) && null !== $data['Args']) {
            $values_2 = [];
            foreach ($data['Args'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setArgs($values_2);
        } elseif (\array_key_exists('Args', $data) && null === $data['Args']) {
            $object->setArgs(null);
        }
        if (\array_key_exists('Hostname', $data) && null !== $data['Hostname']) {
            $object->setHostname($data['Hostname']);
        } elseif (\array_key_exists('Hostname', $data) && null === $data['Hostname']) {
            $object->setHostname(null);
        }
        if (\array_key_exists('Env', $data) && null !== $data['Env']) {
            $values_3 = [];
            foreach ($data['Env'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setEnv($values_3);
        } elseif (\array_key_exists('Env', $data) && null === $data['Env']) {
            $object->setEnv(null);
        }
        if (\array_key_exists('Dir', $data) && null !== $data['Dir']) {
            $object->setDir($data['Dir']);
        } elseif (\array_key_exists('Dir', $data) && null === $data['Dir']) {
            $object->setDir(null);
        }
        if (\array_key_exists('User', $data) && null !== $data['User']) {
            $object->setUser($data['User']);
        } elseif (\array_key_exists('User', $data) && null === $data['User']) {
            $object->setUser(null);
        }
        if (\array_key_exists('Groups', $data) && null !== $data['Groups']) {
            $values_4 = [];
            foreach ($data['Groups'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setGroups($values_4);
        } elseif (\array_key_exists('Groups', $data) && null === $data['Groups']) {
            $object->setGroups(null);
        }
        if (\array_key_exists('Privileges', $data) && null !== $data['Privileges']) {
            $object->setPrivileges($this->denormalizer->denormalize($data['Privileges'], 'Docker\\API\\Model\\TaskSpecContainerSpecPrivileges', 'json', $context));
        } elseif (\array_key_exists('Privileges', $data) && null === $data['Privileges']) {
            $object->setPrivileges(null);
        }
        if (\array_key_exists('TTY', $data) && null !== $data['TTY']) {
            $object->setTTY($data['TTY']);
        } elseif (\array_key_exists('TTY', $data) && null === $data['TTY']) {
            $object->setTTY(null);
        }
        if (\array_key_exists('OpenStdin', $data) && null !== $data['OpenStdin']) {
            $object->setOpenStdin($data['OpenStdin']);
        } elseif (\array_key_exists('OpenStdin', $data) && null === $data['OpenStdin']) {
            $object->setOpenStdin(null);
        }
        if (\array_key_exists('ReadOnly', $data) && null !== $data['ReadOnly']) {
            $object->setReadOnly($data['ReadOnly']);
        } elseif (\array_key_exists('ReadOnly', $data) && null === $data['ReadOnly']) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $values_5 = [];
            foreach ($data['Mounts'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\API\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_5);
        } elseif (\array_key_exists('Mounts', $data) && null === $data['Mounts']) {
            $object->setMounts(null);
        }
        if (\array_key_exists('StopSignal', $data) && null !== $data['StopSignal']) {
            $object->setStopSignal($data['StopSignal']);
        } elseif (\array_key_exists('StopSignal', $data) && null === $data['StopSignal']) {
            $object->setStopSignal(null);
        }
        if (\array_key_exists('StopGracePeriod', $data) && null !== $data['StopGracePeriod']) {
            $object->setStopGracePeriod($data['StopGracePeriod']);
        } elseif (\array_key_exists('StopGracePeriod', $data) && null === $data['StopGracePeriod']) {
            $object->setStopGracePeriod(null);
        }
        if (\array_key_exists('HealthCheck', $data) && null !== $data['HealthCheck']) {
            $object->setHealthCheck($this->denormalizer->denormalize($data['HealthCheck'], 'Docker\\API\\Model\\HealthConfig', 'json', $context));
        } elseif (\array_key_exists('HealthCheck', $data) && null === $data['HealthCheck']) {
            $object->setHealthCheck(null);
        }
        if (\array_key_exists('Hosts', $data) && null !== $data['Hosts']) {
            $values_6 = [];
            foreach ($data['Hosts'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setHosts($values_6);
        } elseif (\array_key_exists('Hosts', $data) && null === $data['Hosts']) {
            $object->setHosts(null);
        }
        if (\array_key_exists('DNSConfig', $data) && null !== $data['DNSConfig']) {
            $object->setDNSConfig($this->denormalizer->denormalize($data['DNSConfig'], 'Docker\\API\\Model\\TaskSpecContainerSpecDNSConfig', 'json', $context));
        } elseif (\array_key_exists('DNSConfig', $data) && null === $data['DNSConfig']) {
            $object->setDNSConfig(null);
        }
        if (\array_key_exists('Secrets', $data) && null !== $data['Secrets']) {
            $values_7 = [];
            foreach ($data['Secrets'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Docker\\API\\Model\\TaskSpecContainerSpecSecretsItem', 'json', $context);
            }
            $object->setSecrets($values_7);
        } elseif (\array_key_exists('Secrets', $data) && null === $data['Secrets']) {
            $object->setSecrets(null);
        }
        if (\array_key_exists('Configs', $data) && null !== $data['Configs']) {
            $values_8 = [];
            foreach ($data['Configs'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem', 'json', $context);
            }
            $object->setConfigs($values_8);
        } elseif (\array_key_exists('Configs', $data) && null === $data['Configs']) {
            $object->setConfigs(null);
        }
        if (\array_key_exists('Isolation', $data) && null !== $data['Isolation']) {
            $object->setIsolation($data['Isolation']);
        } elseif (\array_key_exists('Isolation', $data) && null === $data['Isolation']) {
            $object->setIsolation(null);
        }
        if (\array_key_exists('Init', $data) && null !== $data['Init']) {
            $object->setInit($data['Init']);
        } elseif (\array_key_exists('Init', $data) && null === $data['Init']) {
            $object->setInit(null);
        }
        if (\array_key_exists('Sysctls', $data) && null !== $data['Sysctls']) {
            $values_9 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Sysctls'] as $key_1 => $value_9) {
                $values_9[$key_1] = $value_9;
            }
            $object->setSysctls($values_9);
        } elseif (\array_key_exists('Sysctls', $data) && null === $data['Sysctls']) {
            $object->setSysctls(null);
        }
        if (\array_key_exists('CapabilityAdd', $data) && null !== $data['CapabilityAdd']) {
            $values_10 = [];
            foreach ($data['CapabilityAdd'] as $value_10) {
                $values_10[] = $value_10;
            }
            $object->setCapabilityAdd($values_10);
        } elseif (\array_key_exists('CapabilityAdd', $data) && null === $data['CapabilityAdd']) {
            $object->setCapabilityAdd(null);
        }
        if (\array_key_exists('CapabilityDrop', $data) && null !== $data['CapabilityDrop']) {
            $values_11 = [];
            foreach ($data['CapabilityDrop'] as $value_11) {
                $values_11[] = $value_11;
            }
            $object->setCapabilityDrop($values_11);
        } elseif (\array_key_exists('CapabilityDrop', $data) && null === $data['CapabilityDrop']) {
            $object->setCapabilityDrop(null);
        }
        if (\array_key_exists('Ulimits', $data) && null !== $data['Ulimits']) {
            $values_12 = [];
            foreach ($data['Ulimits'] as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, 'Docker\\API\\Model\\TaskSpecContainerSpecUlimitsItem', 'json', $context);
            }
            $object->setUlimits($values_12);
        } elseif (\array_key_exists('Ulimits', $data) && null === $data['Ulimits']) {
            $object->setUlimits(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getImage()) {
            $data['Image'] = $object->getImage();
        }
        if (null !== $object->getLabels()) {
            $values = [];
            foreach ($object->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Labels'] = $values;
        }
        if (null !== $object->getCommand()) {
            $values_1 = [];
            foreach ($object->getCommand() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Command'] = $values_1;
        }
        if (null !== $object->getArgs()) {
            $values_2 = [];
            foreach ($object->getArgs() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['Args'] = $values_2;
        }
        if (null !== $object->getHostname()) {
            $data['Hostname'] = $object->getHostname();
        }
        if (null !== $object->getEnv()) {
            $values_3 = [];
            foreach ($object->getEnv() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['Env'] = $values_3;
        }
        if (null !== $object->getDir()) {
            $data['Dir'] = $object->getDir();
        }
        if (null !== $object->getUser()) {
            $data['User'] = $object->getUser();
        }
        if (null !== $object->getGroups()) {
            $values_4 = [];
            foreach ($object->getGroups() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['Groups'] = $values_4;
        }
        if (null !== $object->getPrivileges()) {
            $data['Privileges'] = $this->normalizer->normalize($object->getPrivileges(), 'json', $context);
        }
        if (null !== $object->getTTY()) {
            $data['TTY'] = $object->getTTY();
        }
        if (null !== $object->getOpenStdin()) {
            $data['OpenStdin'] = $object->getOpenStdin();
        }
        if (null !== $object->getReadOnly()) {
            $data['ReadOnly'] = $object->getReadOnly();
        }
        if (null !== $object->getMounts()) {
            $values_5 = [];
            foreach ($object->getMounts() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['Mounts'] = $values_5;
        }
        if (null !== $object->getStopSignal()) {
            $data['StopSignal'] = $object->getStopSignal();
        }
        if (null !== $object->getStopGracePeriod()) {
            $data['StopGracePeriod'] = $object->getStopGracePeriod();
        }
        if (null !== $object->getHealthCheck()) {
            $data['HealthCheck'] = $this->normalizer->normalize($object->getHealthCheck(), 'json', $context);
        }
        if (null !== $object->getHosts()) {
            $values_6 = [];
            foreach ($object->getHosts() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['Hosts'] = $values_6;
        }
        if (null !== $object->getDNSConfig()) {
            $data['DNSConfig'] = $this->normalizer->normalize($object->getDNSConfig(), 'json', $context);
        }
        if (null !== $object->getSecrets()) {
            $values_7 = [];
            foreach ($object->getSecrets() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['Secrets'] = $values_7;
        }
        if (null !== $object->getConfigs()) {
            $values_8 = [];
            foreach ($object->getConfigs() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['Configs'] = $values_8;
        }
        if (null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        }
        if (null !== $object->getInit()) {
            $data['Init'] = $object->getInit();
        }
        if (null !== $object->getSysctls()) {
            $values_9 = [];
            foreach ($object->getSysctls() as $key_1 => $value_9) {
                $values_9[$key_1] = $value_9;
            }
            $data['Sysctls'] = $values_9;
        }
        if (null !== $object->getCapabilityAdd()) {
            $values_10 = [];
            foreach ($object->getCapabilityAdd() as $value_10) {
                $values_10[] = $value_10;
            }
            $data['CapabilityAdd'] = $values_10;
        }
        if (null !== $object->getCapabilityDrop()) {
            $values_11 = [];
            foreach ($object->getCapabilityDrop() as $value_11) {
                $values_11[] = $value_11;
            }
            $data['CapabilityDrop'] = $values_11;
        }
        if (null !== $object->getUlimits()) {
            $values_12 = [];
            foreach ($object->getUlimits() as $value_12) {
                $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
            }
            $data['Ulimits'] = $values_12;
        }

        return $data;
    }
}
