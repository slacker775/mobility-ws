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
class SessionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Mobility\\Model\\Session';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\Session';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Mobility\Model\Session();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('battery', $data)) {
            $object->setBattery($data['battery']);
        }
        if (\array_key_exists('bssid', $data)) {
            $object->setBssid($data['bssid']);
        }
        if (\array_key_exists('connectTime', $data)) {
            $object->setConnectTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['connectTime']));
        }
        if (\array_key_exists('cpu', $data)) {
            $object->setCpu($data['cpu']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('deviceGroup', $data)) {
            $object->setDeviceGroup($data['deviceGroup']);
        }
        if (\array_key_exists('deviceName', $data)) {
            $object->setDeviceName($data['deviceName']);
        }
        if (\array_key_exists('interfaceAddress', $data)) {
            $object->setInterfaceAddress($data['interfaceAddress']);
        }
        if (\array_key_exists('interfaceName', $data)) {
            $object->setInterfaceName($data['interfaceName']);
        }
        if (\array_key_exists('interfaceSpeed', $data)) {
            $object->setInterfaceSpeed($data['interfaceSpeed']);
        }
        if (\array_key_exists('interfaceType', $data)) {
            $object->setInterfaceType($data['interfaceType']);
        }
        if (\array_key_exists('mobilityVersion', $data)) {
            $object->setMobilityVersion($data['mobilityVersion']);
        }
        if (\array_key_exists('model', $data) && $data['model'] !== null) {
            $object->setModel($data['model']);
        }
        elseif (\array_key_exists('model', $data) && $data['model'] === null) {
            $object->setModel(null);
        }
        if (\array_key_exists('nacLevel', $data)) {
            $object->setNacLevel($data['nacLevel']);
        }
        if (\array_key_exists('nacRuleset', $data)) {
            $object->setNacRuleset($data['nacRuleset']);
        }
        if (\array_key_exists('os', $data)) {
            $object->setOs($data['os']);
        }
        if (\array_key_exists('pid', $data)) {
            $object->setPid($data['pid']);
        }
        if (\array_key_exists('plat', $data)) {
            $object->setPlat($data['plat']);
        }
        if (\array_key_exists('policyRuleset', $data)) {
            $object->setPolicyRuleset($data['policyRuleset']);
        }
        if (\array_key_exists('popAddress', $data)) {
            $object->setPopAddress($data['popAddress']);
        }
        if (\array_key_exists('powerSource', $data)) {
            $object->setPowerSource($data['powerSource']);
        }
        if (\array_key_exists('serverName', $data)) {
            $object->setServerName($data['serverName']);
        }
        if (\array_key_exists('serverPid', $data)) {
            $object->setServerPid($data['serverPid']);
        }
        if (\array_key_exists('ssid', $data)) {
            $object->setSsid($data['ssid']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('totalBytes', $data)) {
            $object->setTotalBytes($data['totalBytes']);
        }
        if (\array_key_exists('userGroup', $data)) {
            $object->setUserGroup($data['userGroup']);
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
        }
        if (\array_key_exists('virtualAddress', $data)) {
            $object->setVirtualAddress($data['virtualAddress']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBattery()) {
            $data['battery'] = $object->getBattery();
        }
        if (null !== $object->getBssid()) {
            $data['bssid'] = $object->getBssid();
        }
        if (null !== $object->getConnectTime()) {
            $data['connectTime'] = $object->getConnectTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getCpu()) {
            $data['cpu'] = $object->getCpu();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDeviceGroup()) {
            $data['deviceGroup'] = $object->getDeviceGroup();
        }
        if (null !== $object->getDeviceName()) {
            $data['deviceName'] = $object->getDeviceName();
        }
        if (null !== $object->getInterfaceAddress()) {
            $data['interfaceAddress'] = $object->getInterfaceAddress();
        }
        if (null !== $object->getInterfaceName()) {
            $data['interfaceName'] = $object->getInterfaceName();
        }
        if (null !== $object->getInterfaceSpeed()) {
            $data['interfaceSpeed'] = $object->getInterfaceSpeed();
        }
        if (null !== $object->getInterfaceType()) {
            $data['interfaceType'] = $object->getInterfaceType();
        }
        if (null !== $object->getMobilityVersion()) {
            $data['mobilityVersion'] = $object->getMobilityVersion();
        }
        if (null !== $object->getModel()) {
            $data['model'] = $object->getModel();
        }
        if (null !== $object->getNacLevel()) {
            $data['nacLevel'] = $object->getNacLevel();
        }
        if (null !== $object->getNacRuleset()) {
            $data['nacRuleset'] = $object->getNacRuleset();
        }
        if (null !== $object->getOs()) {
            $data['os'] = $object->getOs();
        }
        if (null !== $object->getPid()) {
            $data['pid'] = $object->getPid();
        }
        if (null !== $object->getPlat()) {
            $data['plat'] = $object->getPlat();
        }
        if (null !== $object->getPolicyRuleset()) {
            $data['policyRuleset'] = $object->getPolicyRuleset();
        }
        if (null !== $object->getPopAddress()) {
            $data['popAddress'] = $object->getPopAddress();
        }
        if (null !== $object->getPowerSource()) {
            $data['powerSource'] = $object->getPowerSource();
        }
        if (null !== $object->getServerName()) {
            $data['serverName'] = $object->getServerName();
        }
        if (null !== $object->getServerPid()) {
            $data['serverPid'] = $object->getServerPid();
        }
        if (null !== $object->getSsid()) {
            $data['ssid'] = $object->getSsid();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getTotalBytes()) {
            $data['totalBytes'] = $object->getTotalBytes();
        }
        if (null !== $object->getUserGroup()) {
            $data['userGroup'] = $object->getUserGroup();
        }
        if (null !== $object->getUserName()) {
            $data['userName'] = $object->getUserName();
        }
        if (null !== $object->getVirtualAddress()) {
            $data['virtualAddress'] = $object->getVirtualAddress();
        }
        return $data;
    }
}