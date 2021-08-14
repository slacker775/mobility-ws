<?php

namespace Mobility;

class Client extends \Mobility\Runtime\Client\Client
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $deviceId 
     *     @var string $deviceName 
     *     @var string $group 
     *     @var string $startDate 
     *     @var string $endDate 
     *     @var int $page 
     *     @var int $devicesPerPage 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\ConnectionStatusResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getConnectionStatus(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetConnectionStatus($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     *     @var string $group 
     *     @var string $user 
     *     @var string $state 
     *     @var int $page 
     *     @var int $devicesPerPage 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\DeviceResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDevice(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetDevice($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $deviceGroup 
     *     @var string $userGroup 
     *     @var string $startDate 
     *     @var string $endDate 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\NetworkRoamingResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkRoaming(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetNetworkRoaming($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $user 
     *     @var string $userGroup 
     *     @var string $startDate 
     *     @var string $endDate 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\NetworkUsageResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkUsage(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetNetworkUsage($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $lowBatteryThreshold The threshold (in terms of percentage) at which a device is considered to be low on batteries. The default is 10.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\PoolStatusResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getPoolStatus(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetPoolStatus($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $serverName 
     *     @var string $filterBy 
     *     @var string $filterValue 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\SessionStatusResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSessionStatus(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetSessionStatus($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     *     @var string $group 
     *     @var bool $quarantined 
     *     @var int $page 
     *     @var int $usersPerPage 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\UserResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetUser($queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('/{server}');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Mobility\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}