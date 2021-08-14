<?php

namespace Mobility\Model;

class DeviceResponse
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
     * @var int
     */
    protected $currentPage;
    /**
     * 
     *
     * @var int
     */
    protected $totalPages;
    /**
     * 
     *
     * @var Device[]
     */
    protected $device;
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
     * @return int
     */
    public function getCurrentPage() : int
    {
        return $this->currentPage;
    }
    /**
     * 
     *
     * @param int $currentPage
     *
     * @return self
     */
    public function setCurrentPage(int $currentPage) : self
    {
        $this->currentPage = $currentPage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalPages() : int
    {
        return $this->totalPages;
    }
    /**
     * 
     *
     * @param int $totalPages
     *
     * @return self
     */
    public function setTotalPages(int $totalPages) : self
    {
        $this->totalPages = $totalPages;
        return $this;
    }
    /**
     * 
     *
     * @return Device[]
     */
    public function getDevice() : array
    {
        return $this->device;
    }
    /**
     * 
     *
     * @param Device[] $device
     *
     * @return self
     */
    public function setDevice(array $device) : self
    {
        $this->device = $device;
        return $this;
    }
}