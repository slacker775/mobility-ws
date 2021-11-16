<?php

namespace Mobility\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Mobility\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Mobility\\Model\\User';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\User';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Mobility\Model\User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('userGroup', $data)) {
            $object->setUserGroup($data['userGroup']);
        }
        if (\array_key_exists('lastDevice', $data)) {
            $object->setLastDevice($data['lastDevice']);
        }
        if (\array_key_exists('lastConnect', $data)) {
            $object->setLastConnect(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastConnect']));
        }
        if (\array_key_exists('firstLogon', $data)) {
            $object->setFirstLogon(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['firstLogon']));
        }
        if (\array_key_exists('staticAddress', $data)) {
            $object->setStaticAddress($data['staticAddress']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getUserGroup()) {
            $data['userGroup'] = $object->getUserGroup();
        }
        if (null !== $object->getLastDevice()) {
            $data['lastDevice'] = $object->getLastDevice();
        }
        if (null !== $object->getLastConnect()) {
            $data['lastConnect'] = $object->getLastConnect()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getFirstLogon()) {
            $data['firstLogon'] = $object->getFirstLogon()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getStaticAddress()) {
            $data['staticAddress'] = $object->getStaticAddress();
        }
        return $data;
    }
}