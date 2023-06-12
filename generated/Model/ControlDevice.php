<?php

namespace Mobility\Model;

class ControlDevice extends \ArrayObject
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
    protected $id;
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
    protected $operatingSystem;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $registered;
    /**
     * 
     *
     * @var string
     */
    protected $lastConnect;
    /**
     * 
     *
     * @var string
     */
    protected $staticAddress;
    /**
     * 
     *
     * @var bool
     */
    protected $connected;
    /**
     * 
     *
     * @var bool
     */
    protected $quarantined;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
        $this->initialized['description'] = true;
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
        $this->initialized['deviceGroup'] = true;
        $this->deviceGroup = $deviceGroup;
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
    /**
     * 
     *
     * @return string
     */
    public function getLastConnect() : string
    {
        return $this->lastConnect;
    }
    /**
     * 
     *
     * @param string $lastConnect
     *
     * @return self
     */
    public function setLastConnect(string $lastConnect) : self
    {
        $this->initialized['lastConnect'] = true;
        $this->lastConnect = $lastConnect;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStaticAddress() : string
    {
        return $this->staticAddress;
    }
    /**
     * 
     *
     * @param string $staticAddress
     *
     * @return self
     */
    public function setStaticAddress(string $staticAddress) : self
    {
        $this->initialized['staticAddress'] = true;
        $this->staticAddress = $staticAddress;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getConnected() : bool
    {
        return $this->connected;
    }
    /**
     * 
     *
     * @param bool $connected
     *
     * @return self
     */
    public function setConnected(bool $connected) : self
    {
        $this->initialized['connected'] = true;
        $this->connected = $connected;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getQuarantined() : bool
    {
        return $this->quarantined;
    }
    /**
     * 
     *
     * @param bool $quarantined
     *
     * @return self
     */
    public function setQuarantined(bool $quarantined) : self
    {
        $this->initialized['quarantined'] = true;
        $this->quarantined = $quarantined;
        return $this;
    }
}