<?php

namespace Mobility\Model;

class ServerStatus
{
    /**
     * 
     *
     * @var Address[]
     */
    protected $address;
    /**
     * 
     *
     * @var int
     */
    protected $connectionPeak;
    /**
     * 
     *
     * @var int
     */
    protected $connections;
    /**
     * 
     *
     * @var string
     */
    protected $cpu;
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
    protected $network;
    /**
     * 
     *
     * @var string
     */
    protected $nonPaged;
    /**
     * 
     *
     * @var string
     */
    protected $paged;
    /**
     * 
     *
     * @var string
     */
    protected $pid;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $uptimeMinutes;
    /**
     * 
     *
     * @var string
     */
    protected $utilization;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @return Address[]
     */
    public function getAddress() : array
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param Address[] $address
     *
     * @return self
     */
    public function setAddress(array $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConnectionPeak() : int
    {
        return $this->connectionPeak;
    }
    /**
     * 
     *
     * @param int $connectionPeak
     *
     * @return self
     */
    public function setConnectionPeak(int $connectionPeak) : self
    {
        $this->connectionPeak = $connectionPeak;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConnections() : int
    {
        return $this->connections;
    }
    /**
     * 
     *
     * @param int $connections
     *
     * @return self
     */
    public function setConnections(int $connections) : self
    {
        $this->connections = $connections;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCpu() : string
    {
        return $this->cpu;
    }
    /**
     * 
     *
     * @param string $cpu
     *
     * @return self
     */
    public function setCpu(string $cpu) : self
    {
        $this->cpu = $cpu;
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
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNetwork() : string
    {
        return $this->network;
    }
    /**
     * 
     *
     * @param string $network
     *
     * @return self
     */
    public function setNetwork(string $network) : self
    {
        $this->network = $network;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNonPaged() : string
    {
        return $this->nonPaged;
    }
    /**
     * 
     *
     * @param string $nonPaged
     *
     * @return self
     */
    public function setNonPaged(string $nonPaged) : self
    {
        $this->nonPaged = $nonPaged;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaged() : string
    {
        return $this->paged;
    }
    /**
     * 
     *
     * @param string $paged
     *
     * @return self
     */
    public function setPaged(string $paged) : self
    {
        $this->paged = $paged;
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
        $this->pid = $pid;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUptimeMinutes() : string
    {
        return $this->uptimeMinutes;
    }
    /**
     * 
     *
     * @param string $uptimeMinutes
     *
     * @return self
     */
    public function setUptimeMinutes(string $uptimeMinutes) : self
    {
        $this->uptimeMinutes = $uptimeMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUtilization() : string
    {
        return $this->utilization;
    }
    /**
     * 
     *
     * @param string $utilization
     *
     * @return self
     */
    public function setUtilization(string $utilization) : self
    {
        $this->utilization = $utilization;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
}