<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Laravel\Facades;

use FoundryCo\Cloudflare\CloudflareClient;
use Illuminate\Support\Facades\Facade;

/**
 * @see \FoundryCo\Cloudflare\CloudflareClient
 *
 * @method static \FoundryCo\Cloudflare\Resources\AccountsResource accounts()
 * @method static \FoundryCo\Cloudflare\Resources\DNSRecordsResource dnsRecords()
 * @method static \FoundryCo\Cloudflare\Resources\ZoneResource zone(?string $zoneId = null)
 */
class Cloudflare extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return CloudflareClient::class;
    }
}
