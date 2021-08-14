<?php

namespace Mobility\Model;

class UserResponse
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
     * @var User[]
     */
    protected $user;
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
     * @return User[]
     */
    public function getUser() : array
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param User[] $user
     *
     * @return self
     */
    public function setUser(array $user) : self
    {
        $this->user = $user;
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