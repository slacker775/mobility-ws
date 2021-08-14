<?php

namespace Mobility\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Mobility\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PoolStatusResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Mobility\\Model\\PoolStatusResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\PoolStatusResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Mobility\Model\PoolStatusResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('poolStatus', $data)) {
            $object->setPoolStatus($this->denormalizer->denormalize($data['poolStatus'], 'Mobility\\Model\\PoolStatus', 'json', $context));
        }
        if (\array_key_exists('serverStatus', $data)) {
            $values = array();
            foreach ($data['serverStatus'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Mobility\\Model\\ServerStatus', 'json', $context);
            }
            $object->setServerStatus($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getPoolStatus()) {
            $data['poolStatus'] = $this->normalizer->normalize($object->getPoolStatus(), 'json', $context);
        }
        if (null !== $object->getServerStatus()) {
            $values = array();
            foreach ($object->getServerStatus() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['serverStatus'] = $values;
        }
        return $data;
    }
}