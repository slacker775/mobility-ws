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
class UserResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Mobility\\Model\\UserResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\UserResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Mobility\Model\UserResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('user', $data)) {
            $values = array();
            foreach ($data['user'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Mobility\\Model\\User', 'json', $context);
            }
            $object->setUser($values);
        }
        if (\array_key_exists('currentPage', $data)) {
            $object->setCurrentPage($data['currentPage']);
        }
        if (\array_key_exists('totalPages', $data)) {
            $object->setTotalPages($data['totalPages']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getUser()) {
            $values = array();
            foreach ($object->getUser() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['user'] = $values;
        }
        if (null !== $object->getCurrentPage()) {
            $data['currentPage'] = $object->getCurrentPage();
        }
        if (null !== $object->getTotalPages()) {
            $data['totalPages'] = $object->getTotalPages();
        }
        return $data;
    }
}