<?php

namespace Mobility\Model;

class ControlUser extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $domain;
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @var string
     */
    protected $userGroup;
    /**
     * 
     *
     * @var string
     */
    protected $firstLogon;
    /**
     * 
     *
     * @var string
     */
    protected $lastLogon;
    /**
     * 
     *
     * @var string
     */
    protected $lastDeviceName;
    /**
     * 
     *
     * @var bool
     */
    protected $quarantined;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(string $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserGroup() : string
    {
        return $this->userGroup;
    }
    /**
     * 
     *
     * @param string $userGroup
     *
     * @return self
     */
    public function setUserGroup(string $userGroup) : self
    {
        $this->initialized['userGroup'] = true;
        $this->userGroup = $userGroup;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstLogon() : string
    {
        return $this->firstLogon;
    }
    /**
     * 
     *
     * @param string $firstLogon
     *
     * @return self
     */
    public function setFirstLogon(string $firstLogon) : self
    {
        $this->initialized['firstLogon'] = true;
        $this->firstLogon = $firstLogon;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastLogon() : string
    {
        return $this->lastLogon;
    }
    /**
     * 
     *
     * @param string $lastLogon
     *
     * @return self
     */
    public function setLastLogon(string $lastLogon) : self
    {
        $this->initialized['lastLogon'] = true;
        $this->lastLogon = $lastLogon;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastDeviceName() : string
    {
        return $this->lastDeviceName;
    }
    /**
     * 
     *
     * @param string $lastDeviceName
     *
     * @return self
     */
    public function setLastDeviceName(string $lastDeviceName) : self
    {
        $this->initialized['lastDeviceName'] = true;
        $this->lastDeviceName = $lastDeviceName;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getQuarantined() : bool
    {
        return $this->quarantined;
    }
    /**
     * 
     *
     * @param bool $quarantined
     *
     * @return self
     */
    public function setQuarantined(bool $quarantined) : self
    {
        $this->initialized['quarantined'] = true;
        $this->quarantined = $quarantined;
        return $this;
    }
}