<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\HealthConfig' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\HealthConfig' === $data::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\HealthConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Test', $data) && null !== $data['Test']) {
            $values = [];
            foreach ($data['Test'] as $value) {
                $values[] = $value;
            }
            $object->setTest($values);
        } elseif (\array_key_exists('Test', $data) && null === $data['Test']) {
            $object->setTest(null);
        }
        if (\array_key_exists('Interval', $data) && null !== $data['Interval']) {
            $object->setInterval($data['Interval']);
        } elseif (\array_key_exists('Interval', $data) && null === $data['Interval']) {
            $object->setInterval(null);
        }
        if (\array_key_exists('Timeout', $data) && null !== $data['Timeout']) {
            $object->setTimeout($data['Timeout']);
        } elseif (\array_key_exists('Timeout', $data) && null === $data['Timeout']) {
            $object->setTimeout(null);
        }
        if (\array_key_exists('Retries', $data) && null !== $data['Retries']) {
            $object->setRetries($data['Retries']);
        } elseif (\array_key_exists('Retries', $data) && null === $data['Retries']) {
            $object->setRetries(null);
        }
        if (\array_key_exists('StartPeriod', $data) && null !== $data['StartPeriod']) {
            $object->setStartPeriod($data['StartPeriod']);
        } elseif (\array_key_exists('StartPeriod', $data) && null === $data['StartPeriod']) {
            $object->setStartPeriod(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getTest()) {
            $values = [];
            foreach ($object->getTest() as $value) {
                $values[] = $value;
            }
            $data['Test'] = $values;
        }
        if (null !== $object->getInterval()) {
            $data['Interval'] = $object->getInterval();
        }
        if (null !== $object->getTimeout()) {
            $data['Timeout'] = $object->getTimeout();
        }
        if (null !== $object->getRetries()) {
            $data['Retries'] = $object->getRetries();
        }
        if (null !== $object->getStartPeriod()) {
            $data['StartPeriod'] = $object->getStartPeriod();
        }

        return $data;
    }
}
