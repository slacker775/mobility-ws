<?php

namespace Mobility\Exception;

class DeleteUserByNameNotFoundException extends NotFoundException
{
    /**
     * @var \Mobility\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Mobility\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('The specified resource was not found');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError() : \Mobility\Model\Error
    {
        return $this->error;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}