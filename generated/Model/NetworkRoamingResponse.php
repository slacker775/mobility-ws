<?php

namespace Mobility\Model;

class NetworkRoamingResponse extends \ArrayObject
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
     * @var NetworkRoaming[]
     */
    protected $networkRoaming;
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
     * @return NetworkRoaming[]
     */
    public function getNetworkRoaming() : array
    {
        return $this->networkRoaming;
    }
    /**
     * 
     *
     * @param NetworkRoaming[] $networkRoaming
     *
     * @return self
     */
    public function setNetworkRoaming(array $networkRoaming) : self
    {
        $this->initialized['networkRoaming'] = true;
        $this->networkRoaming = $networkRoaming;
        return $this;
    }
}