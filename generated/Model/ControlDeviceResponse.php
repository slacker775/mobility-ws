<?php

namespace Mobility\Model;

class ControlDeviceResponse extends \ArrayObject
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
     * @var ControlDevice[]
     */
    protected $devices;
    /**
     * 
     *
     * @return ControlDevice[]
     */
    public function getDevices() : array
    {
        return $this->devices;
    }
    /**
     * 
     *
     * @param ControlDevice[] $devices
     *
     * @return self
     */
    public function setDevices(array $devices) : self
    {
        $this->initialized['devices'] = true;
        $this->devices = $devices;
        return $this;
    }
}