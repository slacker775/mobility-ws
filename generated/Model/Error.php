<?php

namespace Mobility\Model;

class Error extends \ArrayObject
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
     * @var float
     */
    protected $status;
    /**
     * 
     *
     * @var float
     */
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @return float
     */
    public function getStatus() : float
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param float $status
     *
     * @return self
     */
    public function setStatus(float $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCode() : float
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param float $code
     *
     * @return self
     */
    public function setCode(float $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}