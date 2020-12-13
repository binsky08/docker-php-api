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

class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\BuildInfo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\BuildInfo' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\BuildInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('stream', $data)) {
            $object->setStream($data['stream']);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($data['error']);
        }
        if (\array_key_exists('errorDetail', $data)) {
            $object->setErrorDetail($this->denormalizer->denormalize($data['errorDetail'], 'Docker\\API\\Model\\ErrorDetail', 'json', $context));
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('progress', $data)) {
            $object->setProgress($data['progress']);
        }
        if (\array_key_exists('progressDetail', $data)) {
            $object->setProgressDetail($this->denormalizer->denormalize($data['progressDetail'], 'Docker\\API\\Model\\ProgressDetail', 'json', $context));
        }
        if (\array_key_exists('aux', $data)) {
            $object->setAux($this->denormalizer->denormalize($data['aux'], 'Docker\\API\\Model\\ImageID', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getStream()) {
            $data['stream'] = $object->getStream();
        }
        if (null !== $object->getError()) {
            $data['error'] = $object->getError();
        }
        if (null !== $object->getErrorDetail()) {
            $data['errorDetail'] = $this->normalizer->normalize($object->getErrorDetail(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getProgress()) {
            $data['progress'] = $object->getProgress();
        }
        if (null !== $object->getProgressDetail()) {
            $data['progressDetail'] = $this->normalizer->normalize($object->getProgressDetail(), 'json', $context);
        }
        if (null !== $object->getAux()) {
            $data['aux'] = $this->normalizer->normalize($object->getAux(), 'json', $context);
        }

        return $data;
    }
}
