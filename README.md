# Cloudflare PHP SDK

A PHP SDK for the [Cloudflare API](https://developers.cloudflare.com/api/), auto-generated from the official OpenAPI spec. Uses Guzzle for HTTP and Valinor for typed response deserialization.

## Requirements

- PHP 8.1+
- guzzlehttp/guzzle ^7.0
- cuyz/valinor ^2.0

## Installation

```bash
composer require foundry-co/cloudflare
```

## Laravel

The package includes first-class Laravel support via a service provider and facade that are auto-discovered by Laravel's package auto-discovery.

### Installation

```bash
composer require foundry-co/cloudflare
```

Add the following to your `.env`:

```env
CLOUDFLARE_API_TOKEN=your-api-token
CLOUDFLARE_ACCOUNT_ID=your-account-id   # optional
CLOUDFLARE_BASE_URL=https://api.cloudflare.com/client/v4  # optional
```

That's it — the `CloudflareServiceProvider` is registered automatically and the `Cloudflare` facade is available immediately.

### Publishing the config

```bash
php artisan vendor:publish --tag=cloudflare-config
```

This copies `config/cloudflare.php` into your application's config directory.

### Usage

```php
use FoundryCo\Cloudflare\Laravel\Facades\Cloudflare;

// Via facade
$records = Cloudflare::zone('zone-id')->dnsRecords()->list();

// Via dependency injection
use FoundryCo\Cloudflare\CloudflareClient;

class MyController extends Controller
{
    public function __construct(private CloudflareClient $cloudflare) {}

    public function index()
    {
        return $this->cloudflare->zone('zone-id')->dnsRecords()->list();
    }
}
```

---

## Authentication

All requests authenticate with a Cloudflare API Token. Create tokens in the Cloudflare dashboard under **My Profile > API Tokens**.

```php
use FoundryCo\Cloudflare\CloudflareClient;

$cf = new CloudflareClient(apiToken: 'your-api-token');
```

## Working with Responses

Methods return typed PHP objects deserialized via Valinor. List endpoints that include pagination metadata return a `PaginatedResponse`:

```php
use FoundryCo\Cloudflare\Support\PaginatedResponse;

$result = $cf->accounts()->list();

// PaginatedResponse
$result->items;       // array of typed objects
$result->total;       // total record count
$result->page;        // current page
$result->perPage;     // records per page
$result->totalPages;  // total pages
$result->hasMorePages(); // bool
foreach ($result as $account) { ... }

// Single-item responses return typed objects directly
$account = $cf->accounts()->listGet(); // AccountsDetails object
$account->id;
$account->name;
```

## Error Handling

The client throws `CloudflareException` on any non-2xx response. It is thrown automatically — you do not need to check the response yourself.

```php
use FoundryCo\Cloudflare\Exceptions\CloudflareException;

try {
    $result = $cf->dnsRecords()->get('zone-id', 'record-id');
} catch (CloudflareException $e) {
    $e->statusCode; // HTTP status
    $e->errors;     // array of ['code' => int, 'message' => string]
    $e->getMessage(); // concatenated error messages
}
```

## Resource Access

Resources are available directly from the client or scoped to a zone via `zone()`.

### Direct access (account-scoped or global resources)

```php
$cf->accounts()->list();
$cf->members()->list();
$cf->dnsRecords();        // zone ID must be baked in via zone()
```

### Zone-scoped access

Pass a zone ID to `zone()` and then chain the resource:

```php
$zone = $cf->zone('zone-id');

$zone->dnsRecords()->list();
$zone->dnsRecords()->get('record-id');
$zone->cacheSettings()->get();
$zone->rulesets()->list();
```

## Resources

### Accounts

```php
$cf->accounts()->list();
$cf->accounts()->list(name: 'Acme', direction: AccountsDirection::Asc);
$cf->accounts()->listGet(); // single account details
```

### Account Members

```php
$cf->members()->list();
```

### DNS Records

```php
$dns = $cf->zone('zone-id')->dnsRecords();

$dns->list();
$dns->list(type: DNSRecordsForAZoneType::A, name: 'www.example.com');
$dns->list(proxied: true, perPage: 100);
$dns->get('record-id');
$dns->create();   // pass a request object
$dns->update('record-id');
$dns->delete('record-id');

// Batch operations
$dns->batch($request);

// BIND zone file
$dns->export();
$dns->import();
$dns->scan();
$dns->review();
```

### DNS Settings

```php
$cf->zone('zone-id')->dnsSettings()->get();
```

### Zones

```php
$cf->zone()->list();           // ZoneResource also exposes zone-level list/get
```

### Rulesets

```php
$rulesets = $cf->zone('zone-id')->rulesets();

$rulesets->list();
$rulesets->get('ruleset-id');
$rulesets->create($request);
$rulesets->update('ruleset-id', $request);
$rulesets->delete('ruleset-id');
```

### Cache

```php
$cf->zone('zone-id')->cacheSettings()->get();
$cf->zone('zone-id')->cacheSettings()->update($request);
```

### Workers

```php
$cf->workerScript()->list();
$cf->workerScript()->get('script-name');
$cf->workers()->list();
```

### Workers KV

```php
$cf->workersKVNamespace()->list();
$cf->workersKVNamespace()->create($request);
$cf->workersKVNamespace()->delete('namespace-id');

$cf->keys()->list();
$cf->values()->get('namespace-id', 'key');
```

### D1

```php
$cf->d1()->list();
$cf->d1()->create($request);
$cf->d1()->get('database-id');
$cf->d1()->delete('database-id');
```

### R2

```php
$cf->r2Bucket()->list();
$cf->r2Bucket()->create($request);
$cf->r2Bucket()->get('bucket-name');
$cf->r2Bucket()->delete('bucket-name');
$cf->r2Object()->get('bucket-name', 'object-key');
```

### Pages

```php
$cf->pagesProject()->list();
$cf->pagesProject()->get('project-name');
$cf->pagesProject()->create($request);
$cf->pagesProject()->delete('project-name');

$cf->pagesDeployment()->list('project-name');
$cf->pagesDeployment()->delete('project-name', 'deployment-id');
```

### Stream

```php
$cf->streamVideos()->list();
$cf->streamVideos()->get('video-id');
$cf->streamVideos()->delete('video-id');
$cf->streamLiveInputs()->list();
$cf->streamSigningKeys()->list();
```

### Cloudflare Images

```php
$cf->cloudflareImages()->list();
$cf->cloudflareImages()->get('image-id');
$cf->cloudflareImages()->delete('image-id');
$cf->cloudflareImagesVariants()->list();
```

### Cloudflare Tunnels

```php
$cf->cloudflareTunnel()->list();
$cf->cloudflareTunnel()->create($request);
$cf->cloudflareTunnel()->delete('tunnel-id');
$cf->cloudflareTunnelConfiguration()->get('tunnel-id');
$cf->cloudflareTunnelConfiguration()->update('tunnel-id', $request);
```

### Zero Trust / Access

```php
$cf->accessApplications()->list();
$cf->accessApplications()->get('app-id');
$cf->accessApplications()->create($request);
$cf->accessApplications()->update('app-id', $request);
$cf->accessApplications()->delete('app-id');

$cf->accessGroups()->list();
$cf->accessIdentityProviders()->list();
$cf->accessServiceTokens()->list();
$cf->accessReusablePolicies()->list();
$cf->zeroTrustOrganization()->get();
$cf->zeroTrustGatewayRules()->list();
$cf->zeroTrustLists()->list();
```

### Load Balancing

```php
$cf->loadBalancerPools()->list();
$cf->loadBalancerPools()->create($request);
$cf->loadBalancerMonitors()->list();
$cf->loadBalancerMonitors()->create($request);
```

### Logpush

```php
$cf->logpushJobs()->list();
$cf->logpushJobs()->create($request);
$cf->logpushJobs()->update('job-id', $request);
$cf->logpushJobs()->delete('job-id');
```

### Vectorize

```php
$cf->vectorize()->list();
$cf->vectorize()->create($request);
$cf->vectorize()->get('index-name');
$cf->vectorize()->delete('index-name');
```

### AI Gateway

```php
$cf->aiGatewayGateways()->list();
$cf->aiGatewayLogs()->list('gateway-id');
```

### Workers AI

```php
$cf->workersAI()->run($request);
$cf->workersAITextGeneration()->run($request);
$cf->workersAITextEmbeddings()->run($request);
```

### Hyperdrive

```php
$cf->hyperdrive()->list();
$cf->hyperdrive()->create($request);
$cf->hyperdrive()->get('config-id');
$cf->hyperdrive()->delete('config-id');
```

### Queues

```php
$cf->queue()->list();
$cf->queue()->create($request);
$cf->queue()->delete('queue-id');
```

### Radar

```php
$cf->radarHTTP()->timeseries($request);
$cf->radarLayer7Attacks()->timeseries($request);
$cf->radarBGP()->timeseries($request);
$cf->radarDNS()->timeseries($request);
```

### Notifications

```php
$cf->notificationPolicies()->list();
$cf->notificationPolicies()->create($request);
$cf->notificationWebhooks()->list();
$cf->notificationAlertTypes()->list();
```

### Registrar

```php
$cf->registrarDomains()->list();
$cf->registrarDomains()->get('domain-name');
$cf->registrarDomains()->update('domain-name', $request);
```

### URL Scanner

```php
$cf->urlScanner()->scan($request);
$cf->urlScanner()->get('scan-id');
```

### Intelligence

```php
$cf->ipIntelligence()->get('1.2.3.4');
$cf->domainIntelligence()->get('example.com');
$cf->urlIntelligence()->get('https://example.com');
$cf->whoisRecord()->get('example.com');
$cf->asnIntelligence()->get(13335);
```

### Turnstile

```php
$cf->turnstile()->list();
$cf->turnstile()->create($request);
$cf->turnstile()->delete('widget-id');
```

### User

```php
$cf->user()->get();
$cf->user()->update($request);
$cf->userAPITokens()->list();
$cf->usersAccountMemberships()->list();
```

## Pagination

List endpoints that return `result_info` automatically return a `PaginatedResponse`. Iterate pages manually:

```php
$page = 1;
$allRecords = [];

do {
    $result = $cf->zone('zone-id')->dnsRecords()->list(page: $page, perPage: 100);
    $allRecords = array_merge($allRecords, $result->items);
    $page++;
} while ($result->hasMorePages());
```

## Testing

The `CloudflareClient` constructor accepts a custom `HttpClient` instance, which you can substitute in tests:

```php
use FoundryCo\Cloudflare\CloudflareClient;
use FoundryCo\Cloudflare\Http\HttpClient;

$mockHttp = $this->createMock(HttpClient::class);
// configure expectations...

$cf = new CloudflareClient(apiToken: 'fake', http: $mockHttp);
```

## Code Generation

The SDK is auto-generated from the official Cloudflare OpenAPI spec. To regenerate:

```bash
php generator/bin/generate
```

## License

MIT
