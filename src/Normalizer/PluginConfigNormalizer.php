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

class PluginConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\PluginConfig' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\PluginConfig' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\PluginConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('DockerVersion', $data)) {
            $object->setDockerVersion($data['DockerVersion']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
        }
        if (\array_key_exists('Documentation', $data)) {
            $object->setDocumentation($data['Documentation']);
        }
        if (\array_key_exists('Interface', $data)) {
            $object->setInterface($this->denormalizer->denormalize($data['Interface'], 'Docker\\API\\Model\\PluginConfigInterface', 'json', $context));
        }
        if (\array_key_exists('Entrypoint', $data)) {
            $values = [];
            foreach ($data['Entrypoint'] as $value) {
                $values[] = $value;
            }
            $object->setEntrypoint($values);
        }
        if (\array_key_exists('WorkDir', $data)) {
            $object->setWorkDir($data['WorkDir']);
        }
        if (\array_key_exists('User', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['User'], 'Docker\\API\\Model\\PluginConfigUser', 'json', $context));
        }
        if (\array_key_exists('Network', $data)) {
            $object->setNetwork($this->denormalizer->denormalize($data['Network'], 'Docker\\API\\Model\\PluginConfigNetwork', 'json', $context));
        }
        if (\array_key_exists('Linux', $data)) {
            $object->setLinux($this->denormalizer->denormalize($data['Linux'], 'Docker\\API\\Model\\PluginConfigLinux', 'json', $context));
        }
        if (\array_key_exists('PropagatedMount', $data)) {
            $object->setPropagatedMount($data['PropagatedMount']);
        }
        if (\array_key_exists('IpcHost', $data)) {
            $object->setIpcHost($data['IpcHost']);
        }
        if (\array_key_exists('PidHost', $data)) {
            $object->setPidHost($data['PidHost']);
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_1 = [];
            foreach ($data['Mounts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\PluginMount', 'json', $context);
            }
            $object->setMounts($values_1);
        }
        if (\array_key_exists('Env', $data)) {
            $values_2 = [];
            foreach ($data['Env'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\PluginEnv', 'json', $context);
            }
            $object->setEnv($values_2);
        }
        if (\array_key_exists('Args', $data)) {
            $object->setArgs($this->denormalizer->denormalize($data['Args'], 'Docker\\API\\Model\\PluginConfigArgs', 'json', $context));
        }
        if (\array_key_exists('rootfs', $data)) {
            $object->setRootfs($this->denormalizer->denormalize($data['rootfs'], 'Docker\\API\\Model\\PluginConfigRootfs', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDockerVersion()) {
            $data['DockerVersion'] = $object->getDockerVersion();
        }
        $data['Description'] = $object->getDescription();
        $data['Documentation'] = $object->getDocumentation();
        $data['Interface'] = $this->normalizer->normalize($object->getInterface(), 'json', $context);
        $values = [];
        foreach ($object->getEntrypoint() as $value) {
            $values[] = $value;
        }
        $data['Entrypoint'] = $values;
        $data['WorkDir'] = $object->getWorkDir();
        if (null !== $object->getUser()) {
            $data['User'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        $data['Network'] = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
        $data['Linux'] = $this->normalizer->normalize($object->getLinux(), 'json', $context);
        $data['PropagatedMount'] = $object->getPropagatedMount();
        $data['IpcHost'] = $object->getIpcHost();
        $data['PidHost'] = $object->getPidHost();
        $values_1 = [];
        foreach ($object->getMounts() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['Mounts'] = $values_1;
        $values_2 = [];
        foreach ($object->getEnv() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['Env'] = $values_2;
        $data['Args'] = $this->normalizer->normalize($object->getArgs(), 'json', $context);
        if (null !== $object->getRootfs()) {
            $data['rootfs'] = $this->normalizer->normalize($object->getRootfs(), 'json', $context);
        }

        return $data;
    }
}
