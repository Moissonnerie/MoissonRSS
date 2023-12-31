<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Config\FrameworkConfig;

return static function (ContainerConfigurator $container, FrameworkConfig $framework): void {
    $framework
        ->cache()
        // Unique name of your app: used to compute stable namespaces for cache keys.
        // ->prefixSeed('your_vendor_name/app_name')

        // The "app" cache stores to the filesystem by default.
        // The data in this cache should persist between deploys.
        // Other options include:

        // Redis
        // ->app('cache.adapter.redis')
        // ->defaultRedisProvider('redis://localhost')

        // APCu (not recommended with heavy random-write workloads as memory fragmentation can cause perf issues)
        // ->app('cache.adapter.apcu')
    ;
};
