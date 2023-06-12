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
class ConnectionStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\ConnectionStatus';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\ConnectionStatus';
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
            unset($data['connectionState']);
        }
        if (\array_key_exists('deviceName', $data)) {
            $object->setDeviceName($data['deviceName']);
            unset($data['deviceName']);
        }
        if (\array_key_exists('devicePid', $data)) {
            $object->setDevicePid($data['devicePid']);
            unset($data['devicePid']);
        }
        if (\array_key_exists('firstTimestamp', $data)) {
            $object->setFirstTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['firstTimestamp']));
            unset($data['firstTimestamp']);
        }
        if (\array_key_exists('lastUser', $data) && $data['lastUser'] !== null) {
            $object->setLastUser($data['lastUser']);
            unset($data['lastUser']);
        }
        elseif (\array_key_exists('lastUser', $data) && $data['lastUser'] === null) {
            $object->setLastUser(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('connectionState') && null !== $object->getConnectionState()) {
            $values = array();
            foreach ($object->getConnectionState() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['connectionState'] = $values;
        }
        if ($object->isInitialized('deviceName') && null !== $object->getDeviceName()) {
            $data['deviceName'] = $object->getDeviceName();
        }
        if ($object->isInitialized('devicePid') && null !== $object->getDevicePid()) {
            $data['devicePid'] = $object->getDevicePid();
        }
        if ($object->isInitialized('firstTimestamp') && null !== $object->getFirstTimestamp()) {
            $data['firstTimestamp'] = $object->getFirstTimestamp()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('lastUser') && null !== $object->getLastUser()) {
            $data['lastUser'] = $object->getLastUser();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}