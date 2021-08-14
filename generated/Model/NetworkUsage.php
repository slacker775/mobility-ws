<?php

namespace Mobility\Model;

class NetworkUsage
{
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
        $this->usedBy = $usedBy;
        return $this;
    }
}