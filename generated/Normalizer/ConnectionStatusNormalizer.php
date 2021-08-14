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
class ConnectionStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Mobility\\Model\\ConnectionStatus';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\ConnectionStatus';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Mobility\Model\ConnectionStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('connectionState', $data)) {
            $values = array();
            foreach ($data['connectionState'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Mobility\\Model\\ConnectionState', 'json', $context);
            }
            $object->setConnectionState($values);
        }
        if (\array_key_exists('deviceName', $data)) {
            $object->setDeviceName($data['deviceName']);
        }
        if (\array_key_exists('devicePid', $data)) {
            $object->setDevicePid($data['devicePid']);
        }
        if (\array_key_exists('firstTimestamp', $data)) {
            $object->setFirstTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['firstTimestamp']));
        }
        if (\array_key_exists('lastUser', $data)) {
            $object->setLastUser($data['lastUser']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getConnectionState()) {
            $values = array();
            foreach ($object->getConnectionState() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['connectionState'] = $values;
        }
        if (null !== $object->getDeviceName()) {
            $data['deviceName'] = $object->getDeviceName();
        }
        if (null !== $object->getDevicePid()) {
            $data['devicePid'] = $object->getDevicePid();
        }
        if (null !== $object->getFirstTimestamp()) {
            $data['firstTimestamp'] = $object->getFirstTimestamp()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getLastUser()) {
            $data['lastUser'] = $object->getLastUser();
        }
        return $data;
    }
}