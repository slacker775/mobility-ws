<?php

namespace Mobility\Model;

class PoolStatus extends \ArrayObject
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
     * @var int
     */
    protected $batteryPowered;
    /**
     * 
     *
     * @var int
     */
    protected $connected;
    /**
     * 
     *
     * @var int
     */
    protected $connectionsLifetime;
    /**
     * 
     *
     * @var int
     */
    protected $connectionsPeak;
    /**
     * 
     *
     * @var int
     */
    protected $deviceLicensesAvailable;
    /**
     * 
     *
     * @var int
     */
    protected $deviceLicensesLimit;
    /**
     * 
     *
     * @var int
     */
    protected $disconnected;
    /**
     * 
     *
     * @var int
     */
    protected $lowBatteries;
    /**
     * 
     *
     * @var int
     */
    protected $nACdisconnected;
    /**
     * 
     *
     * @var int
     */
    protected $nACquarantined;
    /**
     * 
     *
     * @var int
     */
    protected $nACremediated;
    /**
     * 
     *
     * @var int
     */
    protected $nACwarned;
    /**
     * 
     *
     * @var int
     */
    protected $newDevices;
    /**
     * 
     *
     * @var int
     */
    protected $newUsers;
    /**
     * 
     *
     * @var int
     */
    protected $quarantinedDevices;
    /**
     * 
     *
     * @var int
     */
    protected $quarantinedUsers;
    /**
     * 
     *
     * @var int
     */
    protected $registered;
    /**
     * 
     *
     * @var int
     */
    protected $registeredUsers;
    /**
     * 
     *
     * @var int
     */
    protected $sessions;
    /**
     * 
     *
     * @var int
     */
    protected $unreachable;
    /**
     * 
     *
     * @return int
     */
    public function getBatteryPowered() : int
    {
        return $this->batteryPowered;
    }
    /**
     * 
     *
     * @param int $batteryPowered
     *
     * @return self
     */
    public function setBatteryPowered(int $batteryPowered) : self
    {
        $this->initialized['batteryPowered'] = true;
        $this->batteryPowered = $batteryPowered;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConnected() : int
    {
        return $this->connected;
    }
    /**
     * 
     *
     * @param int $connected
     *
     * @return self
     */
    public function setConnected(int $connected) : self
    {
        $this->initialized['connected'] = true;
        $this->connected = $connected;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConnectionsLifetime() : int
    {
        return $this->connectionsLifetime;
    }
    /**
     * 
     *
     * @param int $connectionsLifetime
     *
     * @return self
     */
    public function setConnectionsLifetime(int $connectionsLifetime) : self
    {
        $this->initialized['connectionsLifetime'] = true;
        $this->connectionsLifetime = $connectionsLifetime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConnectionsPeak() : int
    {
        return $this->connectionsPeak;
    }
    /**
     * 
     *
     * @param int $connectionsPeak
     *
     * @return self
     */
    public function setConnectionsPeak(int $connectionsPeak) : self
    {
        $this->initialized['connectionsPeak'] = true;
        $this->connectionsPeak = $connectionsPeak;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDeviceLicensesAvailable() : int
    {
        return $this->deviceLicensesAvailable;
    }
    /**
     * 
     *
     * @param int $deviceLicensesAvailable
     *
     * @return self
     */
    public function setDeviceLicensesAvailable(int $deviceLicensesAvailable) : self
    {
        $this->initialized['deviceLicensesAvailable'] = true;
        $this->deviceLicensesAvailable = $deviceLicensesAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDeviceLicensesLimit() : int
    {
        return $this->deviceLicensesLimit;
    }
    /**
     * 
     *
     * @param int $deviceLicensesLimit
     *
     * @return self
     */
    public function setDeviceLicensesLimit(int $deviceLicensesLimit) : self
    {
        $this->initialized['deviceLicensesLimit'] = true;
        $this->deviceLicensesLimit = $deviceLicensesLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDisconnected() : int
    {
        return $this->disconnected;
    }
    /**
     * 
     *
     * @param int $disconnected
     *
     * @return self
     */
    public function setDisconnected(int $disconnected) : self
    {
        $this->initialized['disconnected'] = true;
        $this->disconnected = $disconnected;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLowBatteries() : int
    {
        return $this->lowBatteries;
    }
    /**
     * 
     *
     * @param int $lowBatteries
     *
     * @return self
     */
    public function setLowBatteries(int $lowBatteries) : self
    {
        $this->initialized['lowBatteries'] = true;
        $this->lowBatteries = $lowBatteries;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNACdisconnected() : int
    {
        return $this->nACdisconnected;
    }
    /**
     * 
     *
     * @param int $nACdisconnected
     *
     * @return self
     */
    public function setNACdisconnected(int $nACdisconnected) : self
    {
        $this->initialized['nACdisconnected'] = true;
        $this->nACdisconnected = $nACdisconnected;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNACquarantined() : int
    {
        return $this->nACquarantined;
    }
    /**
     * 
     *
     * @param int $nACquarantined
     *
     * @return self
     */
    public function setNACquarantined(int $nACquarantined) : self
    {
        $this->initialized['nACquarantined'] = true;
        $this->nACquarantined = $nACquarantined;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNACremediated() : int
    {
        return $this->nACremediated;
    }
    /**
     * 
     *
     * @param int $nACremediated
     *
     * @return self
     */
    public function setNACremediated(int $nACremediated) : self
    {
        $this->initialized['nACremediated'] = true;
        $this->nACremediated = $nACremediated;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNACwarned() : int
    {
        return $this->nACwarned;
    }
    /**
     * 
     *
     * @param int $nACwarned
     *
     * @return self
     */
    public function setNACwarned(int $nACwarned) : self
    {
        $this->initialized['nACwarned'] = true;
        $this->nACwarned = $nACwarned;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNewDevices() : int
    {
        return $this->newDevices;
    }
    /**
     * 
     *
     * @param int $newDevices
     *
     * @return self
     */
    public function setNewDevices(int $newDevices) : self
    {
        $this->initialized['newDevices'] = true;
        $this->newDevices = $newDevices;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNewUsers() : int
    {
        return $this->newUsers;
    }
    /**
     * 
     *
     * @param int $newUsers
     *
     * @return self
     */
    public function setNewUsers(int $newUsers) : self
    {
        $this->initialized['newUsers'] = true;
        $this->newUsers = $newUsers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuarantinedDevices() : int
    {
        return $this->quarantinedDevices;
    }
    /**
     * 
     *
     * @param int $quarantinedDevices
     *
     * @return self
     */
    public function setQuarantinedDevices(int $quarantinedDevices) : self
    {
        $this->initialized['quarantinedDevices'] = true;
        $this->quarantinedDevices = $quarantinedDevices;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuarantinedUsers() : int
    {
        return $this->quarantinedUsers;
    }
    /**
     * 
     *
     * @param int $quarantinedUsers
     *
     * @return self
     */
    public function setQuarantinedUsers(int $quarantinedUsers) : self
    {
        $this->initialized['quarantinedUsers'] = true;
        $this->quarantinedUsers = $quarantinedUsers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRegistered() : int
    {
        return $this->registered;
    }
    /**
     * 
     *
     * @param int $registered
     *
     * @return self
     */
    public function setRegistered(int $registered) : self
    {
        $this->initialized['registered'] = true;
        $this->registered = $registered;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRegisteredUsers() : int
    {
        return $this->registeredUsers;
    }
    /**
     * 
     *
     * @param int $registeredUsers
     *
     * @return self
     */
    public function setRegisteredUsers(int $registeredUsers) : self
    {
        $this->initialized['registeredUsers'] = true;
        $this->registeredUsers = $registeredUsers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSessions() : int
    {
        return $this->sessions;
    }
    /**
     * 
     *
     * @param int $sessions
     *
     * @return self
     */
    public function setSessions(int $sessions) : self
    {
        $this->initialized['sessions'] = true;
        $this->sessions = $sessions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnreachable() : int
    {
        return $this->unreachable;
    }
    /**
     * 
     *
     * @param int $unreachable
     *
     * @return self
     */
    public function setUnreachable(int $unreachable) : self
    {
        $this->initialized['unreachable'] = true;
        $this->unreachable = $unreachable;
        return $this;
    }
}