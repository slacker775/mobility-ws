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
class ServerStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Mobility\\Model\\ServerStatus';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\ServerStatus';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Mobility\Model\ServerStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data)) {
            $values = array();
            foreach ($data['address'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Mobility\\Model\\Address', 'json', $context);
            }
            $object->setAddress($values);
        }
        if (\array_key_exists('connectionPeak', $data)) {
            $object->setConnectionPeak($data['connectionPeak']);
        }
        if (\array_key_exists('connections', $data)) {
            $object->setConnections($data['connections']);
        }
        if (\array_key_exists('cpu', $data)) {
            $object->setCpu($data['cpu']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('network', $data)) {
            $object->setNetwork($data['network']);
        }
        if (\array_key_exists('nonPaged', $data)) {
            $object->setNonPaged($data['nonPaged']);
        }
        if (\array_key_exists('paged', $data)) {
            $object->setPaged($data['paged']);
        }
        if (\array_key_exists('pid', $data)) {
            $object->setPid($data['pid']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('uptimeMinutes', $data)) {
            $object->setUptimeMinutes($data['uptimeMinutes']);
        }
        if (\array_key_exists('utilization', $data)) {
            $object->setUtilization($data['utilization']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAddress()) {
            $values = array();
            foreach ($object->getAddress() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['address'] = $values;
        }
        if (null !== $object->getConnectionPeak()) {
            $data['connectionPeak'] = $object->getConnectionPeak();
        }
        if (null !== $object->getConnections()) {
            $data['connections'] = $object->getConnections();
        }
        if (null !== $object->getCpu()) {
            $data['cpu'] = $object->getCpu();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNetwork()) {
            $data['network'] = $object->getNetwork();
        }
        if (null !== $object->getNonPaged()) {
            $data['nonPaged'] = $object->getNonPaged();
        }
        if (null !== $object->getPaged()) {
            $data['paged'] = $object->getPaged();
        }
        if (null !== $object->getPid()) {
            $data['pid'] = $object->getPid();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getUptimeMinutes()) {
            $data['uptimeMinutes'] = $object->getUptimeMinutes();
        }
        if (null !== $object->getUtilization()) {
            $data['utilization'] = $object->getUtilization();
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        return $data;
    }
}