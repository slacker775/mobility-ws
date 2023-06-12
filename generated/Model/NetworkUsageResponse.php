<?php

namespace Mobility\Model;

class NetworkUsageResponse extends \ArrayObject
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
     * @var NetworkUsage[]
     */
    protected $networkUsage;
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
     * @return NetworkUsage[]
     */
    public function getNetworkUsage() : array
    {
        return $this->networkUsage;
    }
    /**
     * 
     *
     * @param NetworkUsage[] $networkUsage
     *
     * @return self
     */
    public function setNetworkUsage(array $networkUsage) : self
    {
        $this->initialized['networkUsage'] = true;
        $this->networkUsage = $networkUsage;
        return $this;
    }
}