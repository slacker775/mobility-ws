<?php

namespace Mobility\Model;

class NetworkUsage extends \ArrayObject
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
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var float
     */
    protected $usage;
    /**
     * 
     *
     * @var string
     */
    protected $usedBy;
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
     * @return float
     */
    public function getUsage() : float
    {
        return $this->usage;
    }
    /**
     * 
     *
     * @param float $usage
     *
     * @return self
     */
    public function setUsage(float $usage) : self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsedBy() : string
    {
        return $this->usedBy;
    }
    /**
     * 
     *
     * @param string $usedBy
     *
     * @return self
     */
    public function setUsedBy(string $usedBy) : self
    {
        $this->initialized['usedBy'] = true;
        $this->usedBy = $usedBy;
        return $this;
    }
}