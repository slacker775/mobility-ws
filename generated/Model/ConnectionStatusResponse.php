<?php

namespace Mobility\Model;

class ConnectionStatusResponse
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
     * @var ConnectionStatus[]
     */
    protected $connectionStatus;
    /**
     * 
     *
     * @var string
     */
    protected $errorMessage;
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
     * @return ConnectionStatus[]
     */
    public function getConnectionStatus() : array
    {
        return $this->connectionStatus;
    }
    /**
     * 
     *
     * @param ConnectionStatus[] $connectionStatus
     *
     * @return self
     */
    public function setConnectionStatus(array $connectionStatus) : self
    {
        $this->connectionStatus = $connectionStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getErrorMessage() : string
    {
        return $this->errorMessage;
    }
    /**
     * 
     *
     * @param string $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(string $errorMessage) : self
    {
        $this->errorMessage = $errorMessage;
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
}