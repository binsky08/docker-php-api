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

class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\SwarmSpec' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\SwarmSpec' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data) && null !== $data['Name']) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (\array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        } elseif (\array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (\array_key_exists('Orchestration', $data) && null !== $data['Orchestration']) {
            $object->setOrchestration($this->denormalizer->denormalize($data['Orchestration'], 'Docker\\API\\Model\\SwarmSpecOrchestration', 'json', $context));
        } elseif (\array_key_exists('Orchestration', $data) && null === $data['Orchestration']) {
            $object->setOrchestration(null);
        }
        if (\array_key_exists('Raft', $data) && null !== $data['Raft']) {
            $object->setRaft($this->denormalizer->denormalize($data['Raft'], 'Docker\\API\\Model\\SwarmSpecRaft', 'json', $context));
        } elseif (\array_key_exists('Raft', $data) && null === $data['Raft']) {
            $object->setRaft(null);
        }
        if (\array_key_exists('Dispatcher', $data) && null !== $data['Dispatcher']) {
            $object->setDispatcher($this->denormalizer->denormalize($data['Dispatcher'], 'Docker\\API\\Model\\SwarmSpecDispatcher', 'json', $context));
        } elseif (\array_key_exists('Dispatcher', $data) && null === $data['Dispatcher']) {
            $object->setDispatcher(null);
        }
        if (\array_key_exists('CAConfig', $data) && null !== $data['CAConfig']) {
            $object->setCAConfig($this->denormalizer->denormalize($data['CAConfig'], 'Docker\\API\\Model\\SwarmSpecCAConfig', 'json', $context));
        } elseif (\array_key_exists('CAConfig', $data) && null === $data['CAConfig']) {
            $object->setCAConfig(null);
        }
        if (\array_key_exists('EncryptionConfig', $data) && null !== $data['EncryptionConfig']) {
            $object->setEncryptionConfig($this->denormalizer->denormalize($data['EncryptionConfig'], 'Docker\\API\\Model\\SwarmSpecEncryptionConfig', 'json', $context));
        } elseif (\array_key_exists('EncryptionConfig', $data) && null === $data['EncryptionConfig']) {
            $object->setEncryptionConfig(null);
        }
        if (\array_key_exists('TaskDefaults', $data) && null !== $data['TaskDefaults']) {
            $object->setTaskDefaults($this->denormalizer->denormalize($data['TaskDefaults'], 'Docker\\API\\Model\\SwarmSpecTaskDefaults', 'json', $context));
        } elseif (\array_key_exists('TaskDefaults', $data) && null === $data['TaskDefaults']) {
            $object->setTaskDefaults(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values = [];
            foreach ($object->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Labels'] = $values;
        }
        if (null !== $object->getOrchestration()) {
            $data['Orchestration'] = $this->normalizer->normalize($object->getOrchestration(), 'json', $context);
        }
        if (null !== $object->getRaft()) {
            $data['Raft'] = $this->normalizer->normalize($object->getRaft(), 'json', $context);
        }
        if (null !== $object->getDispatcher()) {
            $data['Dispatcher'] = $this->normalizer->normalize($object->getDispatcher(), 'json', $context);
        }
        if (null !== $object->getCAConfig()) {
            $data['CAConfig'] = $this->normalizer->normalize($object->getCAConfig(), 'json', $context);
        }
        if (null !== $object->getEncryptionConfig()) {
            $data['EncryptionConfig'] = $this->normalizer->normalize($object->getEncryptionConfig(), 'json', $context);
        }
        if (null !== $object->getTaskDefaults()) {
            $data['TaskDefaults'] = $this->normalizer->normalize($object->getTaskDefaults(), 'json', $context);
        }

        return $data;
    }
}
