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
class ControlUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\ControlUser';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\ControlUser';
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
        $object = new \Mobility\Model\ControlUser();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('domain', $data)) {
            $object->setDomain($data['domain']);
            unset($data['domain']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
            unset($data['username']);
        }
        if (\array_key_exists('userGroup', $data)) {
            $object->setUserGroup($data['userGroup']);
            unset($data['userGroup']);
        }
        if (\array_key_exists('firstLogon', $data)) {
            $object->setFirstLogon($data['firstLogon']);
            unset($data['firstLogon']);
        }
        if (\array_key_exists('lastLogon', $data)) {
            $object->setLastLogon($data['lastLogon']);
            unset($data['lastLogon']);
        }
        if (\array_key_exists('lastDeviceName', $data)) {
            $object->setLastDeviceName($data['lastDeviceName']);
            unset($data['lastDeviceName']);
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
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('domain') && null !== $object->getDomain()) {
            $data['domain'] = $object->getDomain();
        }
        if ($object->isInitialized('username') && null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if ($object->isInitialized('userGroup') && null !== $object->getUserGroup()) {
            $data['userGroup'] = $object->getUserGroup();
        }
        if ($object->isInitialized('firstLogon') && null !== $object->getFirstLogon()) {
            $data['firstLogon'] = $object->getFirstLogon();
        }
        if ($object->isInitialized('lastLogon') && null !== $object->getLastLogon()) {
            $data['lastLogon'] = $object->getLastLogon();
        }
        if ($object->isInitialized('lastDeviceName') && null !== $object->getLastDeviceName()) {
            $data['lastDeviceName'] = $object->getLastDeviceName();
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