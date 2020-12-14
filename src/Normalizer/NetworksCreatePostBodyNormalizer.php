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

class NetworksCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\NetworksCreatePostBody' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\NetworksCreatePostBody' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\NetworksCreatePostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data) && null !== $data['Name']) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (\array_key_exists('CheckDuplicate', $data) && null !== $data['CheckDuplicate']) {
            $object->setCheckDuplicate($data['CheckDuplicate']);
        } elseif (\array_key_exists('CheckDuplicate', $data) && null === $data['CheckDuplicate']) {
            $object->setCheckDuplicate(null);
        }
        if (\array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $object->setDriver($data['Driver']);
        } elseif (\array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
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
        if (\array_key_exists('IPAM', $data) && null !== $data['IPAM']) {
            $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], 'Docker\\API\\Model\\IPAM', 'json', $context));
        } elseif (\array_key_exists('IPAM', $data) && null === $data['IPAM']) {
            $object->setIPAM(null);
        }
        if (\array_key_exists('EnableIPv6', $data) && null !== $data['EnableIPv6']) {
            $object->setEnableIPv6($data['EnableIPv6']);
        } elseif (\array_key_exists('EnableIPv6', $data) && null === $data['EnableIPv6']) {
            $object->setEnableIPv6(null);
        }
        if (\array_key_exists('Options', $data) && null !== $data['Options']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOptions($values);
        } elseif (\array_key_exists('Options', $data) && null === $data['Options']) {
            $object->setOptions(null);
        }
        if (\array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setLabels($values_1);
        } elseif (\array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['Name'] = $object->getName();
        if (null !== $object->getCheckDuplicate()) {
            $data['CheckDuplicate'] = $object->getCheckDuplicate();
        }
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
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
        if (null !== $object->getIPAM()) {
            $data['IPAM'] = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
        }
        if (null !== $object->getEnableIPv6()) {
            $data['EnableIPv6'] = $object->getEnableIPv6();
        }
        if (null !== $object->getOptions()) {
            $values = [];
            foreach ($object->getOptions() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Options'] = $values;
        }
        if (null !== $object->getLabels()) {
            $values_1 = [];
            foreach ($object->getLabels() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $data['Labels'] = $values_1;
        }

        return $data;
    }
}
