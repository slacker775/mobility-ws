<?php

namespace Mobility\Model;

class Device extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    protected $disconnectReason;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $lastConnect;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $lastDisconnect;
    /**
     * 
     *
     * @var string
     */
    protected $lastUser;
    /**
     * 
     *
     * @var string
     */
    protected $localityVersion;
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $operatingSystem;
    /**
     * 
     *
     * @var string
     */
    protected $pid;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $registered;
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
        $this->initialized['deviceGroup'] = true;
        $this->deviceGroup = $deviceGroup;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisconnectReason() : string
    {
        return $this->disconnectReason;
    }
    /**
     * 
     *
     * @param string $disconnectReason
     *
     * @return self
     */
    public function setDisconnectReason(string $disconnectReason) : self
    {
        $this->initialized['disconnectReason'] = true;
        $this->disconnectReason = $disconnectReason;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getLastConnect() : ?\DateTime
    {
        return $this->lastConnect;
    }
    /**
     * 
     *
     * @param \DateTime|null $lastConnect
     *
     * @return self
     */
    public function setLastConnect(?\DateTime $lastConnect) : self
    {
        $this->initialized['lastConnect'] = true;
        $this->lastConnect = $lastConnect;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getLastDisconnect() : ?\DateTime
    {
        return $this->lastDisconnect;
    }
    /**
     * 
     *
     * @param \DateTime|null $lastDisconnect
     *
     * @return self
     */
    public function setLastDisconnect(?\DateTime $lastDisconnect) : self
    {
        $this->initialized['lastDisconnect'] = true;
        $this->lastDisconnect = $lastDisconnect;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastUser() : string
    {
        return $this->lastUser;
    }
    /**
     * 
     *
     * @param string $lastUser
     *
     * @return self
     */
    public function setLastUser(string $lastUser) : self
    {
        $this->initialized['lastUser'] = true;
        $this->lastUser = $lastUser;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLocalityVersion() : string
    {
        return $this->localityVersion;
    }
    /**
     * 
     *
     * @param string $localityVersion
     *
     * @return self
     */
    public function setLocalityVersion(string $localityVersion) : self
    {
        $this->initialized['localityVersion'] = true;
        $this->localityVersion = $localityVersion;
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
        $this->initialized['mobilityVersion'] = true;
        $this->mobilityVersion = $mobilityVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperatingSystem() : string
    {
        return $this->operatingSystem;
    }
    /**
     * 
     *
     * @param string $operatingSystem
     *
     * @return self
     */
    public function setOperatingSystem(string $operatingSystem) : self
    {
        $this->initialized['operatingSystem'] = true;
        $this->operatingSystem = $operatingSystem;
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
        $this->initialized['pid'] = true;
        $this->pid = $pid;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getRegistered() : \DateTime
    {
        return $this->registered;
    }
    /**
     * 
     *
     * @param \DateTime $registered
     *
     * @return self
     */
    public function setRegistered(\DateTime $registered) : self
    {
        $this->initialized['registered'] = true;
        $this->registered = $registered;
        return $this;
    }
}