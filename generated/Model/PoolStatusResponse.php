<?php

namespace Mobility\Model;

class PoolStatusResponse extends \ArrayObject
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
    protected $type;
    /**
     * 
     *
     * @var PoolStatus
     */
    protected $poolStatus;
    /**
     * 
     *
     * @var ServerStatus[]
     */
    protected $serverStatuses;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return PoolStatus
     */
    public function getPoolStatus() : PoolStatus
    {
        return $this->poolStatus;
    }
    /**
     * 
     *
     * @param PoolStatus $poolStatus
     *
     * @return self
     */
    public function setPoolStatus(PoolStatus $poolStatus) : self
    {
        $this->initialized['poolStatus'] = true;
        $this->poolStatus = $poolStatus;
        return $this;
    }
    /**
     * 
     *
     * @return ServerStatus[]
     */
    public function getServerStatuses() : array
    {
        return $this->serverStatuses;
    }
    /**
     * 
     *
     * @param ServerStatus[] $serverStatuses
     *
     * @return self
     */
    public function setServerStatuses(array $serverStatuses) : self
    {
        $this->initialized['serverStatuses'] = true;
        $this->serverStatuses = $serverStatuses;
        return $this;
    }
}