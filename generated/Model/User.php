<?php

namespace Mobility\Model;

class User extends \ArrayObject
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
    protected $name;
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
    protected $lastDevice;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $lastConnect;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $firstLogon;
    /**
     * 
     *
     * @var string
     */
    protected $staticAddress;
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
        $this->initialized['userGroup'] = true;
        $this->userGroup = $userGroup;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastDevice() : string
    {
        return $this->lastDevice;
    }
    /**
     * 
     *
     * @param string $lastDevice
     *
     * @return self
     */
    public function setLastDevice(string $lastDevice) : self
    {
        $this->initialized['lastDevice'] = true;
        $this->lastDevice = $lastDevice;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getLastConnect() : \DateTime
    {
        return $this->lastConnect;
    }
    /**
     * 
     *
     * @param \DateTime $lastConnect
     *
     * @return self
     */
    public function setLastConnect(\DateTime $lastConnect) : self
    {
        $this->initialized['lastConnect'] = true;
        $this->lastConnect = $lastConnect;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getFirstLogon() : \DateTime
    {
        return $this->firstLogon;
    }
    /**
     * 
     *
     * @param \DateTime $firstLogon
     *
     * @return self
     */
    public function setFirstLogon(\DateTime $firstLogon) : self
    {
        $this->initialized['firstLogon'] = true;
        $this->firstLogon = $firstLogon;
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
}