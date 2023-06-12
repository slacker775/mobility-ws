<?php

namespace Mobility\Model;

class ConnectionState extends \ArrayObject
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
    protected $pop;
    /**
     * 
     *
     * @var string|null
     */
    protected $serverMachineName;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string|null
     */
    protected $userName;
    /**
     * 
     *
     * @var string
     */
    protected $vip;
    /**
     * 
     *
     * @return string
     */
    public function getPop() : string
    {
        return $this->pop;
    }
    /**
     * 
     *
     * @param string $pop
     *
     * @return self
     */
    public function setPop(string $pop) : self
    {
        $this->initialized['pop'] = true;
        $this->pop = $pop;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getServerMachineName() : ?string
    {
        return $this->serverMachineName;
    }
    /**
     * 
     *
     * @param string|null $serverMachineName
     *
     * @return self
     */
    public function setServerMachineName(?string $serverMachineName) : self
    {
        $this->initialized['serverMachineName'] = true;
        $this->serverMachineName = $serverMachineName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserName() : ?string
    {
        return $this->userName;
    }
    /**
     * 
     *
     * @param string|null $userName
     *
     * @return self
     */
    public function setUserName(?string $userName) : self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVip() : string
    {
        return $this->vip;
    }
    /**
     * 
     *
     * @param string $vip
     *
     * @return self
     */
    public function setVip(string $vip) : self
    {
        $this->initialized['vip'] = true;
        $this->vip = $vip;
        return $this;
    }
}