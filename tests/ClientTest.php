<?php

namespace Mobility\Tests;

use Mobility\Factory\ClientFactory;
use Mobility\Model\ConnectionStatusResponse;
use Mobility\Model\DeviceResponse;
use Mobility\Model\NetworkRoamingResponse;
use Mobility\Model\NetworkUsageResponse;
use Mobility\Model\PoolStatusResponse;
use Mobility\Model\Session;
use Mobility\Model\SessionStatusResponse;
use Mobility\Model\UserResponse;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Psr18Client;

class ClientTest extends TestCase
{

    public function testGetPoolStatus()
    {
        $apiClient = $this->generateClient();
        $result = $apiClient->getPoolStatus();
        $this->assertInstanceOf(PoolStatusResponse::class, $result);
        $this->assertGreaterThan(0, $result->getPoolStatus()->getRegistered());
        $this->assertNotEmpty($result->getServerStatus());
    }

    public function generateClient()
    {
        $baseUrl = $_SERVER['MOBILITY_API_BASEURL'];
        $username = $_SERVER['MOBILITY_API_USER'];
        $password = $_SERVER['MOBILITY_API_PASS'];
        $httpClient = new Psr18Client(
            HttpClient::create(
                [
                    'verify_host' => 0,
                    'verify_peer' => 0,
                ]
            )
        );
        $apiClient = ClientFactory::create(
            $httpClient,
            $baseUrl, $username, $password
        );

        return $apiClient;
    }

    public function testGetDevice()
    {
        $apiClient = $this->generateClient();
        $result = $apiClient->getDevice(['devicesPerPage' => 1]);
        $this->assertInstanceOf(DeviceResponse::class, $result);
        $this->assertEquals(1, $result->getCurrentPage());
        $this->assertNotEmpty($result->getDevice());
    }

    public function testGetSessionStatus()
    {
        $apiClient = $this->generateClient();
        $result = $apiClient->getSessionStatus([
            'filterBy' => 'os',
            'filterValue' => 'Win10',
        ]);
        $this->assertInstanceOf(SessionStatusResponse::class, $result);
        $this->assertNotEmpty($result->getSession());

        $session = ($result->getSession())[0];
        $this->assertInstanceOf(Session::class, $session);
        $this->assertEquals('Windows', $session->getPlat());
        $this->assertStringContainsString('Windows', $session->getOs());
        $this->assertNotEmpty($session->getMobilityVersion());
    }

    public function testGetUser()
    {
        $apiClient = $this->generateClient();
        $result = $apiClient->getUser(['usersPerPage' => 1]);
        $this->assertInstanceOf(UserResponse::class, $result);
        $this->assertEquals(1, $result->getCurrentPage());
        $this->assertNotEmpty($result->getUser());
    }

    public function testGetNetworkRoaming()
    {
        $apiClient = $this->generateClient();
        $result = $apiClient->getNetworkRoaming();
        $this->assertInstanceOf(NetworkRoamingResponse::class, $result);
        $this->assertNotEmpty($result->getNetworkRoaming());
    }

    public function testGetConnectionStatus()
    {
        $apiClient = $this->generateClient();
        $result = $apiClient->getConnectionStatus(['devicesPerPage' => 1]);
        $this->assertInstanceOf(ConnectionStatusResponse::class, $result);
        $this->assertEquals(1, $result->getCurrentPage());
        $this->assertNotEmpty($result->getConnectionStatus());
    }

    public function testGetNetworkUsage()
    {
        $apiClient = $this->generateClient();
        $result = $apiClient->getNetworkUsage();
        $this->assertInstanceOf(NetworkUsageResponse::class, $result);
        $this->assertNotEmpty($result->getNetworkUsage());
    }

}
