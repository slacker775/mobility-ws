<?php

namespace Mobility\Model;

class DeviceGroupResponse extends \ArrayObject
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
     * @var DeviceGroup[]
     */
    protected $deviceGroups;
    /**
     * 
     *
     * @return DeviceGroup[]
     */
    public function getDeviceGroups() : array
    {
        return $this->deviceGroups;
    }
    /**
     * 
     *
     * @param DeviceGroup[] $deviceGroups
     *
     * @return self
     */
    public function setDeviceGroups(array $deviceGroups) : self
    {
        $this->initialized['deviceGroups'] = true;
        $this->deviceGroups = $deviceGroups;
        return $this;
    }
}