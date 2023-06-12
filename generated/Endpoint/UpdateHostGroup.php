<?php

namespace Mobility\Endpoint;

class UpdateHostGroup extends \Mobility\Runtime\Client\BaseEndpoint implements \Mobility\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|\Mobility\Model\HostGroup $requestBody 
     */
    public function __construct(?\Mobility\Model\HostGroup $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Mobility\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/WebControl/hostGroup';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Mobility\Model\HostGroup) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Mobility\Exception\UpdateHostGroupNotFoundException
     *
     * @return null|\Mobility\Model\HostGroup[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Mobility\\Model\\HostGroup[]', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Mobility\Exception\UpdateHostGroupNotFoundException($serializer->deserialize($body, 'Mobility\\Model\\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}