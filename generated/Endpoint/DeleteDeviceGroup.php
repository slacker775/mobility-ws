<?php

namespace Mobility\Endpoint;

class DeleteDeviceGroup extends \Mobility\Runtime\Client\BaseEndpoint implements \Mobility\Runtime\Client\Endpoint
{
    protected $name;
    /**
     * Delete a Device Group
     *
     * @param string $name 
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    use \Mobility\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{name}'), array($this->name), '/WebControl/deviceGroup/{name}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Mobility\Exception\DeleteDeviceGroupNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Mobility\Exception\DeleteDeviceGroupNotFoundException($serializer->deserialize($body, 'Mobility\\Model\\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}