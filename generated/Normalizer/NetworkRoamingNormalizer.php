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
class NetworkRoamingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\NetworkRoaming';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\NetworkRoaming';
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
        $object = new \Mobility\Model\NetworkRoaming();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('deviceName', $data)) {
            $object->setDeviceName($data['deviceName']);
            unset($data['deviceName']);
        }
        if (\array_key_exists('devicePid', $data)) {
            $object->setDevicePid($data['devicePid']);
            unset($data['devicePid']);
        }
        if (\array_key_exists('roamingCount', $data)) {
            $object->setRoamingCount($data['roamingCount']);
            unset($data['roamingCount']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
            unset($data['timestamp']);
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
        if ($object->isInitialized('deviceName') && null !== $object->getDeviceName()) {
            $data['deviceName'] = $object->getDeviceName();
        }
        if ($object->isInitialized('devicePid') && null !== $object->getDevicePid()) {
            $data['devicePid'] = $object->getDevicePid();
        }
        if ($object->isInitialized('roamingCount') && null !== $object->getRoamingCount()) {
            $data['roamingCount'] = $object->getRoamingCount();
        }
        if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
            $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}