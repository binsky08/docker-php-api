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

class ProcessConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ProcessConfig' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ProcessConfig' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ProcessConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('privileged', $data) && null !== $data['privileged']) {
            $object->setPrivileged($data['privileged']);
        } elseif (\array_key_exists('privileged', $data) && null === $data['privileged']) {
            $object->setPrivileged(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('tty', $data) && null !== $data['tty']) {
            $object->setTty($data['tty']);
        } elseif (\array_key_exists('tty', $data) && null === $data['tty']) {
            $object->setTty(null);
        }
        if (\array_key_exists('entrypoint', $data) && null !== $data['entrypoint']) {
            $object->setEntrypoint($data['entrypoint']);
        } elseif (\array_key_exists('entrypoint', $data) && null === $data['entrypoint']) {
            $object->setEntrypoint(null);
        }
        if (\array_key_exists('arguments', $data) && null !== $data['arguments']) {
            $values = [];
            foreach ($data['arguments'] as $value) {
                $values[] = $value;
            }
            $object->setArguments($values);
        } elseif (\array_key_exists('arguments', $data) && null === $data['arguments']) {
            $object->setArguments(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getPrivileged()) {
            $data['privileged'] = $object->getPrivileged();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getTty()) {
            $data['tty'] = $object->getTty();
        }
        if (null !== $object->getEntrypoint()) {
            $data['entrypoint'] = $object->getEntrypoint();
        }
        if (null !== $object->getArguments()) {
            $values = [];
            foreach ($object->getArguments() as $value) {
                $values[] = $value;
            }
            $data['arguments'] = $values;
        }

        return $data;
    }
}
