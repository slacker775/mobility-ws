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
     *     @var string $name 
     *     @var string $group 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\ControlDeviceResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDevices(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetDevices($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\Mobility\Model\ControlDevice $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\ControlDevice|\Psr\Http\Message\ResponseInterface
     */
    public function putWebControlDevice(?\Mobility\Model\ControlDevice $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\PutWebControlDevice($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Mobility\Exception\DeleteDeviceNotFoundException
     *
     * @return null|\Mobility\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDevice(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\DeleteDevice($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\ControlDevice|\Psr\Http\Message\ResponseInterface
     */
    public function getWebControlDeviceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetWebControlDeviceById($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $action 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putWebControlDeviceByIdByAction(string $id, string $action, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\PutWebControlDeviceByIdByAction($id, $action), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\DeviceGroupResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDeviceGroups(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetDeviceGroups(), $fetch);
    }
    /**
     * Create a new Device Group
     *
     * @param null|\Mobility\Model\DeviceGroup $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createDeviceGroup(?\Mobility\Model\DeviceGroup $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\CreateDeviceGroup($requestBody), $fetch);
    }
    /**
     * Update a Device Group
     *
     * @param null|\Mobility\Model\DeviceGroup $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateDeviceGroup(?\Mobility\Model\DeviceGroup $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\UpdateDeviceGroup($requestBody), $fetch);
    }
    /**
     * Delete a Device Group
     *
     * @param string $name 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Mobility\Exception\DeleteDeviceGroupNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDeviceGroup(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\DeleteDeviceGroup($name), $fetch);
    }
    /**
     * Get a Device Group
     *
     * @param string $name 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Mobility\Exception\GetDeviceGroupNotFoundException
     *
     * @return null|\Mobility\Model\DeviceGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getDeviceGroup(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetDeviceGroup($name), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\HostGroup[]|\Psr\Http\Message\ResponseInterface
     */
    public function getHostGroups(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetHostGroups(), $fetch);
    }
    /**
     * 
     *
     * @param null|\Mobility\Model\HostGroup $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createHostGroup(?\Mobility\Model\HostGroup $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\CreateHostGroup($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\Mobility\Model\HostGroup $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Mobility\Exception\UpdateHostGroupNotFoundException
     *
     * @return null|\Mobility\Model\HostGroup[]|\Psr\Http\Message\ResponseInterface
     */
    public function updateHostGroup(?\Mobility\Model\HostGroup $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\UpdateHostGroup($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHostGroup(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\DeleteHostGroup($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getHostGroup(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetHostGroup($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateHostGroupById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\UpdateHostGroupById($id), $fetch);
    }
    /**
     * Get all users
     *
     * @param array $queryParameters {
     *     @var string $name 
     *     @var string $group 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\ControlUserResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getUsers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetUsers($queryParameters), $fetch);
    }
    /**
     * Create a user
     *
     * @param null|\Mobility\Model\ControlUser $requestBody 
     * @param array $queryParameters {
     *     @var string $name 
     *     @var string $group 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\ControlUser|\Psr\Http\Message\ResponseInterface
     */
    public function createUser(?\Mobility\Model\ControlUser $requestBody = null, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\CreateUser($requestBody, $queryParameters), $fetch);
    }
    /**
     * Update a user
     *
     * @param null|\Mobility\Model\ControlUser $requestBody 
     * @param array $queryParameters {
     *     @var string $name 
     *     @var string $group 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Mobility\Model\ControlUser|\Psr\Http\Message\ResponseInterface
     */
    public function updateUser(?\Mobility\Model\ControlUser $requestBody = null, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\UpdateUser($requestBody, $queryParameters), $fetch);
    }
    /**
     * Delete a user with domain
     *
     * @param string $name 
     * @param string $domain 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Mobility\Exception\DeleteUserByDomainNotFoundException
     *
     * @return null|\Mobility\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserByDomain(string $name, string $domain, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\DeleteUserByDomain($name, $domain), $fetch);
    }
    /**
     * Get user by name and domain
     *
     * @param string $name 
     * @param string $domain 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Mobility\Exception\GetUserByDomainNotFoundException
     *
     * @return null|\Mobility\Model\ControlUser|\Psr\Http\Message\ResponseInterface
     */
    public function getUserByDomain(string $name, string $domain, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetUserByDomain($name, $domain), $fetch);
    }
    /**
     * Delete a user by name
     *
     * @param string $name 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Mobility\Exception\DeleteUserByNameNotFoundException
     *
     * @return null|\Mobility\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserByName(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\DeleteUserByName($name), $fetch);
    }
    /**
     * Get user by name
     *
     * @param string $name 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Mobility\Exception\GetUserByNameNotFoundException
     *
     * @return null|\Mobility\Model\ControlUser|\Psr\Http\Message\ResponseInterface
     */
    public function getUserByName(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Mobility\Endpoint\GetUserByName($name), $fetch);
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
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
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
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Mobility\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}