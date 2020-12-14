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

class ContainersIdExecPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ContainersIdExecPostBody' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ContainersIdExecPostBody' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ContainersIdExecPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AttachStdin', $data) && null !== $data['AttachStdin']) {
            $object->setAttachStdin($data['AttachStdin']);
        } elseif (\array_key_exists('AttachStdin', $data) && null === $data['AttachStdin']) {
            $object->setAttachStdin(null);
        }
        if (\array_key_exists('AttachStdout', $data) && null !== $data['AttachStdout']) {
            $object->setAttachStdout($data['AttachStdout']);
        } elseif (\array_key_exists('AttachStdout', $data) && null === $data['AttachStdout']) {
            $object->setAttachStdout(null);
        }
        if (\array_key_exists('AttachStderr', $data) && null !== $data['AttachStderr']) {
            $object->setAttachStderr($data['AttachStderr']);
        } elseif (\array_key_exists('AttachStderr', $data) && null === $data['AttachStderr']) {
            $object->setAttachStderr(null);
        }
        if (\array_key_exists('DetachKeys', $data) && null !== $data['DetachKeys']) {
            $object->setDetachKeys($data['DetachKeys']);
        } elseif (\array_key_exists('DetachKeys', $data) && null === $data['DetachKeys']) {
            $object->setDetachKeys(null);
        }
        if (\array_key_exists('Tty', $data) && null !== $data['Tty']) {
            $object->setTty($data['Tty']);
        } elseif (\array_key_exists('Tty', $data) && null === $data['Tty']) {
            $object->setTty(null);
        }
        if (\array_key_exists('Env', $data) && null !== $data['Env']) {
            $values = [];
            foreach ($data['Env'] as $value) {
                $values[] = $value;
            }
            $object->setEnv($values);
        } elseif (\array_key_exists('Env', $data) && null === $data['Env']) {
            $object->setEnv(null);
        }
        if (\array_key_exists('Cmd', $data) && null !== $data['Cmd']) {
            $values_1 = [];
            foreach ($data['Cmd'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCmd($values_1);
        } elseif (\array_key_exists('Cmd', $data) && null === $data['Cmd']) {
            $object->setCmd(null);
        }
        if (\array_key_exists('Privileged', $data) && null !== $data['Privileged']) {
            $object->setPrivileged($data['Privileged']);
        } elseif (\array_key_exists('Privileged', $data) && null === $data['Privileged']) {
            $object->setPrivileged(null);
        }
        if (\array_key_exists('User', $data) && null !== $data['User']) {
            $object->setUser($data['User']);
        } elseif (\array_key_exists('User', $data) && null === $data['User']) {
            $object->setUser(null);
        }
        if (\array_key_exists('WorkingDir', $data) && null !== $data['WorkingDir']) {
            $object->setWorkingDir($data['WorkingDir']);
        } elseif (\array_key_exists('WorkingDir', $data) && null === $data['WorkingDir']) {
            $object->setWorkingDir(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAttachStdin()) {
            $data['AttachStdin'] = $object->getAttachStdin();
        }
        if (null !== $object->getAttachStdout()) {
            $data['AttachStdout'] = $object->getAttachStdout();
        }
        if (null !== $object->getAttachStderr()) {
            $data['AttachStderr'] = $object->getAttachStderr();
        }
        if (null !== $object->getDetachKeys()) {
            $data['DetachKeys'] = $object->getDetachKeys();
        }
        if (null !== $object->getTty()) {
            $data['Tty'] = $object->getTty();
        }
        if (null !== $object->getEnv()) {
            $values = [];
            foreach ($object->getEnv() as $value) {
                $values[] = $value;
            }
            $data['Env'] = $values;
        }
        if (null !== $object->getCmd()) {
            $values_1 = [];
            foreach ($object->getCmd() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Cmd'] = $values_1;
        }
        if (null !== $object->getPrivileged()) {
            $data['Privileged'] = $object->getPrivileged();
        }
        if (null !== $object->getUser()) {
            $data['User'] = $object->getUser();
        }
        if (null !== $object->getWorkingDir()) {
            $data['WorkingDir'] = $object->getWorkingDir();
        }

        return $data;
    }
}
