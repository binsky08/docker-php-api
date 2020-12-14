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

class EndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\EndpointSettings' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\EndpointSettings' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\EndpointSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('IPAMConfig', $data) && null !== $data['IPAMConfig']) {
            $object->setIPAMConfig($this->denormalizer->denormalize($data['IPAMConfig'], 'Docker\\API\\Model\\EndpointIPAMConfig', 'json', $context));
        } elseif (\array_key_exists('IPAMConfig', $data) && null === $data['IPAMConfig']) {
            $object->setIPAMConfig(null);
        }
        if (\array_key_exists('Links', $data) && null !== $data['Links']) {
            $values = [];
            foreach ($data['Links'] as $value) {
                $values[] = $value;
            }
            $object->setLinks($values);
        } elseif (\array_key_exists('Links', $data) && null === $data['Links']) {
            $object->setLinks(null);
        }
        if (\array_key_exists('Aliases', $data) && null !== $data['Aliases']) {
            $values_1 = [];
            foreach ($data['Aliases'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAliases($values_1);
        } elseif (\array_key_exists('Aliases', $data) && null === $data['Aliases']) {
            $object->setAliases(null);
        }
        if (\array_key_exists('NetworkID', $data) && null !== $data['NetworkID']) {
            $object->setNetworkID($data['NetworkID']);
        } elseif (\array_key_exists('NetworkID', $data) && null === $data['NetworkID']) {
            $object->setNetworkID(null);
        }
        if (\array_key_exists('EndpointID', $data) && null !== $data['EndpointID']) {
            $object->setEndpointID($data['EndpointID']);
        } elseif (\array_key_exists('EndpointID', $data) && null === $data['EndpointID']) {
            $object->setEndpointID(null);
        }
        if (\array_key_exists('Gateway', $data) && null !== $data['Gateway']) {
            $object->setGateway($data['Gateway']);
        } elseif (\array_key_exists('Gateway', $data) && null === $data['Gateway']) {
            $object->setGateway(null);
        }
        if (\array_key_exists('IPAddress', $data) && null !== $data['IPAddress']) {
            $object->setIPAddress($data['IPAddress']);
        } elseif (\array_key_exists('IPAddress', $data) && null === $data['IPAddress']) {
            $object->setIPAddress(null);
        }
        if (\array_key_exists('IPPrefixLen', $data) && null !== $data['IPPrefixLen']) {
            $object->setIPPrefixLen($data['IPPrefixLen']);
        } elseif (\array_key_exists('IPPrefixLen', $data) && null === $data['IPPrefixLen']) {
            $object->setIPPrefixLen(null);
        }
        if (\array_key_exists('IPv6Gateway', $data) && null !== $data['IPv6Gateway']) {
            $object->setIPv6Gateway($data['IPv6Gateway']);
        } elseif (\array_key_exists('IPv6Gateway', $data) && null === $data['IPv6Gateway']) {
            $object->setIPv6Gateway(null);
        }
        if (\array_key_exists('GlobalIPv6Address', $data) && null !== $data['GlobalIPv6Address']) {
            $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
        } elseif (\array_key_exists('GlobalIPv6Address', $data) && null === $data['GlobalIPv6Address']) {
            $object->setGlobalIPv6Address(null);
        }
        if (\array_key_exists('GlobalIPv6PrefixLen', $data) && null !== $data['GlobalIPv6PrefixLen']) {
            $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
        } elseif (\array_key_exists('GlobalIPv6PrefixLen', $data) && null === $data['GlobalIPv6PrefixLen']) {
            $object->setGlobalIPv6PrefixLen(null);
        }
        if (\array_key_exists('MacAddress', $data) && null !== $data['MacAddress']) {
            $object->setMacAddress($data['MacAddress']);
        } elseif (\array_key_exists('MacAddress', $data) && null === $data['MacAddress']) {
            $object->setMacAddress(null);
        }
        if (\array_key_exists('DriverOpts', $data) && null !== $data['DriverOpts']) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['DriverOpts'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setDriverOpts($values_2);
        } elseif (\array_key_exists('DriverOpts', $data) && null === $data['DriverOpts']) {
            $object->setDriverOpts(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getIPAMConfig()) {
            $data['IPAMConfig'] = $this->normalizer->normalize($object->getIPAMConfig(), 'json', $context);
        }
        if (null !== $object->getLinks()) {
            $values = [];
            foreach ($object->getLinks() as $value) {
                $values[] = $value;
            }
            $data['Links'] = $values;
        }
        if (null !== $object->getAliases()) {
            $values_1 = [];
            foreach ($object->getAliases() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Aliases'] = $values_1;
        }
        if (null !== $object->getNetworkID()) {
            $data['NetworkID'] = $object->getNetworkID();
        }
        if (null !== $object->getEndpointID()) {
            $data['EndpointID'] = $object->getEndpointID();
        }
        if (null !== $object->getGateway()) {
            $data['Gateway'] = $object->getGateway();
        }
        if (null !== $object->getIPAddress()) {
            $data['IPAddress'] = $object->getIPAddress();
        }
        if (null !== $object->getIPPrefixLen()) {
            $data['IPPrefixLen'] = $object->getIPPrefixLen();
        }
        if (null !== $object->getIPv6Gateway()) {
            $data['IPv6Gateway'] = $object->getIPv6Gateway();
        }
        if (null !== $object->getGlobalIPv6Address()) {
            $data['GlobalIPv6Address'] = $object->getGlobalIPv6Address();
        }
        if (null !== $object->getGlobalIPv6PrefixLen()) {
            $data['GlobalIPv6PrefixLen'] = $object->getGlobalIPv6PrefixLen();
        }
        if (null !== $object->getMacAddress()) {
            $data['MacAddress'] = $object->getMacAddress();
        }
        if (null !== $object->getDriverOpts()) {
            $values_2 = [];
            foreach ($object->getDriverOpts() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['DriverOpts'] = $values_2;
        }

        return $data;
    }
}
