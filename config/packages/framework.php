<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

use function Symfony\Component\DependencyInjection\Loader\Configurator\env;

use Symfony\Config\FrameworkConfig;

return static function (ContainerConfigurator $container, FrameworkConfig $framework): void {
    $framework->secret(env('APP_SECRET'));
    $framework->httpMethodOverride(false);
    $framework->handleAllThrowables(true);

    $framework->phpErrors()->log();

    if ('test' === $container->env()) {
        $framework->test(true);
    }
};
