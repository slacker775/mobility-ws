<?php

namespace Mobility\Model;

class PoolStatus
{
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
        $this->connectionsPeak = $connectionsPeak;
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
        $this->quarantinedDevices = $quarantinedDevices;
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
        $this->unreachable = $unreachable;
        return $this;
    }
}