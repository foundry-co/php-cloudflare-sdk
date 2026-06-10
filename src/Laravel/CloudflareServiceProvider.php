<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Laravel;

use FoundryCo\Cloudflare\CloudflareClient;
use Illuminate\Support\ServiceProvider;

class CloudflareServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/cloudflare.php', 'cloudflare');

        $this->app->singleton(CloudflareClient::class, function ($app) {
            $config = $app['config']['cloudflare'];

            return new CloudflareClient(
                apiToken: $config['api_token'],
                accountId: $config['account_id'] ?: null,
                baseUrl: $config['base_url'],
            );
        });

        $this->app->alias(CloudflareClient::class, 'cloudflare');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../config/cloudflare.php' => config_path('cloudflare.php'),
        ], 'cloudflare-config');
    }
}
