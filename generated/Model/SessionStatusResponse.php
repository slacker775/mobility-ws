<?php

namespace Mobility\Model;

class SessionStatusResponse
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var Session[]
     */
    protected $session;
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
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return Session[]
     */
    public function getSession() : array
    {
        return $this->session;
    }
    /**
     * 
     *
     * @param Session[] $session
     *
     * @return self
     */
    public function setSession(array $session) : self
    {
        $this->session = $session;
        return $this;
    }
}