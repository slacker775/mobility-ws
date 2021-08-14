<?php

namespace Mobility\Model;

class NetworkRoaming
{
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
        $this->timestamp = $timestamp;
        return $this;
    }
}