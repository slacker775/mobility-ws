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
class ConnectionStatusResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\ConnectionStatusResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\ConnectionStatusResponse';
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
        $object = new \Mobility\Model\ConnectionStatusResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('connectionStatus', $data)) {
            $values = array();
            foreach ($data['connectionStatus'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Mobility\\Model\\ConnectionStatus', 'json', $context);
            }
            $object->setConnectionStatus($values);
            unset($data['connectionStatus']);
        }
        if (\array_key_exists('errorMessage', $data)) {
            $object->setErrorMessage($data['errorMessage']);
            unset($data['errorMessage']);
        }
        if (\array_key_exists('currentPage', $data)) {
            $object->setCurrentPage($data['currentPage']);
            unset($data['currentPage']);
        }
        if (\array_key_exists('totalPages', $data)) {
            $object->setTotalPages($data['totalPages']);
            unset($data['totalPages']);
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
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('connectionStatus') && null !== $object->getConnectionStatus()) {
            $values = array();
            foreach ($object->getConnectionStatus() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['connectionStatus'] = $values;
        }
        if ($object->isInitialized('errorMessage') && null !== $object->getErrorMessage()) {
            $data['errorMessage'] = $object->getErrorMessage();
        }
        if ($object->isInitialized('currentPage') && null !== $object->getCurrentPage()) {
            $data['currentPage'] = $object->getCurrentPage();
        }
        if ($object->isInitialized('totalPages') && null !== $object->getTotalPages()) {
            $data['totalPages'] = $object->getTotalPages();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}