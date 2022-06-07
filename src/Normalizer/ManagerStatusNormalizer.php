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

class ManagerStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ManagerStatus' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ManagerStatus' === $data::class;
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
        $object = new \Docker\API\Model\ManagerStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Leader', $data) && null !== $data['Leader']) {
            $object->setLeader($data['Leader']);
        } elseif (\array_key_exists('Leader', $data) && null === $data['Leader']) {
            $object->setLeader(null);
        }
        if (\array_key_exists('Reachability', $data) && null !== $data['Reachability']) {
            $object->setReachability($data['Reachability']);
        } elseif (\array_key_exists('Reachability', $data) && null === $data['Reachability']) {
            $object->setReachability(null);
        }
        if (\array_key_exists('Addr', $data) && null !== $data['Addr']) {
            $object->setAddr($data['Addr']);
        } elseif (\array_key_exists('Addr', $data) && null === $data['Addr']) {
            $object->setAddr(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getLeader()) {
            $data['Leader'] = $object->getLeader();
        }
        if (null !== $object->getReachability()) {
            $data['Reachability'] = $object->getReachability();
        }
        if (null !== $object->getAddr()) {
            $data['Addr'] = $object->getAddr();
        }

        return $data;
    }
}
