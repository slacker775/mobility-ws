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
class DeviceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Mobility\\Model\\Device';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\Device';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Mobility\Model\Device();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('deviceGroup', $data)) {
            $object->setDeviceGroup($data['deviceGroup']);
        }
        if (\array_key_exists('disconnectReason', $data)) {
            $object->setDisconnectReason($data['disconnectReason']);
        }
        if (\array_key_exists('lastConnect', $data)) {
            $object->setLastConnect(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastConnect']));
        }
        if (\array_key_exists('lastDisconnect', $data)) {
            $object->setLastDisconnect(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastDisconnect']));
        }
        if (\array_key_exists('lastUser', $data)) {
            $object->setLastUser($data['lastUser']);
        }
        if (\array_key_exists('localityVersion', $data)) {
            $object->setLocalityVersion($data['localityVersion']);
        }
        if (\array_key_exists('mobilityVersion', $data)) {
            $object->setMobilityVersion($data['mobilityVersion']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('operatingSystem', $data)) {
            $object->setOperatingSystem($data['operatingSystem']);
        }
        if (\array_key_exists('pid', $data)) {
            $object->setPid($data['pid']);
        }
        if (\array_key_exists('registered', $data)) {
            $object->setRegistered(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['registered']));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDeviceGroup()) {
            $data['deviceGroup'] = $object->getDeviceGroup();
        }
        if (null !== $object->getDisconnectReason()) {
            $data['disconnectReason'] = $object->getDisconnectReason();
        }
        if (null !== $object->getLastConnect()) {
            $data['lastConnect'] = $object->getLastConnect()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getLastDisconnect()) {
            $data['lastDisconnect'] = $object->getLastDisconnect()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getLastUser()) {
            $data['lastUser'] = $object->getLastUser();
        }
        if (null !== $object->getLocalityVersion()) {
            $data['localityVersion'] = $object->getLocalityVersion();
        }
        if (null !== $object->getMobilityVersion()) {
            $data['mobilityVersion'] = $object->getMobilityVersion();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getOperatingSystem()) {
            $data['operatingSystem'] = $object->getOperatingSystem();
        }
        if (null !== $object->getPid()) {
            $data['pid'] = $object->getPid();
        }
        if (null !== $object->getRegistered()) {
            $data['registered'] = $object->getRegistered()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}