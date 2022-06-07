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

class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\Plugin' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\Plugin' === $data::class;
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
        $object = new \Docker\API\Model\Plugin();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Id', $data) && null !== $data['Id']) {
            $object->setId($data['Id']);
        } elseif (\array_key_exists('Id', $data) && null === $data['Id']) {
            $object->setId(null);
        }
        if (\array_key_exists('Name', $data) && null !== $data['Name']) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (\array_key_exists('Enabled', $data) && null !== $data['Enabled']) {
            $object->setEnabled($data['Enabled']);
        } elseif (\array_key_exists('Enabled', $data) && null === $data['Enabled']) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('Settings', $data) && null !== $data['Settings']) {
            $object->setSettings($this->denormalizer->denormalize($data['Settings'], 'Docker\\API\\Model\\PluginSettings', 'json', $context));
        } elseif (\array_key_exists('Settings', $data) && null === $data['Settings']) {
            $object->setSettings(null);
        }
        if (\array_key_exists('PluginReference', $data) && null !== $data['PluginReference']) {
            $object->setPluginReference($data['PluginReference']);
        } elseif (\array_key_exists('PluginReference', $data) && null === $data['PluginReference']) {
            $object->setPluginReference(null);
        }
        if (\array_key_exists('Config', $data) && null !== $data['Config']) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\API\\Model\\PluginConfig', 'json', $context));
        } elseif (\array_key_exists('Config', $data) && null === $data['Config']) {
            $object->setConfig(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        $data['Name'] = $object->getName();
        $data['Enabled'] = $object->getEnabled();
        $data['Settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        if (null !== $object->getPluginReference()) {
            $data['PluginReference'] = $object->getPluginReference();
        }
        $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);

        return $data;
    }
}
