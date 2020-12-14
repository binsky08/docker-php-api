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

class NetworkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\Network' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\Network' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Network();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data) && null !== $data['Name']) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
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
        if (\array_key_exists('Scope', $data) && null !== $data['Scope']) {
            $object->setScope($data['Scope']);
        } elseif (\array_key_exists('Scope', $data) && null === $data['Scope']) {
            $object->setScope(null);
        }
        if (\array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $object->setDriver($data['Driver']);
        } elseif (\array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (\array_key_exists('EnableIPv6', $data) && null !== $data['EnableIPv6']) {
            $object->setEnableIPv6($data['EnableIPv6']);
        } elseif (\array_key_exists('EnableIPv6', $data) && null === $data['EnableIPv6']) {
            $object->setEnableIPv6(null);
        }
        if (\array_key_exists('IPAM', $data) && null !== $data['IPAM']) {
            $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], 'Docker\\API\\Model\\IPAM', 'json', $context));
        } elseif (\array_key_exists('IPAM', $data) && null === $data['IPAM']) {
            $object->setIPAM(null);
        }
        if (\array_key_exists('Internal', $data) && null !== $data['Internal']) {
            $object->setInternal($data['Internal']);
        } elseif (\array_key_exists('Internal', $data) && null === $data['Internal']) {
            $object->setInternal(null);
        }
        if (\array_key_exists('Attachable', $data) && null !== $data['Attachable']) {
            $object->setAttachable($data['Attachable']);
        } elseif (\array_key_exists('Attachable', $data) && null === $data['Attachable']) {
            $object->setAttachable(null);
        }
        if (\array_key_exists('Ingress', $data) && null !== $data['Ingress']) {
            $object->setIngress($data['Ingress']);
        } elseif (\array_key_exists('Ingress', $data) && null === $data['Ingress']) {
            $object->setIngress(null);
        }
        if (\array_key_exists('Containers', $data) && null !== $data['Containers']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Containers'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\NetworkContainer', 'json', $context);
            }
            $object->setContainers($values);
        } elseif (\array_key_exists('Containers', $data) && null === $data['Containers']) {
            $object->setContainers(null);
        }
        if (\array_key_exists('Options', $data) && null !== $data['Options']) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setOptions($values_1);
        } elseif (\array_key_exists('Options', $data) && null === $data['Options']) {
            $object->setOptions(null);
        }
        if (\array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setLabels($values_2);
        } elseif (\array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getScope()) {
            $data['Scope'] = $object->getScope();
        }
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        }
        if (null !== $object->getEnableIPv6()) {
            $data['EnableIPv6'] = $object->getEnableIPv6();
        }
        if (null !== $object->getIPAM()) {
            $data['IPAM'] = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
        }
        if (null !== $object->getInternal()) {
            $data['Internal'] = $object->getInternal();
        }
        if (null !== $object->getAttachable()) {
            $data['Attachable'] = $object->getAttachable();
        }
        if (null !== $object->getIngress()) {
            $data['Ingress'] = $object->getIngress();
        }
        if (null !== $object->getContainers()) {
            $values = [];
            foreach ($object->getContainers() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Containers'] = $values;
        }
        if (null !== $object->getOptions()) {
            $values_1 = [];
            foreach ($object->getOptions() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $data['Options'] = $values_1;
        }
        if (null !== $object->getLabels()) {
            $values_2 = [];
            foreach ($object->getLabels() as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $data['Labels'] = $values_2;
        }

        return $data;
    }
}
