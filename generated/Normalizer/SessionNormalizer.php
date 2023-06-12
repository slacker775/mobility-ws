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
class SessionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Mobility\\Model\\Session';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Mobility\\Model\\Session';
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
        $object = new \Mobility\Model\Session();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('battery', $data)) {
            $object->setBattery($data['battery']);
            unset($data['battery']);
        }
        if (\array_key_exists('bssid', $data)) {
            $object->setBssid($data['bssid']);
            unset($data['bssid']);
        }
        if (\array_key_exists('connectTime', $data)) {
            $object->setConnectTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['connectTime']));
            unset($data['connectTime']);
        }
        if (\array_key_exists('cpu', $data)) {
            $object->setCpu($data['cpu']);
            unset($data['cpu']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('deviceGroup', $data)) {
            $object->setDeviceGroup($data['deviceGroup']);
            unset($data['deviceGroup']);
        }
        if (\array_key_exists('deviceName', $data)) {
            $object->setDeviceName($data['deviceName']);
            unset($data['deviceName']);
        }
        if (\array_key_exists('interfaceAddress', $data)) {
            $object->setInterfaceAddress($data['interfaceAddress']);
            unset($data['interfaceAddress']);
        }
        if (\array_key_exists('interfaceName', $data)) {
            $object->setInterfaceName($data['interfaceName']);
            unset($data['interfaceName']);
        }
        if (\array_key_exists('interfaceSpeed', $data)) {
            $object->setInterfaceSpeed($data['interfaceSpeed']);
            unset($data['interfaceSpeed']);
        }
        if (\array_key_exists('interfaceType', $data)) {
            $object->setInterfaceType($data['interfaceType']);
            unset($data['interfaceType']);
        }
        if (\array_key_exists('mobilityVersion', $data)) {
            $object->setMobilityVersion($data['mobilityVersion']);
            unset($data['mobilityVersion']);
        }
        if (\array_key_exists('model', $data) && $data['model'] !== null) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        elseif (\array_key_exists('model', $data) && $data['model'] === null) {
            $object->setModel(null);
        }
        if (\array_key_exists('nacLevel', $data)) {
            $object->setNacLevel($data['nacLevel']);
            unset($data['nacLevel']);
        }
        if (\array_key_exists('nacRuleset', $data)) {
            $object->setNacRuleset($data['nacRuleset']);
            unset($data['nacRuleset']);
        }
        if (\array_key_exists('os', $data)) {
            $object->setOs($data['os']);
            unset($data['os']);
        }
        if (\array_key_exists('pid', $data)) {
            $object->setPid($data['pid']);
            unset($data['pid']);
        }
        if (\array_key_exists('plat', $data)) {
            $object->setPlat($data['plat']);
            unset($data['plat']);
        }
        if (\array_key_exists('policyRuleset', $data)) {
            $object->setPolicyRuleset($data['policyRuleset']);
            unset($data['policyRuleset']);
        }
        if (\array_key_exists('popAddress', $data)) {
            $object->setPopAddress($data['popAddress']);
            unset($data['popAddress']);
        }
        if (\array_key_exists('powerSource', $data)) {
            $object->setPowerSource($data['powerSource']);
            unset($data['powerSource']);
        }
        if (\array_key_exists('serverName', $data)) {
            $object->setServerName($data['serverName']);
            unset($data['serverName']);
        }
        if (\array_key_exists('serverPid', $data)) {
            $object->setServerPid($data['serverPid']);
            unset($data['serverPid']);
        }
        if (\array_key_exists('ssid', $data)) {
            $object->setSsid($data['ssid']);
            unset($data['ssid']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('totalBytes', $data)) {
            $object->setTotalBytes($data['totalBytes']);
            unset($data['totalBytes']);
        }
        if (\array_key_exists('userGroup', $data)) {
            $object->setUserGroup($data['userGroup']);
            unset($data['userGroup']);
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
            unset($data['userName']);
        }
        if (\array_key_exists('virtualAddress', $data)) {
            $object->setVirtualAddress($data['virtualAddress']);
            unset($data['virtualAddress']);
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
        if ($object->isInitialized('battery') && null !== $object->getBattery()) {
            $data['battery'] = $object->getBattery();
        }
        if ($object->isInitialized('bssid') && null !== $object->getBssid()) {
            $data['bssid'] = $object->getBssid();
        }
        if ($object->isInitialized('connectTime') && null !== $object->getConnectTime()) {
            $data['connectTime'] = $object->getConnectTime()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('cpu') && null !== $object->getCpu()) {
            $data['cpu'] = $object->getCpu();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('deviceGroup') && null !== $object->getDeviceGroup()) {
            $data['deviceGroup'] = $object->getDeviceGroup();
        }
        if ($object->isInitialized('deviceName') && null !== $object->getDeviceName()) {
            $data['deviceName'] = $object->getDeviceName();
        }
        if ($object->isInitialized('interfaceAddress') && null !== $object->getInterfaceAddress()) {
            $data['interfaceAddress'] = $object->getInterfaceAddress();
        }
        if ($object->isInitialized('interfaceName') && null !== $object->getInterfaceName()) {
            $data['interfaceName'] = $object->getInterfaceName();
        }
        if ($object->isInitialized('interfaceSpeed') && null !== $object->getInterfaceSpeed()) {
            $data['interfaceSpeed'] = $object->getInterfaceSpeed();
        }
        if ($object->isInitialized('interfaceType') && null !== $object->getInterfaceType()) {
            $data['interfaceType'] = $object->getInterfaceType();
        }
        if ($object->isInitialized('mobilityVersion') && null !== $object->getMobilityVersion()) {
            $data['mobilityVersion'] = $object->getMobilityVersion();
        }
        if ($object->isInitialized('model') && null !== $object->getModel()) {
            $data['model'] = $object->getModel();
        }
        if ($object->isInitialized('nacLevel') && null !== $object->getNacLevel()) {
            $data['nacLevel'] = $object->getNacLevel();
        }
        if ($object->isInitialized('nacRuleset') && null !== $object->getNacRuleset()) {
            $data['nacRuleset'] = $object->getNacRuleset();
        }
        if ($object->isInitialized('os') && null !== $object->getOs()) {
            $data['os'] = $object->getOs();
        }
        if ($object->isInitialized('pid') && null !== $object->getPid()) {
            $data['pid'] = $object->getPid();
        }
        if ($object->isInitialized('plat') && null !== $object->getPlat()) {
            $data['plat'] = $object->getPlat();
        }
        if ($object->isInitialized('policyRuleset') && null !== $object->getPolicyRuleset()) {
            $data['policyRuleset'] = $object->getPolicyRuleset();
        }
        if ($object->isInitialized('popAddress') && null !== $object->getPopAddress()) {
            $data['popAddress'] = $object->getPopAddress();
        }
        if ($object->isInitialized('powerSource') && null !== $object->getPowerSource()) {
            $data['powerSource'] = $object->getPowerSource();
        }
        if ($object->isInitialized('serverName') && null !== $object->getServerName()) {
            $data['serverName'] = $object->getServerName();
        }
        if ($object->isInitialized('serverPid') && null !== $object->getServerPid()) {
            $data['serverPid'] = $object->getServerPid();
        }
        if ($object->isInitialized('ssid') && null !== $object->getSsid()) {
            $data['ssid'] = $object->getSsid();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('totalBytes') && null !== $object->getTotalBytes()) {
            $data['totalBytes'] = $object->getTotalBytes();
        }
        if ($object->isInitialized('userGroup') && null !== $object->getUserGroup()) {
            $data['userGroup'] = $object->getUserGroup();
        }
        if ($object->isInitialized('userName') && null !== $object->getUserName()) {
            $data['userName'] = $object->getUserName();
        }
        if ($object->isInitialized('virtualAddress') && null !== $object->getVirtualAddress()) {
            $data['virtualAddress'] = $object->getVirtualAddress();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}