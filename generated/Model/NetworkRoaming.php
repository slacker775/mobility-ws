<?php

namespace Mobility\Model;

class NetworkRoaming extends \ArrayObject
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
    protected $deviceName;
    /**
     * 
     *
     * @var string
     */
    protected $devicePid;
    /**
     * 
     *
     * @var int
     */
    protected $roamingCount;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
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
        $this->initialized['deviceName'] = true;
        $this->deviceName = $deviceName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDevicePid() : string
    {
        return $this->devicePid;
    }
    /**
     * 
     *
     * @param string $devicePid
     *
     * @return self
     */
    public function setDevicePid(string $devicePid) : self
    {
        $this->initialized['devicePid'] = true;
        $this->devicePid = $devicePid;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRoamingCount() : int
    {
        return $this->roamingCount;
    }
    /**
     * 
     *
     * @param int $roamingCount
     *
     * @return self
     */
    public function setRoamingCount(int $roamingCount) : self
    {
        $this->initialized['roamingCount'] = true;
        $this->roamingCount = $roamingCount;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
}