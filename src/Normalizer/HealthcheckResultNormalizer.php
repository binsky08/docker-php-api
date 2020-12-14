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

class HealthcheckResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\HealthcheckResult' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\HealthcheckResult' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\HealthcheckResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Start', $data) && null !== $data['Start']) {
            $object->setStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['Start']));
        } elseif (\array_key_exists('Start', $data) && null === $data['Start']) {
            $object->setStart(null);
        }
        if (\array_key_exists('End', $data) && null !== $data['End']) {
            $object->setEnd($data['End']);
        } elseif (\array_key_exists('End', $data) && null === $data['End']) {
            $object->setEnd(null);
        }
        if (\array_key_exists('ExitCode', $data) && null !== $data['ExitCode']) {
            $object->setExitCode($data['ExitCode']);
        } elseif (\array_key_exists('ExitCode', $data) && null === $data['ExitCode']) {
            $object->setExitCode(null);
        }
        if (\array_key_exists('Output', $data) && null !== $data['Output']) {
            $object->setOutput($data['Output']);
        } elseif (\array_key_exists('Output', $data) && null === $data['Output']) {
            $object->setOutput(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getStart()) {
            $data['Start'] = $object->getStart()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getEnd()) {
            $data['End'] = $object->getEnd();
        }
        if (null !== $object->getExitCode()) {
            $data['ExitCode'] = $object->getExitCode();
        }
        if (null !== $object->getOutput()) {
            $data['Output'] = $object->getOutput();
        }

        return $data;
    }
}
