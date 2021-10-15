<?php

namespace Mobility\Model;

class PoolStatusResponse
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $poolStatus;
    /**
     * 
     *
     * @var ServerStatus[]
     */
    protected $serverStatus;
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
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPoolStatus()
    {
        return $this->poolStatus;
    }
    /**
     * 
     *
     * @param mixed $poolStatus
     *
     * @return self
     */
    public function setPoolStatus($poolStatus) : self
    {
        $this->poolStatus = $poolStatus;
        return $this;
    }
    /**
     * 
     *
     * @return ServerStatus[]
     */
    public function getServerStatus() : array
    {
        return $this->serverStatus;
    }
    /**
     * 
     *
     * @param ServerStatus[] $serverStatus
     *
     * @return self
     */
    public function setServerStatus(array $serverStatus) : self
    {
        $this->serverStatus = $serverStatus;
        return $this;
    }
}