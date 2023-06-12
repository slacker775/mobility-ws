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
class ServerStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\ServerStatus';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\ServerStatus';
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
        $object = new \Mobility\Model\ServerStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addresses', $data)) {
            $values = array();
            foreach ($data['addresses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Mobility\\Model\\Address', 'json', $context);
            }
            $object->setAddresses($values);
            unset($data['addresses']);
        }
        if (\array_key_exists('connectionPeak', $data)) {
            $object->setConnectionPeak($data['connectionPeak']);
            unset($data['connectionPeak']);
        }
        if (\array_key_exists('connections', $data)) {
            $object->setConnections($data['connections']);
            unset($data['connections']);
        }
        if (\array_key_exists('cpu', $data)) {
            $object->setCpu($data['cpu']);
            unset($data['cpu']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('network', $data)) {
            $object->setNetwork($data['network']);
            unset($data['network']);
        }
        if (\array_key_exists('nonPaged', $data)) {
            $object->setNonPaged($data['nonPaged']);
            unset($data['nonPaged']);
        }
        if (\array_key_exists('paged', $data)) {
            $object->setPaged($data['paged']);
            unset($data['paged']);
        }
        if (\array_key_exists('pid', $data)) {
            $object->setPid($data['pid']);
            unset($data['pid']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('uptimeMinutes', $data)) {
            $object->setUptimeMinutes($data['uptimeMinutes']);
            unset($data['uptimeMinutes']);
        }
        if (\array_key_exists('utilization', $data)) {
            $object->setUtilization($data['utilization']);
            unset($data['utilization']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
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
        if ($object->isInitialized('addresses') && null !== $object->getAddresses()) {
            $values = array();
            foreach ($object->getAddresses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['addresses'] = $values;
        }
        if ($object->isInitialized('connectionPeak') && null !== $object->getConnectionPeak()) {
            $data['connectionPeak'] = $object->getConnectionPeak();
        }
        if ($object->isInitialized('connections') && null !== $object->getConnections()) {
            $data['connections'] = $object->getConnections();
        }
        if ($object->isInitialized('cpu') && null !== $object->getCpu()) {
            $data['cpu'] = $object->getCpu();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('network') && null !== $object->getNetwork()) {
            $data['network'] = $object->getNetwork();
        }
        if ($object->isInitialized('nonPaged') && null !== $object->getNonPaged()) {
            $data['nonPaged'] = $object->getNonPaged();
        }
        if ($object->isInitialized('paged') && null !== $object->getPaged()) {
            $data['paged'] = $object->getPaged();
        }
        if ($object->isInitialized('pid') && null !== $object->getPid()) {
            $data['pid'] = $object->getPid();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('uptimeMinutes') && null !== $object->getUptimeMinutes()) {
            $data['uptimeMinutes'] = $object->getUptimeMinutes();
        }
        if ($object->isInitialized('utilization') && null !== $object->getUtilization()) {
            $data['utilization'] = $object->getUtilization();
        }
        if ($object->isInitialized('version') && null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}