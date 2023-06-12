<?php

namespace Mobility\Endpoint;

class CreateDeviceGroup extends \Mobility\Runtime\Client\BaseEndpoint implements \Mobility\Runtime\Client\Endpoint
{
    /**
     * Create a new Device Group
     *
     * @param null|\Mobility\Model\DeviceGroup $requestBody 
     */
    public function __construct(?\Mobility\Model\DeviceGroup $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Mobility\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/WebControl/deviceGroup';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Mobility\Model\DeviceGroup) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
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
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}