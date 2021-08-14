<?php

namespace Mobility\Model;

class Session
{
    /**
     * 
     *
     * @var int
     */
    protected $battery;
    /**
     * 
     *
     * @var string
     */
    protected $bssid;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $connectTime;
    /**
     * 
     *
     * @var string
     */
    protected $cpu;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $deviceGroup;
    /**
     * 
     *
     * @var string
     */
    protected $deviceName;
    /**
     * 
     *
     * @var string
     */
    protected $interfaceAddress;
    /**
     * 
     *
     * @var string
     */
    protected $interfaceName;
    /**
     * 
     *
     * @var string
     */
    protected $interfaceSpeed;
    /**
     * 
     *
     * @var string
     */
    protected $interfaceType;
    /**
     * 
     *
     * @var string
     */
    protected $mobilityVersion;
    /**
     * 
     *
     * @var string
     */
    protected $model;
    /**
     * 
     *
     * @var string
     */
    protected $nacLevel;
    /**
     * 
     *
     * @var string
     */
    protected $nacRuleset;
    /**
     * 
     *
     * @var string
     */
    protected $os;
    /**
     * 
     *
     * @var string
     */
    protected $pid;
    /**
     * 
     *
     * @var string
     */
    protected $plat;
    /**
     * 
     *
     * @var string
     */
    protected $policyRuleset;
    /**
     * 
     *
     * @var string
     */
    protected $popAddress;
    /**
     * 
     *
     * @var string
     */
    protected $powerSource;
    /**
     * 
     *
     * @var string
     */
    protected $serverName;
    /**
     * 
     *
     * @var string
     */
    protected $serverPid;
    /**
     * 
     *
     * @var string
     */
    protected $ssid;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $totalBytes;
    /**
     * 
     *
     * @var string
     */
    protected $userGroup;
    /**
     * 
     *
     * @var string
     */
    protected $userName;
    /**
     * 
     *
     * @var string
     */
    protected $virtualAddress;
    /**
     * 
     *
     * @return int
     */
    public function getBattery() : int
    {
        return $this->battery;
    }
    /**
     * 
     *
     * @param int $battery
     *
     * @return self
     */
    public function setBattery(int $battery) : self
    {
        $this->battery = $battery;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBssid() : string
    {
        return $this->bssid;
    }
    /**
     * 
     *
     * @param string $bssid
     *
     * @return self
     */
    public function setBssid(string $bssid) : self
    {
        $this->bssid = $bssid;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getConnectTime() : \DateTime
    {
        return $this->connectTime;
    }
    /**
     * 
     *
     * @param \DateTime $connectTime
     *
     * @return self
     */
    public function setConnectTime(\DateTime $connectTime) : self
    {
        $this->connectTime = $connectTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCpu() : string
    {
        return $this->cpu;
    }
    /**
     * 
     *
     * @param string $cpu
     *
     * @return self
     */
    public function setCpu(string $cpu) : self
    {
        $this->cpu = $cpu;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeviceGroup() : string
    {
        return $this->deviceGroup;
    }
    /**
     * 
     *
     * @param string $deviceGroup
     *
     * @return self
     */
    public function setDeviceGroup(string $deviceGroup) : self
    {
        $this->deviceGroup = $deviceGroup;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeviceName() : string
    {
        return $this->deviceName;
    }
    /**
     * 
     *
     * @param string $deviceName
     *
     * @return self
     */
    public function setDeviceName(string $deviceName) : self
    {
        $this->deviceName = $deviceName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInterfaceAddress() : string
    {
        return $this->interfaceAddress;
    }
    /**
     * 
     *
     * @param string $interfaceAddress
     *
     * @return self
     */
    public function setInterfaceAddress(string $interfaceAddress) : self
    {
        $this->interfaceAddress = $interfaceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInterfaceName() : string
    {
        return $this->interfaceName;
    }
    /**
     * 
     *
     * @param string $interfaceName
     *
     * @return self
     */
    public function setInterfaceName(string $interfaceName) : self
    {
        $this->interfaceName = $interfaceName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInterfaceSpeed() : string
    {
        return $this->interfaceSpeed;
    }
    /**
     * 
     *
     * @param string $interfaceSpeed
     *
     * @return self
     */
    public function setInterfaceSpeed(string $interfaceSpeed) : self
    {
        $this->interfaceSpeed = $interfaceSpeed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInterfaceType() : string
    {
        return $this->interfaceType;
    }
    /**
     * 
     *
     * @param string $interfaceType
     *
     * @return self
     */
    public function setInterfaceType(string $interfaceType) : self
    {
        $this->interfaceType = $interfaceType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMobilityVersion() : string
    {
        return $this->mobilityVersion;
    }
    /**
     * 
     *
     * @param string $mobilityVersion
     *
     * @return self
     */
    public function setMobilityVersion(string $mobilityVersion) : self
    {
        $this->mobilityVersion = $mobilityVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getModel() : string
    {
        return $this->model;
    }
    /**
     * 
     *
     * @param string $model
     *
     * @return self
     */
    public function setModel(string $model) : self
    {
        $this->model = $model;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNacLevel() : string
    {
        return $this->nacLevel;
    }
    /**
     * 
     *
     * @param string $nacLevel
     *
     * @return self
     */
    public function setNacLevel(string $nacLevel) : self
    {
        $this->nacLevel = $nacLevel;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNacRuleset() : string
    {
        return $this->nacRuleset;
    }
    /**
     * 
     *
     * @param string $nacRuleset
     *
     * @return self
     */
    public function setNacRuleset(string $nacRuleset) : self
    {
        $this->nacRuleset = $nacRuleset;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOs() : string
    {
        return $this->os;
    }
    /**
     * 
     *
     * @param string $os
     *
     * @return self
     */
    public function setOs(string $os) : self
    {
        $this->os = $os;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPid() : string
    {
        return $this->pid;
    }
    /**
     * 
     *
     * @param string $pid
     *
     * @return self
     */
    public function setPid(string $pid) : self
    {
        $this->pid = $pid;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlat() : string
    {
        return $this->plat;
    }
    /**
     * 
     *
     * @param string $plat
     *
     * @return self
     */
    public function setPlat(string $plat) : self
    {
        $this->plat = $plat;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPolicyRuleset() : string
    {
        return $this->policyRuleset;
    }
    /**
     * 
     *
     * @param string $policyRuleset
     *
     * @return self
     */
    public function setPolicyRuleset(string $policyRuleset) : self
    {
        $this->policyRuleset = $policyRuleset;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPopAddress() : string
    {
        return $this->popAddress;
    }
    /**
     * 
     *
     * @param string $popAddress
     *
     * @return self
     */
    public function setPopAddress(string $popAddress) : self
    {
        $this->popAddress = $popAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPowerSource() : string
    {
        return $this->powerSource;
    }
    /**
     * 
     *
     * @param string $powerSource
     *
     * @return self
     */
    public function setPowerSource(string $powerSource) : self
    {
        $this->powerSource = $powerSource;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getServerName() : string
    {
        return $this->serverName;
    }
    /**
     * 
     *
     * @param string $serverName
     *
     * @return self
     */
    public function setServerName(string $serverName) : self
    {
        $this->serverName = $serverName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getServerPid() : string
    {
        return $this->serverPid;
    }
    /**
     * 
     *
     * @param string $serverPid
     *
     * @return self
     */
    public function setServerPid(string $serverPid) : self
    {
        $this->serverPid = $serverPid;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSsid() : string
    {
        return $this->ssid;
    }
    /**
     * 
     *
     * @param string $ssid
     *
     * @return self
     */
    public function setSsid(string $ssid) : self
    {
        $this->ssid = $ssid;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalBytes() : int
    {
        return $this->totalBytes;
    }
    /**
     * 
     *
     * @param int $totalBytes
     *
     * @return self
     */
    public function setTotalBytes(int $totalBytes) : self
    {
        $this->totalBytes = $totalBytes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserGroup() : string
    {
        return $this->userGroup;
    }
    /**
     * 
     *
     * @param string $userGroup
     *
     * @return self
     */
    public function setUserGroup(string $userGroup) : self
    {
        $this->userGroup = $userGroup;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }
    /**
     * 
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName) : self
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVirtualAddress() : string
    {
        return $this->virtualAddress;
    }
    /**
     * 
     *
     * @param string $virtualAddress
     *
     * @return self
     */
    public function setVirtualAddress(string $virtualAddress) : self
    {
        $this->virtualAddress = $virtualAddress;
        return $this;
    }
}