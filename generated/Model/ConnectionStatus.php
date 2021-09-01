<?php

namespace Mobility\Model;

class ConnectionStatus
{
    /**
     * 
     *
     * @var ConnectionState[]
     */
    protected $connectionState;
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
     * @var \DateTime
     */
    protected $firstTimestamp;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastUser;
    /**
     * 
     *
     * @return ConnectionState[]
     */
    public function getConnectionState() : array
    {
        return $this->connectionState;
    }
    /**
     * 
     *
     * @param ConnectionState[] $connectionState
     *
     * @return self
     */
    public function setConnectionState(array $connectionState) : self
    {
        $this->connectionState = $connectionState;
        return $this;
    }
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
     * @return \DateTime
     */
    public function getFirstTimestamp() : \DateTime
    {
        return $this->firstTimestamp;
    }
    /**
     * 
     *
     * @param \DateTime $firstTimestamp
     *
     * @return self
     */
    public function setFirstTimestamp(\DateTime $firstTimestamp) : self
    {
        $this->firstTimestamp = $firstTimestamp;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastUser() : ?string
    {
        return $this->lastUser;
    }
    /**
     * 
     *
     * @param string|null $lastUser
     *
     * @return self
     */
    public function setLastUser(?string $lastUser) : self
    {
        $this->lastUser = $lastUser;
        return $this;
    }
}