<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Config\Framework\RouterConfig;
use Symfony\Config\FrameworkConfig;

return static function (ContainerConfigurator $container, FrameworkConfig $framework): void {
    $router = $framework->router();
    if (!$router instanceof RouterConfig) {
        throw new \LogicException(\sprintf('"%s" is expected, "%s" given.', RouterConfig::class, $router::class));
    }
    $router
        ->utf8(true)

        // Configure how to generate URLs in non-HTTP contexts, such as CLI commands.
        // See https://symfony.com/doc/current/routing.html#generating-urls-in-commands
        // ->defaultUri('http://localhost')
    ;

    if ('prod' === $container->env()) {
        $router->strictRequirements(null);
    }
};
