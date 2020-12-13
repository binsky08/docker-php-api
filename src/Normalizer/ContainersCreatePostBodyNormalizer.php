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

class ContainersCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ContainersCreatePostBody' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ContainersCreatePostBody' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ContainersCreatePostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Hostname', $data)) {
            $object->setHostname($data['Hostname']);
        }
        if (\array_key_exists('Domainname', $data)) {
            $object->setDomainname($data['Domainname']);
        }
        if (\array_key_exists('User', $data)) {
            $object->setUser($data['User']);
        }
        if (\array_key_exists('AttachStdin', $data)) {
            $object->setAttachStdin($data['AttachStdin']);
        }
        if (\array_key_exists('AttachStdout', $data)) {
            $object->setAttachStdout($data['AttachStdout']);
        }
        if (\array_key_exists('AttachStderr', $data)) {
            $object->setAttachStderr($data['AttachStderr']);
        }
        if (\array_key_exists('ExposedPorts', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['ExposedPorts'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\ContainerConfigExposedPortsItem', 'json', $context);
            }
            $object->setExposedPorts($values);
        }
        if (\array_key_exists('Tty', $data)) {
            $object->setTty($data['Tty']);
        }
        if (\array_key_exists('OpenStdin', $data)) {
            $object->setOpenStdin($data['OpenStdin']);
        }
        if (\array_key_exists('StdinOnce', $data)) {
            $object->setStdinOnce($data['StdinOnce']);
        }
        if (\array_key_exists('Env', $data)) {
            $values_1 = [];
            foreach ($data['Env'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnv($values_1);
        }
        if (\array_key_exists('Cmd', $data)) {
            $values_2 = [];
            foreach ($data['Cmd'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCmd($values_2);
        }
        if (\array_key_exists('Healthcheck', $data)) {
            $object->setHealthcheck($this->denormalizer->denormalize($data['Healthcheck'], 'Docker\\API\\Model\\HealthConfig', 'json', $context));
        }
        if (\array_key_exists('ArgsEscaped', $data)) {
            $object->setArgsEscaped($data['ArgsEscaped']);
        }
        if (\array_key_exists('Image', $data)) {
            $object->setImage($data['Image']);
        }
        if (\array_key_exists('Volumes', $data)) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Volumes'] as $key_1 => $value_3) {
                $values_3[$key_1] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\Model\\ContainerConfigVolumesItem', 'json', $context);
            }
            $object->setVolumes($values_3);
        }
        if (\array_key_exists('WorkingDir', $data)) {
            $object->setWorkingDir($data['WorkingDir']);
        }
        if (\array_key_exists('Entrypoint', $data)) {
            $values_4 = [];
            foreach ($data['Entrypoint'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setEntrypoint($values_4);
        }
        if (\array_key_exists('NetworkDisabled', $data)) {
            $object->setNetworkDisabled($data['NetworkDisabled']);
        }
        if (\array_key_exists('MacAddress', $data)) {
            $object->setMacAddress($data['MacAddress']);
        }
        if (\array_key_exists('OnBuild', $data)) {
            $values_5 = [];
            foreach ($data['OnBuild'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setOnBuild($values_5);
        }
        if (\array_key_exists('Labels', $data)) {
            $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $object->setLabels($values_6);
        }
        if (\array_key_exists('StopSignal', $data)) {
            $object->setStopSignal($data['StopSignal']);
        }
        if (\array_key_exists('StopTimeout', $data)) {
            $object->setStopTimeout($data['StopTimeout']);
        }
        if (\array_key_exists('Shell', $data)) {
            $values_7 = [];
            foreach ($data['Shell'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setShell($values_7);
        }
        if (\array_key_exists('HostConfig', $data)) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], 'Docker\\API\\Model\\HostConfig', 'json', $context));
        }
        if (\array_key_exists('NetworkingConfig', $data)) {
            $object->setNetworkingConfig($this->denormalizer->denormalize($data['NetworkingConfig'], 'Docker\\API\\Model\\ContainersCreatePostBodyNetworkingConfig', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getHostname()) {
            $data['Hostname'] = $object->getHostname();
        }
        if (null !== $object->getDomainname()) {
            $data['Domainname'] = $object->getDomainname();
        }
        if (null !== $object->getUser()) {
            $data['User'] = $object->getUser();
        }
        if (null !== $object->getAttachStdin()) {
            $data['AttachStdin'] = $object->getAttachStdin();
        }
        if (null !== $object->getAttachStdout()) {
            $data['AttachStdout'] = $object->getAttachStdout();
        }
        if (null !== $object->getAttachStderr()) {
            $data['AttachStderr'] = $object->getAttachStderr();
        }
        if (null !== $object->getExposedPorts()) {
            $values = [];
            foreach ($object->getExposedPorts() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ExposedPorts'] = $values;
        }
        if (null !== $object->getTty()) {
            $data['Tty'] = $object->getTty();
        }
        if (null !== $object->getOpenStdin()) {
            $data['OpenStdin'] = $object->getOpenStdin();
        }
        if (null !== $object->getStdinOnce()) {
            $data['StdinOnce'] = $object->getStdinOnce();
        }
        if (null !== $object->getEnv()) {
            $values_1 = [];
            foreach ($object->getEnv() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Env'] = $values_1;
        }
        if (null !== $object->getCmd()) {
            $values_2 = [];
            foreach ($object->getCmd() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['Cmd'] = $values_2;
        }
        if (null !== $object->getHealthcheck()) {
            $data['Healthcheck'] = $this->normalizer->normalize($object->getHealthcheck(), 'json', $context);
        }
        if (null !== $object->getArgsEscaped()) {
            $data['ArgsEscaped'] = $object->getArgsEscaped();
        }
        if (null !== $object->getImage()) {
            $data['Image'] = $object->getImage();
        }
        if (null !== $object->getVolumes()) {
            $values_3 = [];
            foreach ($object->getVolumes() as $key_1 => $value_3) {
                $values_3[$key_1] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['Volumes'] = $values_3;
        }
        if (null !== $object->getWorkingDir()) {
            $data['WorkingDir'] = $object->getWorkingDir();
        }
        if (null !== $object->getEntrypoint()) {
            $values_4 = [];
            foreach ($object->getEntrypoint() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['Entrypoint'] = $values_4;
        }
        if (null !== $object->getNetworkDisabled()) {
            $data['NetworkDisabled'] = $object->getNetworkDisabled();
        }
        if (null !== $object->getMacAddress()) {
            $data['MacAddress'] = $object->getMacAddress();
        }
        if (null !== $object->getOnBuild()) {
            $values_5 = [];
            foreach ($object->getOnBuild() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['OnBuild'] = $values_5;
        }
        if (null !== $object->getLabels()) {
            $values_6 = [];
            foreach ($object->getLabels() as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $data['Labels'] = $values_6;
        }
        if (null !== $object->getStopSignal()) {
            $data['StopSignal'] = $object->getStopSignal();
        }
        if (null !== $object->getStopTimeout()) {
            $data['StopTimeout'] = $object->getStopTimeout();
        }
        if (null !== $object->getShell()) {
            $values_7 = [];
            foreach ($object->getShell() as $value_7) {
                $values_7[] = $value_7;
            }
            $data['Shell'] = $values_7;
        }
        if (null !== $object->getHostConfig()) {
            $data['HostConfig'] = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkingConfig()) {
            $data['NetworkingConfig'] = $this->normalizer->normalize($object->getNetworkingConfig(), 'json', $context);
        }

        return $data;
    }
}
