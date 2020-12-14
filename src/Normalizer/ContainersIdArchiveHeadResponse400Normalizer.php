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

class ContainersIdArchiveHeadResponse400Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ContainersIdArchiveHeadResponse400' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ContainersIdArchiveHeadResponse400' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ContainersIdArchiveHeadResponse400();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ErrorResponse', $data) && null !== $data['ErrorResponse']) {
            $object->setErrorResponse($this->denormalizer->denormalize($data['ErrorResponse'], 'Docker\\API\\Model\\ErrorResponse', 'json', $context));
        } elseif (\array_key_exists('ErrorResponse', $data) && null === $data['ErrorResponse']) {
            $object->setErrorResponse(null);
        }
        if (\array_key_exists('message', $data) && null !== $data['message']) {
            $object->setMessage($data['message']);
        } elseif (\array_key_exists('message', $data) && null === $data['message']) {
            $object->setMessage(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getErrorResponse()) {
            $data['ErrorResponse'] = $this->normalizer->normalize($object->getErrorResponse(), 'json', $context);
        }
        if (null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }

        return $data;
    }
}
