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
class PoolStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Mobility\\Model\\PoolStatus';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\PoolStatus';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Mobility\Model\PoolStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('batteryPowered', $data)) {
            $object->setBatteryPowered($data['batteryPowered']);
        }
        if (\array_key_exists('connected', $data)) {
            $object->setConnected($data['connected']);
        }
        if (\array_key_exists('connectionsLifetime', $data)) {
            $object->setConnectionsLifetime($data['connectionsLifetime']);
        }
        if (\array_key_exists('connectionsPeak', $data)) {
            $object->setConnectionsPeak($data['connectionsPeak']);
        }
        if (\array_key_exists('disconnected', $data)) {
            $object->setDisconnected($data['disconnected']);
        }
        if (\array_key_exists('lowBatteries', $data)) {
            $object->setLowBatteries($data['lowBatteries']);
        }
        if (\array_key_exists('NACdisconnected', $data)) {
            $object->setNACdisconnected($data['NACdisconnected']);
        }
        if (\array_key_exists('NACquarantined', $data)) {
            $object->setNACquarantined($data['NACquarantined']);
        }
        if (\array_key_exists('NACremediated', $data)) {
            $object->setNACremediated($data['NACremediated']);
        }
        if (\array_key_exists('NACwarned', $data)) {
            $object->setNACwarned($data['NACwarned']);
        }
        if (\array_key_exists('newDevices', $data)) {
            $object->setNewDevices($data['newDevices']);
        }
        if (\array_key_exists('newUsers', $data)) {
            $object->setNewUsers($data['newUsers']);
        }
        if (\array_key_exists('quarantinedDevices', $data)) {
            $object->setQuarantinedDevices($data['quarantinedDevices']);
        }
        if (\array_key_exists('registered', $data)) {
            $object->setRegistered($data['registered']);
        }
        if (\array_key_exists('registeredUsers', $data)) {
            $object->setRegisteredUsers($data['registeredUsers']);
        }
        if (\array_key_exists('sessions', $data)) {
            $object->setSessions($data['sessions']);
        }
        if (\array_key_exists('unreachable', $data)) {
            $object->setUnreachable($data['unreachable']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBatteryPowered()) {
            $data['batteryPowered'] = $object->getBatteryPowered();
        }
        if (null !== $object->getConnected()) {
            $data['connected'] = $object->getConnected();
        }
        if (null !== $object->getConnectionsLifetime()) {
            $data['connectionsLifetime'] = $object->getConnectionsLifetime();
        }
        if (null !== $object->getConnectionsPeak()) {
            $data['connectionsPeak'] = $object->getConnectionsPeak();
        }
        if (null !== $object->getDisconnected()) {
            $data['disconnected'] = $object->getDisconnected();
        }
        if (null !== $object->getLowBatteries()) {
            $data['lowBatteries'] = $object->getLowBatteries();
        }
        if (null !== $object->getNACdisconnected()) {
            $data['NACdisconnected'] = $object->getNACdisconnected();
        }
        if (null !== $object->getNACquarantined()) {
            $data['NACquarantined'] = $object->getNACquarantined();
        }
        if (null !== $object->getNACremediated()) {
            $data['NACremediated'] = $object->getNACremediated();
        }
        if (null !== $object->getNACwarned()) {
            $data['NACwarned'] = $object->getNACwarned();
        }
        if (null !== $object->getNewDevices()) {
            $data['newDevices'] = $object->getNewDevices();
        }
        if (null !== $object->getNewUsers()) {
            $data['newUsers'] = $object->getNewUsers();
        }
        if (null !== $object->getQuarantinedDevices()) {
            $data['quarantinedDevices'] = $object->getQuarantinedDevices();
        }
        if (null !== $object->getRegistered()) {
            $data['registered'] = $object->getRegistered();
        }
        if (null !== $object->getRegisteredUsers()) {
            $data['registeredUsers'] = $object->getRegisteredUsers();
        }
        if (null !== $object->getSessions()) {
            $data['sessions'] = $object->getSessions();
        }
        if (null !== $object->getUnreachable()) {
            $data['unreachable'] = $object->getUnreachable();
        }
        return $data;
    }
}