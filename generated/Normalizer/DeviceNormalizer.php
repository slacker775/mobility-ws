<?php

namespace Mobility\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Mobility\Runtime\Normalizer\CheckArray;
use Mobility\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\Device';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\Device';
    }
    /**
     * @return mixed
     */
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
            unset($data['deviceGroup']);
        }
        if (\array_key_exists('disconnectReason', $data)) {
            $object->setDisconnectReason($data['disconnectReason']);
            unset($data['disconnectReason']);
        }
        if (\array_key_exists('lastConnect', $data) && $data['lastConnect'] !== null) {
            $object->setLastConnect(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastConnect']));
            unset($data['lastConnect']);
        }
        elseif (\array_key_exists('lastConnect', $data) && $data['lastConnect'] === null) {
            $object->setLastConnect(null);
        }
        if (\array_key_exists('lastDisconnect', $data) && $data['lastDisconnect'] !== null) {
            $object->setLastDisconnect(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastDisconnect']));
            unset($data['lastDisconnect']);
        }
        elseif (\array_key_exists('lastDisconnect', $data) && $data['lastDisconnect'] === null) {
            $object->setLastDisconnect(null);
        }
        if (\array_key_exists('lastUser', $data)) {
            $object->setLastUser($data['lastUser']);
            unset($data['lastUser']);
        }
        if (\array_key_exists('localityVersion', $data)) {
            $object->setLocalityVersion($data['localityVersion']);
            unset($data['localityVersion']);
        }
        if (\array_key_exists('mobilityVersion', $data)) {
            $object->setMobilityVersion($data['mobilityVersion']);
            unset($data['mobilityVersion']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('operatingSystem', $data)) {
            $object->setOperatingSystem($data['operatingSystem']);
            unset($data['operatingSystem']);
        }
        if (\array_key_exists('pid', $data)) {
            $object->setPid($data['pid']);
            unset($data['pid']);
        }
        if (\array_key_exists('registered', $data)) {
            $object->setRegistered(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['registered']));
            unset($data['registered']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('deviceGroup') && null !== $object->getDeviceGroup()) {
            $data['deviceGroup'] = $object->getDeviceGroup();
        }
        if ($object->isInitialized('disconnectReason') && null !== $object->getDisconnectReason()) {
            $data['disconnectReason'] = $object->getDisconnectReason();
        }
        if ($object->isInitialized('lastConnect') && null !== $object->getLastConnect()) {
            $data['lastConnect'] = $object->getLastConnect()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('lastDisconnect') && null !== $object->getLastDisconnect()) {
            $data['lastDisconnect'] = $object->getLastDisconnect()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('lastUser') && null !== $object->getLastUser()) {
            $data['lastUser'] = $object->getLastUser();
        }
        if ($object->isInitialized('localityVersion') && null !== $object->getLocalityVersion()) {
            $data['localityVersion'] = $object->getLocalityVersion();
        }
        if ($object->isInitialized('mobilityVersion') && null !== $object->getMobilityVersion()) {
            $data['mobilityVersion'] = $object->getMobilityVersion();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('operatingSystem') && null !== $object->getOperatingSystem()) {
            $data['operatingSystem'] = $object->getOperatingSystem();
        }
        if ($object->isInitialized('pid') && null !== $object->getPid()) {
            $data['pid'] = $object->getPid();
        }
        if ($object->isInitialized('registered') && null !== $object->getRegistered()) {
            $data['registered'] = $object->getRegistered()->format('Y-m-d\\TH:i:sP');
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}