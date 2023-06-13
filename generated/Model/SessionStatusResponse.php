<?php

namespace Mobility\Model;

class SessionStatusResponse extends \ArrayObject
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
     * @var Session[]
     */
    protected $sessionStatuses;
    /**
     * 
     *
     * @return Session[]
     */
    public function getSessionStatuses() : array
    {
        return $this->sessionStatuses;
    }
    /**
     * 
     *
     * @param Session[] $sessionStatuses
     *
     * @return self
     */
    public function setSessionStatuses(array $sessionStatuses) : self
    {
        $this->initialized['sessionStatuses'] = true;
        $this->sessionStatuses = $sessionStatuses;
        return $this;
    }
}