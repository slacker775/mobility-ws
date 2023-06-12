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
class ConnectionStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\ConnectionState';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\ConnectionState';
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
        $object = new \Mobility\Model\ConnectionState();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pop', $data)) {
            $object->setPop($data['pop']);
            unset($data['pop']);
        }
        if (\array_key_exists('serverMachineName', $data) && $data['serverMachineName'] !== null) {
            $object->setServerMachineName($data['serverMachineName']);
            unset($data['serverMachineName']);
        }
        elseif (\array_key_exists('serverMachineName', $data) && $data['serverMachineName'] === null) {
            $object->setServerMachineName(null);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
            unset($data['timestamp']);
        }
        if (\array_key_exists('userName', $data) && $data['userName'] !== null) {
            $object->setUserName($data['userName']);
            unset($data['userName']);
        }
        elseif (\array_key_exists('userName', $data) && $data['userName'] === null) {
            $object->setUserName(null);
        }
        if (\array_key_exists('vip', $data)) {
            $object->setVip($data['vip']);
            unset($data['vip']);
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
        if ($object->isInitialized('pop') && null !== $object->getPop()) {
            $data['pop'] = $object->getPop();
        }
        if ($object->isInitialized('serverMachineName') && null !== $object->getServerMachineName()) {
            $data['serverMachineName'] = $object->getServerMachineName();
        }
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
            $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('userName') && null !== $object->getUserName()) {
            $data['userName'] = $object->getUserName();
        }
        if ($object->isInitialized('vip') && null !== $object->getVip()) {
            $data['vip'] = $object->getVip();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}