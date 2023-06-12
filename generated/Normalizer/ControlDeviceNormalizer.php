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
class ControlDeviceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\ControlDevice';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\ControlDevice';
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
        $object = new \Mobility\Model\ControlDevice();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('deviceGroup', $data)) {
            $object->setDeviceGroup($data['deviceGroup']);
            unset($data['deviceGroup']);
        }
        if (\array_key_exists('operatingSystem', $data)) {
            $object->setOperatingSystem($data['operatingSystem']);
            unset($data['operatingSystem']);
        }
        if (\array_key_exists('registered', $data)) {
            $object->setRegistered(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['registered']));
            unset($data['registered']);
        }
        if (\array_key_exists('lastConnect', $data)) {
            $object->setLastConnect($data['lastConnect']);
            unset($data['lastConnect']);
        }
        if (\array_key_exists('staticAddress', $data)) {
            $object->setStaticAddress($data['staticAddress']);
            unset($data['staticAddress']);
        }
        if (\array_key_exists('connected', $data)) {
            $object->setConnected($data['connected']);
            unset($data['connected']);
        }
        if (\array_key_exists('quarantined', $data)) {
            $object->setQuarantined($data['quarantined']);
            unset($data['quarantined']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('deviceGroup') && null !== $object->getDeviceGroup()) {
            $data['deviceGroup'] = $object->getDeviceGroup();
        }
        if ($object->isInitialized('operatingSystem') && null !== $object->getOperatingSystem()) {
            $data['operatingSystem'] = $object->getOperatingSystem();
        }
        if ($object->isInitialized('registered') && null !== $object->getRegistered()) {
            $data['registered'] = $object->getRegistered()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('lastConnect') && null !== $object->getLastConnect()) {
            $data['lastConnect'] = $object->getLastConnect();
        }
        if ($object->isInitialized('staticAddress') && null !== $object->getStaticAddress()) {
            $data['staticAddress'] = $object->getStaticAddress();
        }
        if ($object->isInitialized('connected') && null !== $object->getConnected()) {
            $data['connected'] = $object->getConnected();
        }
        if ($object->isInitialized('quarantined') && null !== $object->getQuarantined()) {
            $data['quarantined'] = $object->getQuarantined();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}