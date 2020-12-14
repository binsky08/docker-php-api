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

class VersionGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\VersionGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\VersionGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\VersionGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Platform', $data) && null !== $data['Platform']) {
            $object->setPlatform($this->denormalizer->denormalize($data['Platform'], 'Docker\\API\\Model\\VersionGetResponse200Platform', 'json', $context));
        } elseif (\array_key_exists('Platform', $data) && null === $data['Platform']) {
            $object->setPlatform(null);
        }
        if (\array_key_exists('Components', $data) && null !== $data['Components']) {
            $values = [];
            foreach ($data['Components'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\VersionGetResponse200ComponentsItem', 'json', $context);
            }
            $object->setComponents($values);
        } elseif (\array_key_exists('Components', $data) && null === $data['Components']) {
            $object->setComponents(null);
        }
        if (\array_key_exists('Version', $data) && null !== $data['Version']) {
            $object->setVersion($data['Version']);
        } elseif (\array_key_exists('Version', $data) && null === $data['Version']) {
            $object->setVersion(null);
        }
        if (\array_key_exists('ApiVersion', $data) && null !== $data['ApiVersion']) {
            $object->setApiVersion($data['ApiVersion']);
        } elseif (\array_key_exists('ApiVersion', $data) && null === $data['ApiVersion']) {
            $object->setApiVersion(null);
        }
        if (\array_key_exists('MinAPIVersion', $data) && null !== $data['MinAPIVersion']) {
            $object->setMinAPIVersion($data['MinAPIVersion']);
        } elseif (\array_key_exists('MinAPIVersion', $data) && null === $data['MinAPIVersion']) {
            $object->setMinAPIVersion(null);
        }
        if (\array_key_exists('GitCommit', $data) && null !== $data['GitCommit']) {
            $object->setGitCommit($data['GitCommit']);
        } elseif (\array_key_exists('GitCommit', $data) && null === $data['GitCommit']) {
            $object->setGitCommit(null);
        }
        if (\array_key_exists('GoVersion', $data) && null !== $data['GoVersion']) {
            $object->setGoVersion($data['GoVersion']);
        } elseif (\array_key_exists('GoVersion', $data) && null === $data['GoVersion']) {
            $object->setGoVersion(null);
        }
        if (\array_key_exists('Os', $data) && null !== $data['Os']) {
            $object->setOs($data['Os']);
        } elseif (\array_key_exists('Os', $data) && null === $data['Os']) {
            $object->setOs(null);
        }
        if (\array_key_exists('Arch', $data) && null !== $data['Arch']) {
            $object->setArch($data['Arch']);
        } elseif (\array_key_exists('Arch', $data) && null === $data['Arch']) {
            $object->setArch(null);
        }
        if (\array_key_exists('KernelVersion', $data) && null !== $data['KernelVersion']) {
            $object->setKernelVersion($data['KernelVersion']);
        } elseif (\array_key_exists('KernelVersion', $data) && null === $data['KernelVersion']) {
            $object->setKernelVersion(null);
        }
        if (\array_key_exists('Experimental', $data) && null !== $data['Experimental']) {
            $object->setExperimental($data['Experimental']);
        } elseif (\array_key_exists('Experimental', $data) && null === $data['Experimental']) {
            $object->setExperimental(null);
        }
        if (\array_key_exists('BuildTime', $data) && null !== $data['BuildTime']) {
            $object->setBuildTime($data['BuildTime']);
        } elseif (\array_key_exists('BuildTime', $data) && null === $data['BuildTime']) {
            $object->setBuildTime(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getPlatform()) {
            $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
        }
        if (null !== $object->getComponents()) {
            $values = [];
            foreach ($object->getComponents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Components'] = $values;
        }
        if (null !== $object->getVersion()) {
            $data['Version'] = $object->getVersion();
        }
        if (null !== $object->getApiVersion()) {
            $data['ApiVersion'] = $object->getApiVersion();
        }
        if (null !== $object->getMinAPIVersion()) {
            $data['MinAPIVersion'] = $object->getMinAPIVersion();
        }
        if (null !== $object->getGitCommit()) {
            $data['GitCommit'] = $object->getGitCommit();
        }
        if (null !== $object->getGoVersion()) {
            $data['GoVersion'] = $object->getGoVersion();
        }
        if (null !== $object->getOs()) {
            $data['Os'] = $object->getOs();
        }
        if (null !== $object->getArch()) {
            $data['Arch'] = $object->getArch();
        }
        if (null !== $object->getKernelVersion()) {
            $data['KernelVersion'] = $object->getKernelVersion();
        }
        if (null !== $object->getExperimental()) {
            $data['Experimental'] = $object->getExperimental();
        }
        if (null !== $object->getBuildTime()) {
            $data['BuildTime'] = $object->getBuildTime();
        }

        return $data;
    }
}
