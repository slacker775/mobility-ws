<?php

namespace Mobility\Model;

class DeviceGroup extends \ArrayObject
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
    protected $description;
    /**
     * 
     *
     * @var float
     */
    protected $deviceCount;
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
     * @return float
     */
    public function getDeviceCount() : float
    {
        return $this->deviceCount;
    }
    /**
     * 
     *
     * @param float $deviceCount
     *
     * @return self
     */
    public function setDeviceCount(float $deviceCount) : self
    {
        $this->initialized['deviceCount'] = true;
        $this->deviceCount = $deviceCount;
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