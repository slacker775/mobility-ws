<?php

declare(strict_types=1);

namespace Mobility\Factory;

use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\LoggerPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Message\Formatter\FullHttpMessageFormatter;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Mobility\Authentication\BasicAuthAuthentication;
use Mobility\Client;
use Psr\Log\LoggerInterface;

class ClientFactory
{

    public static function getDebugLogger(LoggerInterface $logger,
        int $maxBodyLength = 1000
    ): Plugin {
        return new LoggerPlugin(
            $logger, new FullHttpMessageFormatter($maxBodyLength)
        );
    }

    public static function create($httpClient, string $baseUrl, string $user,
        string $password,
        array $additionalPlugins = []
    ): Client {
        $plugins = [];
        $plugins[] = new Plugin\BaseUriPlugin(
            Psr17FactoryDiscovery::findUriFactory()->createUri(
                $baseUrl
            )
        );
        $plugins[] = new AuthenticationRegistry(
            [new BasicAuthAuthentication($user, $password)]
        );
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }

        $httpClient = new PluginClient($httpClient, $plugins);

        return Client::create($httpClient);
    }

}
