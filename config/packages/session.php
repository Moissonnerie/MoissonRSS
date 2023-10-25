<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Config\Framework\SessionConfig;
use Symfony\Config\FrameworkConfig;

return static function (ContainerConfigurator $container, FrameworkConfig $framework): void {
    // Enables session support. Note that the session will ONLY be started if you read or write from it.
    // Remove or comment this section to explicitly disable session support.
    $session = $framework->session();
    if (!$session instanceof SessionConfig) {
        throw new \LogicException(\sprintf('"%s" is expected, "%s" given.', SessionConfig::class, $session::class));
    }
    $session
        ->handlerId(null)
        ->cookieSecure('auto')
        ->cookieSamesite('lax')
        ->storageFactoryId('session.storage.factory.native')
    ;

    if ('test' === $container->env()) {
        $session->storageFactoryId('session.storage.factory.mock_file');
    }
};
