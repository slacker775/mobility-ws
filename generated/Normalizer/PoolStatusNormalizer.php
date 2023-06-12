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
class PoolStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\PoolStatus';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\PoolStatus';
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
        $object = new \Mobility\Model\PoolStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('batteryPowered', $data)) {
            $object->setBatteryPowered($data['batteryPowered']);
            unset($data['batteryPowered']);
        }
        if (\array_key_exists('connected', $data)) {
            $object->setConnected($data['connected']);
            unset($data['connected']);
        }
        if (\array_key_exists('connectionsLifetime', $data)) {
            $object->setConnectionsLifetime($data['connectionsLifetime']);
            unset($data['connectionsLifetime']);
        }
        if (\array_key_exists('connectionsPeak', $data)) {
            $object->setConnectionsPeak($data['connectionsPeak']);
            unset($data['connectionsPeak']);
        }
        if (\array_key_exists('deviceLicensesAvailable', $data)) {
            $object->setDeviceLicensesAvailable($data['deviceLicensesAvailable']);
            unset($data['deviceLicensesAvailable']);
        }
        if (\array_key_exists('deviceLicensesLimit', $data)) {
            $object->setDeviceLicensesLimit($data['deviceLicensesLimit']);
            unset($data['deviceLicensesLimit']);
        }
        if (\array_key_exists('disconnected', $data)) {
            $object->setDisconnected($data['disconnected']);
            unset($data['disconnected']);
        }
        if (\array_key_exists('lowBatteries', $data)) {
            $object->setLowBatteries($data['lowBatteries']);
            unset($data['lowBatteries']);
        }
        if (\array_key_exists('NACdisconnected', $data)) {
            $object->setNACdisconnected($data['NACdisconnected']);
            unset($data['NACdisconnected']);
        }
        if (\array_key_exists('NACquarantined', $data)) {
            $object->setNACquarantined($data['NACquarantined']);
            unset($data['NACquarantined']);
        }
        if (\array_key_exists('NACremediated', $data)) {
            $object->setNACremediated($data['NACremediated']);
            unset($data['NACremediated']);
        }
        if (\array_key_exists('NACwarned', $data)) {
            $object->setNACwarned($data['NACwarned']);
            unset($data['NACwarned']);
        }
        if (\array_key_exists('newDevices', $data)) {
            $object->setNewDevices($data['newDevices']);
            unset($data['newDevices']);
        }
        if (\array_key_exists('newUsers', $data)) {
            $object->setNewUsers($data['newUsers']);
            unset($data['newUsers']);
        }
        if (\array_key_exists('quarantinedDevices', $data)) {
            $object->setQuarantinedDevices($data['quarantinedDevices']);
            unset($data['quarantinedDevices']);
        }
        if (\array_key_exists('quarantinedUsers', $data)) {
            $object->setQuarantinedUsers($data['quarantinedUsers']);
            unset($data['quarantinedUsers']);
        }
        if (\array_key_exists('registered', $data)) {
            $object->setRegistered($data['registered']);
            unset($data['registered']);
        }
        if (\array_key_exists('registeredUsers', $data)) {
            $object->setRegisteredUsers($data['registeredUsers']);
            unset($data['registeredUsers']);
        }
        if (\array_key_exists('sessions', $data)) {
            $object->setSessions($data['sessions']);
            unset($data['sessions']);
        }
        if (\array_key_exists('unreachable', $data)) {
            $object->setUnreachable($data['unreachable']);
            unset($data['unreachable']);
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
        if ($object->isInitialized('batteryPowered') && null !== $object->getBatteryPowered()) {
            $data['batteryPowered'] = $object->getBatteryPowered();
        }
        if ($object->isInitialized('connected') && null !== $object->getConnected()) {
            $data['connected'] = $object->getConnected();
        }
        if ($object->isInitialized('connectionsLifetime') && null !== $object->getConnectionsLifetime()) {
            $data['connectionsLifetime'] = $object->getConnectionsLifetime();
        }
        if ($object->isInitialized('connectionsPeak') && null !== $object->getConnectionsPeak()) {
            $data['connectionsPeak'] = $object->getConnectionsPeak();
        }
        if ($object->isInitialized('deviceLicensesAvailable') && null !== $object->getDeviceLicensesAvailable()) {
            $data['deviceLicensesAvailable'] = $object->getDeviceLicensesAvailable();
        }
        if ($object->isInitialized('deviceLicensesLimit') && null !== $object->getDeviceLicensesLimit()) {
            $data['deviceLicensesLimit'] = $object->getDeviceLicensesLimit();
        }
        if ($object->isInitialized('disconnected') && null !== $object->getDisconnected()) {
            $data['disconnected'] = $object->getDisconnected();
        }
        if ($object->isInitialized('lowBatteries') && null !== $object->getLowBatteries()) {
            $data['lowBatteries'] = $object->getLowBatteries();
        }
        if ($object->isInitialized('nACdisconnected') && null !== $object->getNACdisconnected()) {
            $data['NACdisconnected'] = $object->getNACdisconnected();
        }
        if ($object->isInitialized('nACquarantined') && null !== $object->getNACquarantined()) {
            $data['NACquarantined'] = $object->getNACquarantined();
        }
        if ($object->isInitialized('nACremediated') && null !== $object->getNACremediated()) {
            $data['NACremediated'] = $object->getNACremediated();
        }
        if ($object->isInitialized('nACwarned') && null !== $object->getNACwarned()) {
            $data['NACwarned'] = $object->getNACwarned();
        }
        if ($object->isInitialized('newDevices') && null !== $object->getNewDevices()) {
            $data['newDevices'] = $object->getNewDevices();
        }
        if ($object->isInitialized('newUsers') && null !== $object->getNewUsers()) {
            $data['newUsers'] = $object->getNewUsers();
        }
        if ($object->isInitialized('quarantinedDevices') && null !== $object->getQuarantinedDevices()) {
            $data['quarantinedDevices'] = $object->getQuarantinedDevices();
        }
        if ($object->isInitialized('quarantinedUsers') && null !== $object->getQuarantinedUsers()) {
            $data['quarantinedUsers'] = $object->getQuarantinedUsers();
        }
        if ($object->isInitialized('registered') && null !== $object->getRegistered()) {
            $data['registered'] = $object->getRegistered();
        }
        if ($object->isInitialized('registeredUsers') && null !== $object->getRegisteredUsers()) {
            $data['registeredUsers'] = $object->getRegisteredUsers();
        }
        if ($object->isInitialized('sessions') && null !== $object->getSessions()) {
            $data['sessions'] = $object->getSessions();
        }
        if ($object->isInitialized('unreachable') && null !== $object->getUnreachable()) {
            $data['unreachable'] = $object->getUnreachable();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}