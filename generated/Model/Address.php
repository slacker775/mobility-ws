<?php

namespace Mobility\Model;

class Address extends \ArrayObject
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
    protected $ip;
    /**
     * 
     *
     * @var string
     */
    protected $port;
    /**
     * 
     *
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * 
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip) : self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPort() : string
    {
        return $this->port;
    }
    /**
     * 
     *
     * @param string $port
     *
     * @return self
     */
    public function setPort(string $port) : self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
}