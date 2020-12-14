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

class ImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\Image' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\Image' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Image();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Id', $data) && null !== $data['Id']) {
            $object->setId($data['Id']);
        } elseif (\array_key_exists('Id', $data) && null === $data['Id']) {
            $object->setId(null);
        }
        if (\array_key_exists('RepoTags', $data) && null !== $data['RepoTags']) {
            $values = [];
            foreach ($data['RepoTags'] as $value) {
                $values[] = $value;
            }
            $object->setRepoTags($values);
        } elseif (\array_key_exists('RepoTags', $data) && null === $data['RepoTags']) {
            $object->setRepoTags(null);
        }
        if (\array_key_exists('RepoDigests', $data) && null !== $data['RepoDigests']) {
            $values_1 = [];
            foreach ($data['RepoDigests'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepoDigests($values_1);
        } elseif (\array_key_exists('RepoDigests', $data) && null === $data['RepoDigests']) {
            $object->setRepoDigests(null);
        }
        if (\array_key_exists('Parent', $data) && null !== $data['Parent']) {
            $object->setParent($data['Parent']);
        } elseif (\array_key_exists('Parent', $data) && null === $data['Parent']) {
            $object->setParent(null);
        }
        if (\array_key_exists('Comment', $data) && null !== $data['Comment']) {
            $object->setComment($data['Comment']);
        } elseif (\array_key_exists('Comment', $data) && null === $data['Comment']) {
            $object->setComment(null);
        }
        if (\array_key_exists('Created', $data) && null !== $data['Created']) {
            $object->setCreated($data['Created']);
        } elseif (\array_key_exists('Created', $data) && null === $data['Created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('Container', $data) && null !== $data['Container']) {
            $object->setContainer($data['Container']);
        } elseif (\array_key_exists('Container', $data) && null === $data['Container']) {
            $object->setContainer(null);
        }
        if (\array_key_exists('ContainerConfig', $data) && null !== $data['ContainerConfig']) {
            $object->setContainerConfig($this->denormalizer->denormalize($data['ContainerConfig'], 'Docker\\API\\Model\\ContainerConfig', 'json', $context));
        } elseif (\array_key_exists('ContainerConfig', $data) && null === $data['ContainerConfig']) {
            $object->setContainerConfig(null);
        }
        if (\array_key_exists('DockerVersion', $data) && null !== $data['DockerVersion']) {
            $object->setDockerVersion($data['DockerVersion']);
        } elseif (\array_key_exists('DockerVersion', $data) && null === $data['DockerVersion']) {
            $object->setDockerVersion(null);
        }
        if (\array_key_exists('Author', $data) && null !== $data['Author']) {
            $object->setAuthor($data['Author']);
        } elseif (\array_key_exists('Author', $data) && null === $data['Author']) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('Config', $data) && null !== $data['Config']) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\API\\Model\\ContainerConfig', 'json', $context));
        } elseif (\array_key_exists('Config', $data) && null === $data['Config']) {
            $object->setConfig(null);
        }
        if (\array_key_exists('Architecture', $data) && null !== $data['Architecture']) {
            $object->setArchitecture($data['Architecture']);
        } elseif (\array_key_exists('Architecture', $data) && null === $data['Architecture']) {
            $object->setArchitecture(null);
        }
        if (\array_key_exists('Os', $data) && null !== $data['Os']) {
            $object->setOs($data['Os']);
        } elseif (\array_key_exists('Os', $data) && null === $data['Os']) {
            $object->setOs(null);
        }
        if (\array_key_exists('OsVersion', $data) && null !== $data['OsVersion']) {
            $object->setOsVersion($data['OsVersion']);
        } elseif (\array_key_exists('OsVersion', $data) && null === $data['OsVersion']) {
            $object->setOsVersion(null);
        }
        if (\array_key_exists('Size', $data) && null !== $data['Size']) {
            $object->setSize($data['Size']);
        } elseif (\array_key_exists('Size', $data) && null === $data['Size']) {
            $object->setSize(null);
        }
        if (\array_key_exists('VirtualSize', $data) && null !== $data['VirtualSize']) {
            $object->setVirtualSize($data['VirtualSize']);
        } elseif (\array_key_exists('VirtualSize', $data) && null === $data['VirtualSize']) {
            $object->setVirtualSize(null);
        }
        if (\array_key_exists('GraphDriver', $data) && null !== $data['GraphDriver']) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], 'Docker\\API\\Model\\GraphDriverData', 'json', $context));
        } elseif (\array_key_exists('GraphDriver', $data) && null === $data['GraphDriver']) {
            $object->setGraphDriver(null);
        }
        if (\array_key_exists('RootFS', $data) && null !== $data['RootFS']) {
            $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], 'Docker\\API\\Model\\ImageRootFS', 'json', $context));
        } elseif (\array_key_exists('RootFS', $data) && null === $data['RootFS']) {
            $object->setRootFS(null);
        }
        if (\array_key_exists('Metadata', $data) && null !== $data['Metadata']) {
            $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], 'Docker\\API\\Model\\ImageMetadata', 'json', $context));
        } elseif (\array_key_exists('Metadata', $data) && null === $data['Metadata']) {
            $object->setMetadata(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['Id'] = $object->getId();
        if (null !== $object->getRepoTags()) {
            $values = [];
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data['RepoTags'] = $values;
        }
        if (null !== $object->getRepoDigests()) {
            $values_1 = [];
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['RepoDigests'] = $values_1;
        }
        $data['Parent'] = $object->getParent();
        $data['Comment'] = $object->getComment();
        $data['Created'] = $object->getCreated();
        $data['Container'] = $object->getContainer();
        if (null !== $object->getContainerConfig()) {
            $data['ContainerConfig'] = $this->normalizer->normalize($object->getContainerConfig(), 'json', $context);
        }
        $data['DockerVersion'] = $object->getDockerVersion();
        $data['Author'] = $object->getAuthor();
        if (null !== $object->getConfig()) {
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        $data['Architecture'] = $object->getArchitecture();
        $data['Os'] = $object->getOs();
        if (null !== $object->getOsVersion()) {
            $data['OsVersion'] = $object->getOsVersion();
        }
        $data['Size'] = $object->getSize();
        $data['VirtualSize'] = $object->getVirtualSize();
        $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
        $data['RootFS'] = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
        if (null !== $object->getMetadata()) {
            $data['Metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }

        return $data;
    }
}
