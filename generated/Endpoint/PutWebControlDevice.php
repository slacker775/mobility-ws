<?php

namespace Mobility\Endpoint;

class PutWebControlDevice extends \Mobility\Runtime\Client\BaseEndpoint implements \Mobility\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|\Mobility\Model\ControlDevice $requestBody 
     */
    public function __construct(?\Mobility\Model\ControlDevice $requestBody = null)
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
        return '/WebControl/device';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Mobility\Model\ControlDevice) {
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
     *
     * @return null|\Mobility\Model\ControlDevice
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Mobility\\Model\\ControlDevice', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}