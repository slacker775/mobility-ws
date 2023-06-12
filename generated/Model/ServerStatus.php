<?php

namespace Mobility\Model;

class ServerStatus extends \ArrayObject
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
     * @var Address[]
     */
    protected $addresses;
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
     * @var int
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
    public function getAddresses() : array
    {
        return $this->addresses;
    }
    /**
     * 
     *
     * @param Address[] $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses) : self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;
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
        $this->initialized['connectionPeak'] = true;
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
        $this->initialized['connections'] = true;
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
        $this->initialized['cpu'] = true;
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
        $this->initialized['name'] = true;
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
        $this->initialized['network'] = true;
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
        $this->initialized['nonPaged'] = true;
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
        $this->initialized['paged'] = true;
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
        $this->initialized['pid'] = true;
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
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUptimeMinutes() : int
    {
        return $this->uptimeMinutes;
    }
    /**
     * 
     *
     * @param int $uptimeMinutes
     *
     * @return self
     */
    public function setUptimeMinutes(int $uptimeMinutes) : self
    {
        $this->initialized['uptimeMinutes'] = true;
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
        $this->initialized['utilization'] = true;
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
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}