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
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\User';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\User';
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
        $object = new \Mobility\Model\User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('userGroup', $data)) {
            $object->setUserGroup($data['userGroup']);
            unset($data['userGroup']);
        }
        if (\array_key_exists('lastDevice', $data)) {
            $object->setLastDevice($data['lastDevice']);
            unset($data['lastDevice']);
        }
        if (\array_key_exists('lastConnect', $data)) {
            $object->setLastConnect(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastConnect']));
            unset($data['lastConnect']);
        }
        if (\array_key_exists('firstLogon', $data)) {
            $object->setFirstLogon(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['firstLogon']));
            unset($data['firstLogon']);
        }
        if (\array_key_exists('staticAddress', $data)) {
            $object->setStaticAddress($data['staticAddress']);
            unset($data['staticAddress']);
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
        if ($object->isInitialized('userGroup') && null !== $object->getUserGroup()) {
            $data['userGroup'] = $object->getUserGroup();
        }
        if ($object->isInitialized('lastDevice') && null !== $object->getLastDevice()) {
            $data['lastDevice'] = $object->getLastDevice();
        }
        if ($object->isInitialized('lastConnect') && null !== $object->getLastConnect()) {
            $data['lastConnect'] = $object->getLastConnect()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('firstLogon') && null !== $object->getFirstLogon()) {
            $data['firstLogon'] = $object->getFirstLogon()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('staticAddress') && null !== $object->getStaticAddress()) {
            $data['staticAddress'] = $object->getStaticAddress();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}