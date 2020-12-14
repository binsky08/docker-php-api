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

class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ExecIdJsonGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ExecIdJsonGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ExecIdJsonGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CanRemove', $data) && null !== $data['CanRemove']) {
            $object->setCanRemove($data['CanRemove']);
        } elseif (\array_key_exists('CanRemove', $data) && null === $data['CanRemove']) {
            $object->setCanRemove(null);
        }
        if (\array_key_exists('DetachKeys', $data) && null !== $data['DetachKeys']) {
            $object->setDetachKeys($data['DetachKeys']);
        } elseif (\array_key_exists('DetachKeys', $data) && null === $data['DetachKeys']) {
            $object->setDetachKeys(null);
        }
        if (\array_key_exists('ID', $data) && null !== $data['ID']) {
            $object->setID($data['ID']);
        } elseif (\array_key_exists('ID', $data) && null === $data['ID']) {
            $object->setID(null);
        }
        if (\array_key_exists('Running', $data) && null !== $data['Running']) {
            $object->setRunning($data['Running']);
        } elseif (\array_key_exists('Running', $data) && null === $data['Running']) {
            $object->setRunning(null);
        }
        if (\array_key_exists('ExitCode', $data) && null !== $data['ExitCode']) {
            $object->setExitCode($data['ExitCode']);
        } elseif (\array_key_exists('ExitCode', $data) && null === $data['ExitCode']) {
            $object->setExitCode(null);
        }
        if (\array_key_exists('ProcessConfig', $data) && null !== $data['ProcessConfig']) {
            $object->setProcessConfig($this->denormalizer->denormalize($data['ProcessConfig'], 'Docker\\API\\Model\\ProcessConfig', 'json', $context));
        } elseif (\array_key_exists('ProcessConfig', $data) && null === $data['ProcessConfig']) {
            $object->setProcessConfig(null);
        }
        if (\array_key_exists('OpenStdin', $data) && null !== $data['OpenStdin']) {
            $object->setOpenStdin($data['OpenStdin']);
        } elseif (\array_key_exists('OpenStdin', $data) && null === $data['OpenStdin']) {
            $object->setOpenStdin(null);
        }
        if (\array_key_exists('OpenStderr', $data) && null !== $data['OpenStderr']) {
            $object->setOpenStderr($data['OpenStderr']);
        } elseif (\array_key_exists('OpenStderr', $data) && null === $data['OpenStderr']) {
            $object->setOpenStderr(null);
        }
        if (\array_key_exists('OpenStdout', $data) && null !== $data['OpenStdout']) {
            $object->setOpenStdout($data['OpenStdout']);
        } elseif (\array_key_exists('OpenStdout', $data) && null === $data['OpenStdout']) {
            $object->setOpenStdout(null);
        }
        if (\array_key_exists('ContainerID', $data) && null !== $data['ContainerID']) {
            $object->setContainerID($data['ContainerID']);
        } elseif (\array_key_exists('ContainerID', $data) && null === $data['ContainerID']) {
            $object->setContainerID(null);
        }
        if (\array_key_exists('Pid', $data) && null !== $data['Pid']) {
            $object->setPid($data['Pid']);
        } elseif (\array_key_exists('Pid', $data) && null === $data['Pid']) {
            $object->setPid(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCanRemove()) {
            $data['CanRemove'] = $object->getCanRemove();
        }
        if (null !== $object->getDetachKeys()) {
            $data['DetachKeys'] = $object->getDetachKeys();
        }
        if (null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if (null !== $object->getRunning()) {
            $data['Running'] = $object->getRunning();
        }
        if (null !== $object->getExitCode()) {
            $data['ExitCode'] = $object->getExitCode();
        }
        if (null !== $object->getProcessConfig()) {
            $data['ProcessConfig'] = $this->normalizer->normalize($object->getProcessConfig(), 'json', $context);
        }
        if (null !== $object->getOpenStdin()) {
            $data['OpenStdin'] = $object->getOpenStdin();
        }
        if (null !== $object->getOpenStderr()) {
            $data['OpenStderr'] = $object->getOpenStderr();
        }
        if (null !== $object->getOpenStdout()) {
            $data['OpenStdout'] = $object->getOpenStdout();
        }
        if (null !== $object->getContainerID()) {
            $data['ContainerID'] = $object->getContainerID();
        }
        if (null !== $object->getPid()) {
            $data['Pid'] = $object->getPid();
        }

        return $data;
    }
}
