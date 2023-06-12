<?php

namespace Mobility\Model;

class HostGroup extends \ArrayObject
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
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $lastModified;
    /**
     * 
     *
     * @var string[]
     */
    protected $hosts;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
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
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getLastModified() : \DateTime
    {
        return $this->lastModified;
    }
    /**
     * 
     *
     * @param \DateTime $lastModified
     *
     * @return self
     */
    public function setLastModified(\DateTime $lastModified) : self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getHosts() : array
    {
        return $this->hosts;
    }
    /**
     * 
     *
     * @param string[] $hosts
     *
     * @return self
     */
    public function setHosts(array $hosts) : self
    {
        $this->initialized['hosts'] = true;
        $this->hosts = $hosts;
        return $this;
    }
}