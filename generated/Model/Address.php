<?php

namespace Mobility\Model;

class Address
{
    /**
     * 
     *
     * @var string
     */
    protected $ip;
    /**
     * 
     *
     * @var int
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
        $this->ip = $ip;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * 
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port) : self
    {
        $this->port = $port;
        return $this;
    }
}