# Cloudflare PHP SDK

A PHP SDK for the [Cloudflare API](https://developers.cloudflare.com/api/), built on [Saloon](https://docs.saloon.dev/).

## Requirements

- PHP 8.1+
- Saloon 4.0+

## Installation

```bash
composer require foundry-co/cloudflare
```

## Authentication

All requests authenticate with a Cloudflare API Token. Create tokens in the Cloudflare dashboard under **My Profile > API Tokens**.

```php
use Foundry\Cloudflare\CloudflareConnector;

$cloudflare = new CloudflareConnector(
    apiToken: 'your-api-token',
    accountId: 'your-account-id', // required for account-scoped resources
);
```

The `accountId` is required for: Access, Workers, Stream, Images, R2, Logpush, Tunnels, Pages, Load Balancing. Zone-scoped resources (DNS, Cache, Firewall, etc.) take the `zoneId` as a method argument instead.

## Working with Responses

Every method returns a Saloon `Response`:

```php
$response = $cf->zones()->list();

$data    = $response->json();                  // full decoded body
$result  = $response->json('result');          // access a key
$first   = $response->json('result.0.name');   // dot notation
$ok      = $response->successful();            // true for 2xx
$status  = $response->status();                // HTTP status code
$headers = $response->header('Content-Type');

$response->throw(); // throw on non-2xx
```

Standard Cloudflare responses follow the envelope `{ success, result, errors, messages, result_info }`.

## Resources

### Zones

```php
$cf = new CloudflareConnector('token');

$cf->zones()->list();
$cf->zones()->list(['name' => 'example.com', 'status' => 'active']);
$cf->zones()->get('zone-id');
$cf->zones()->create('example.com', 'account-id');
$cf->zones()->create('example.com', 'account-id', 'partial'); // full|partial|secondary
$cf->zones()->update('zone-id', ['paused' => false]);
$cf->zones()->delete('zone-id');
$cf->zones()->activationCheck('zone-id');
```

### Zone Settings

```php
$settings = $cf->zoneSettings('zone-id');

$settings->getAll();
$settings->get('ssl');
$settings->get('security_level');

// Update a single setting
$settings->update('ssl', 'full');
$settings->update('security_level', 'high');
$settings->update('always_use_https', 'on');

// Update multiple settings at once
$settings->updateAll([
    ['id' => 'ssl', 'value' => 'full'],
    ['id' => 'always_use_https', 'value' => 'on'],
    ['id' => 'min_tls_version', 'value' => '1.2'],
]);
```

Common setting IDs: `ssl`, `security_level`, `always_use_https`, `min_tls_version`, `http2`, `http3`, `0rtt`, `brotli`, `cache_level`, `browser_cache_ttl`, `development_mode`, `email_obfuscation`, `hotlink_protection`, `ip_geolocation`, `ipv6`, `rocket_loader`, `server_side_exclude`, `waf`.

### DNS Records

```php
$dns = $cf->dns('zone-id');

$dns->list();
$dns->list(['type' => 'A', 'name' => 'www.example.com']);
$dns->list(['proxied' => true, 'per_page' => 100]);

$dns->get('record-id');

// Simple records
$dns->create('A',     'www',        '1.2.3.4');
$dns->create('AAAA',  'www',        '::1');
$dns->create('CNAME', 'blog',       'example.ghost.io');
$dns->create('TXT',   'example.com', 'v=spf1 include:mailgun.org ~all');

// With TTL and proxy
$dns->create('A', 'app', '1.2.3.4', ttl: 3600, proxied: true);

// MX, SRV, CAA via extra fields
$dns->create('MX', 'example.com', 'mail.example.com', extra: ['priority' => 10]);
$dns->create('CAA', 'example.com', 'letsencrypt.org', extra: ['data' => ['flags' => 0, 'tag' => 'issue']]);

$dns->update('record-id', ['content' => '5.6.7.8', 'proxied' => false]);
$dns->delete('record-id');

// BIND zone file import/export
$dns->import(file_get_contents('/path/to/zone.txt'));
$response = $dns->export(); // returns BIND text in body
file_put_contents('zone.txt', $response->body());
```

### DNSSEC

```php
$dns = $cf->dns('zone-id');

$dns->getDnssec();
$dns->enableDnssec();
$dns->disableDnssec();
$dns->updateDnssec('active');   // active|disabled|pending|error
```

### Cache

```php
$cache = $cf->cache('zone-id');

$cache->purgeEverything();
$cache->purgeFiles(['https://example.com/style.css', 'https://example.com/app.js']);
$cache->purgeByTags(['tag-1', 'tag-2']);
$cache->purgeByHosts(['static.example.com']);
$cache->purge(['files' => [['url' => 'https://example.com', 'headers' => ['CF-Device-Type' => 'mobile']]]]);

$cache->getSettings();
$cache->updateSettings(['cache_level' => 'aggressive']);
```

### Firewall

```php
$firewall = $cf->firewall('zone-id');

// Firewall rules (legacy)
$firewall->listRules();
$firewall->getRule('rule-id');
$firewall->createRules([
    ['filter' => ['expression' => 'ip.src eq 1.2.3.4'], 'action' => 'block'],
    ['filter' => ['expression' => '(http.request.uri.path contains "/wp-admin")'], 'action' => 'challenge'],
]);
$firewall->updateRule('rule-id', ['action' => 'js_challenge', 'paused' => false]);
$firewall->deleteRule('rule-id');

// WAF managed rules
$firewall->listWafRules('package-id');

// Rate limiting
$firewall->listRateLimits();
$firewall->createRateLimit([
    'match' => ['request' => ['url' => ['pattern' => 'example.com/api/*', 'zone_name' => 'example.com']]],
    'threshold' => 100,
    'period' => 60,
    'action' => ['mode' => 'ban', 'timeout' => 3600],
]);
$firewall->deleteRateLimit('rate-limit-id');
```

### Rulesets

The Rulesets API is the modern replacement for Page Rules and legacy Firewall Rules.

```php
$rulesets = $cf->rulesets('zone-id');

$rulesets->list();
$rulesets->get('ruleset-id');

// Create a custom WAF ruleset
$rulesets->create([
    'name'  => 'My Custom Rules',
    'kind'  => 'zone',
    'phase' => 'http_request_firewall_custom',
    'rules' => [
        [
            'action'      => 'block',
            'expression'  => 'ip.src in {1.2.3.4 5.6.7.8}',
            'description' => 'Block bad IPs',
            'enabled'     => true,
        ],
    ],
]);

// Deploy a managed WAF ruleset
$rulesets->create([
    'name'  => 'Deploy Cloudflare Managed WAF',
    'kind'  => 'zone',
    'phase' => 'http_request_firewall_managed',
    'rules' => [
        ['action' => 'execute', 'expression' => 'true', 'action_parameters' => ['id' => 'efb7b8c949ac4650a09736fc376e9aee']],
    ],
]);

$rulesets->update('ruleset-id', $data);
$rulesets->delete('ruleset-id');
```

### Page Rules

```php
$pageRules = $cf->pageRules('zone-id');

$pageRules->list();
$pageRules->list(['status' => 'active', 'order' => 'priority', 'direction' => 'asc']);
$pageRules->get('rule-id');

$pageRules->create(
    targets: [['target' => 'url', 'constraint' => ['operator' => 'matches', 'value' => '*example.com/shop/*']]],
    actions: [['id' => 'ssl', 'value' => 'flexible']],
);

$pageRules->create(
    targets: [['target' => 'url', 'constraint' => ['operator' => 'matches', 'value' => 'example.com/*']]],
    actions: [['id' => 'always_use_https']],
    priority: 1,
    status: 'active',
);

$pageRules->update('rule-id', ['status' => 'disabled']);
$pageRules->delete('rule-id');
```

### Custom Hostnames (SSL for SaaS)

```php
$hostnames = $cf->customHostnames('zone-id');

$hostnames->list();
$hostnames->list(['hostname' => 'customer.example.com']);
$hostnames->get('hostname-id');

// Create with SSL
$hostnames->create('customer.example.com', ssl: [
    'method' => 'http',
    'type'   => 'dv',
]);

// Create with custom certificate
$hostnames->create('customer.example.com', ssl: [
    'method'        => 'manual',
    'type'          => 'sni_custom',
    'custom_cert'   => '-----BEGIN CERTIFICATE-----...',
    'custom_key'    => '-----BEGIN PRIVATE KEY-----...',
]);

$hostnames->update('hostname-id', [
    'ssl'                  => ['method' => 'email'],
    'custom_origin_server' => 'origin.example.com',
]);

$hostnames->delete('hostname-id');
```

### Custom SSL Certificates

```php
$certs = $cf->customCertificates('zone-id');

$certs->list();
$certs->list(['status' => 'active']);
$certs->get('cert-id');

$certs->create(
    certificate: file_get_contents('cert.pem'),
    privateKey:  file_get_contents('key.pem'),
    bundleMethod: 'ubiquitous', // ubiquitous|optimal|force
);

$certs->update('cert-id', ['bundle_method' => 'optimal']);
$certs->delete('cert-id');
```

### Health Checks

```php
$healthChecks = $cf->healthChecks('zone-id');

$healthChecks->list();
$healthChecks->get('healthcheck-id');

$healthChecks->create([
    'name'             => 'API Health Check',
    'address'          => 'api.example.com',
    'type'             => 'HTTPS',
    'path'             => '/health',
    'interval'         => 60,
    'retries'          => 2,
    'timeout'          => 5,
    'consecutive_up'   => 1,
    'consecutive_down' => 2,
    'http_config'      => ['expected_codes' => ['2xx'], 'method' => 'GET'],
    'notification_email_addresses' => ['ops@example.com'],
]);

$healthChecks->update('healthcheck-id', ['interval' => 30, 'suspended' => true]);
$healthChecks->delete('healthcheck-id');
```

### Waiting Rooms

```php
$waitingRooms = $cf->waitingRooms('zone-id');

$waitingRooms->list();
$waitingRooms->get('waiting-room-id');

$waitingRooms->create([
    'name'                    => 'Checkout Queue',
    'host'                    => 'example.com',
    'path'                    => '/checkout',
    'total_active_users'      => 500,
    'new_users_per_minute'    => 200,
    'session_duration'        => 5,
    'queue_all'               => false,
    'disable_session_renewal' => false,
    'json_response_enabled'   => false,
    'queueing_method'         => 'fifo', // fifo|random|passthrough|reject
    'enabled_origin_commands' => ['revoke'],
]);

$waitingRooms->update('waiting-room-id', ['total_active_users' => 1000]);
$waitingRooms->delete('waiting-room-id');

// Real-time status
$waitingRooms->status('waiting-room-id');

// Scheduled events (e.g. for flash sales)
$waitingRooms->listEvents('waiting-room-id');
$waitingRooms->createEvent('waiting-room-id', [
    'name'                 => 'Flash Sale',
    'event_start_time'     => '2024-12-01T00:00:00Z',
    'event_end_time'       => '2024-12-01T02:00:00Z',
    'total_active_users'   => 2000,
    'new_users_per_minute' => 800,
    'session_duration'     => 3,
    'prequeue_start_time'  => '2024-11-30T23:30:00Z',
]);
```

### Load Balancing

Requires `accountId` in the connector constructor.

```php
$lb = $cf->loadBalancing();

// Zone-scoped load balancers
$lb->list('zone-id');
$lb->create('zone-id', [
    'name'                    => 'example.com',
    'fallback_pool'           => 'pool-id',
    'default_pools'           => ['pool-id'],
    'proxied'                 => true,
    'ttl'                     => 30,
    'steering_policy'         => 'dynamic_latency', // off|geo|random|dynamic_latency|proximity|least_outstanding_requests|least_connections
    'session_affinity'        => 'cookie',
    'session_affinity_ttl'    => 82800,
    'adaptive_routing'        => ['failover_across_pools' => true],
]);
$lb->update('zone-id', 'lb-id', $data);
$lb->delete('zone-id', 'lb-id');

// Account-scoped pools
$lb->listPools();
$lb->createPool([
    'name'               => 'us-east-origins',
    'description'        => 'US East coast origins',
    'enabled'            => true,
    'minimum_origins'    => 1,
    'monitor'            => 'monitor-id',
    'notification_email' => 'ops@example.com',
    'origins'            => [
        ['name' => 'app-1', 'address' => '1.2.3.4', 'enabled' => true, 'weight' => 1],
        ['name' => 'app-2', 'address' => '5.6.7.8', 'enabled' => true, 'weight' => 1],
    ],
    'load_shedding'      => ['default_percent' => 0, 'default_policy' => 'random'],
]);
$lb->deletePool('pool-id');

// Account-scoped monitors
$lb->listMonitors();
$lb->createMonitor([
    'type'             => 'https',
    'path'             => '/health',
    'interval'         => 60,
    'retries'          => 2,
    'timeout'          => 5,
    'expected_codes'   => '2xx',
    'follow_redirects' => true,
    'header'           => ['Host' => ['example.com']],
]);
$lb->deleteMonitor('monitor-id');
```

### Workers

Requires `accountId` in the connector constructor.

```php
$workers = $cf->workers();

// Scripts
$workers->list();
$workers->get('my-worker');
$workers->upload('my-worker', file_get_contents('worker.js'));
$workers->delete('my-worker');

// Routes (zone-scoped)
$workers->listRoutes('zone-id');
$workers->createRoute('zone-id', '*.example.com/api/*', 'my-worker');
$workers->updateRoute('zone-id', 'route-id', '*.example.com/v2/*', 'my-worker');
$workers->deleteRoute('zone-id', 'route-id');

// KV Namespaces
$workers->listKvNamespaces();
$workers->createKvNamespace('MY_STORE');
$workers->deleteKvNamespace('namespace-id');

// KV Values
$workers->getKvValue('namespace-id', 'key');
$workers->writeKvValue('namespace-id', 'key', 'value');
$workers->writeKvValue('namespace-id', 'key', 'value', expiration: 1893456000);
$workers->writeKvValue('namespace-id', 'key', 'value', expirationTtl: 3600);
$workers->deleteKvValue('namespace-id', 'key');

// List keys
$workers->listKvKeys('namespace-id');
$workers->listKvKeys('namespace-id', cursor: 'cursor-token', limit: 100, prefix: 'app_');
```

### Email Routing

```php
$email = $cf->emailRouting('zone-id');

$email->getSettings();
$email->enable();
$email->disable();

// Routing rules
$email->listRules();

// Forward all mail to a single address
$email->createRule([
    'name'     => 'Catch-all forward',
    'enabled'  => true,
    'matchers' => [['type' => 'all']],
    'actions'  => [['type' => 'forward', 'value' => ['admin@internal.example.com']]],
]);

// Forward by address
$email->createRule([
    'name'     => 'Support forward',
    'enabled'  => true,
    'matchers' => [['type' => 'literal', 'field' => 'to', 'value' => 'support@example.com']],
    'actions'  => [['type' => 'forward', 'value' => ['helpdesk@internal.example.com']]],
    'priority' => 1,
]);

$email->updateRule('rule-id', ['enabled' => false]);
$email->deleteRule('rule-id');
```

### Zero Trust Access

Requires `accountId` in the connector constructor.

```php
$access = $cf->access();

// Applications
$access->listApplications();
$access->listApplications(['name' => 'Admin Panel']);
$access->getApplication('app-id');

// Self-hosted application
$access->createApplication([
    'name'              => 'Internal Admin',
    'domain'            => 'admin.example.com',
    'type'              => 'self_hosted',
    'session_duration'  => '24h',
    'allowed_idps'      => ['idp-id'],
    'auto_redirect_to_identity' => false,
    'enable_binding_cookie'     => true,
]);

// SaaS application
$access->createApplication([
    'name' => 'Salesforce',
    'type' => 'saas',
    'saas_app' => [
        'consumer_service_url' => 'https://login.salesforce.com',
        'sp_entity_id'         => 'salesforce-entity-id',
        'name_id_format'       => 'id',
    ],
]);

$access->updateApplication('app-id', ['session_duration' => '12h']);
$access->deleteApplication('app-id');
$access->revokeApplicationTokens('app-id');

// Policies (attached to an application)
$access->listPolicies(appId: 'app-id');
$access->createPolicy([
    'name'       => 'Allow engineers',
    'decision'   => 'allow',
    'include'    => [['email_domain' => ['domain' => 'example.com']]],
    'require'    => [['group' => ['id' => 'engineering-group-id']]],
    'exclude'    => [['email' => ['email' => 'contractor@example.com']]],
    'precedence' => 1,
], appId: 'app-id');

// Reusable policies (not tied to an app)
$access->listPolicies();
$access->createPolicy([
    'name'     => 'Require MFA',
    'decision' => 'require',
    'require'  => [['mfa' => ['auth_method' => 'mfa']]],
]);
$access->updatePolicy('policy-id', $data);
$access->deletePolicy('policy-id');

// Groups
$access->listGroups();
$access->getGroup('group-id');
$access->createGroup(
    name: 'Engineering',
    include: [['email_domain' => ['domain' => 'example.com']]],
    require: [['mfa' => ['auth_method' => 'mfa']]],
);
$access->updateGroup('group-id', $data);
$access->deleteGroup('group-id');

// Service Tokens (for M2M auth)
$access->listServiceTokens();
$response = $access->createServiceToken('CI/CD Pipeline'); // returns client_id and client_secret
$access->rotateServiceToken('token-id');
$access->deleteServiceToken('token-id');

// Identity Providers
$access->listIdentityProviders();
$access->getIdentityProvider('idp-id');

// Add Okta as an OIDC provider
$access->createIdentityProvider([
    'name' => 'Okta',
    'type' => 'oidc',
    'config' => [
        'client_id'     => 'your-okta-client-id',
        'client_secret' => 'your-okta-client-secret',
        'auth_url'      => 'https://yourorg.okta.com/oauth2/v1/authorize',
        'token_url'     => 'https://yourorg.okta.com/oauth2/v1/token',
        'certs_url'     => 'https://yourorg.okta.com/oauth2/v1/keys',
        'scopes'        => ['openid', 'email', 'profile', 'groups'],
    ],
]);

// Add Google Workspace
$access->createIdentityProvider([
    'name' => 'Google Workspace',
    'type' => 'google-apps',
    'config' => [
        'client_id'     => 'your-google-client-id',
        'client_secret' => 'your-google-client-secret',
        'apps_domain'   => 'example.com',
    ],
]);

// Add SAML provider
$access->createIdentityProvider([
    'name' => 'Azure AD',
    'type' => 'saml',
    'config' => [
        'sso_target_url'         => 'https://login.microsoftonline.com/tenant-id/saml2',
        'idp_public_certs'       => ['-----BEGIN CERTIFICATE-----...'],
        'issuer_url'             => 'https://sts.windows.net/tenant-id/',
        'sign_request'           => false,
        'attributes'             => ['email', 'groups'],
        'email_attribute_name'   => 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress',
        'header_attributes'      => [['attribute_name' => 'groups', 'header_name' => 'CF-Access-Groups']],
    ],
]);

$access->updateIdentityProvider('idp-id', $data);
$access->deleteIdentityProvider('idp-id');

// Device management (WARP)
$access->listDevices();
$access->getDeviceSettings();
$access->updateDeviceSettings([
    'service_mode_v2'          => ['mode' => 'warp'],
    'disable_auto_fallback'    => false,
    'support_url'              => 'https://help.example.com',
    'captive_portal'           => 180,
    'allowed_to_leave'         => false,
    'switch_locked'            => true,
]);

// Device enrollment policies
$access->listDevicePolicies();
$access->createDevicePolicy([
    'name'              => 'Allow corp devices',
    'match'             => 'any(identity.groups.name[*] == "Engineering")',
    'allowed'           => true,
    'certificate_dn'    => null,
]);
```

### Tunnels (Cloudflare Tunnel)

Requires `accountId` in the connector constructor.

```php
$tunnels = $cf->tunnels();

$tunnels->list();
$tunnels->list(['name' => 'my-tunnel', 'is_deleted' => false]);
$tunnels->create('my-tunnel', base64_encode(random_bytes(32)));
$tunnels->delete('tunnel-id');

// Get connector token (used to run cloudflared)
$response = $tunnels->getToken('tunnel-id');
$token = $response->json('result');

// Ingress configuration
$tunnels->getConfiguration('tunnel-id');
$tunnels->updateConfiguration('tunnel-id', [
    'ingress' => [
        ['hostname' => 'ssh.example.com',  'service' => 'ssh://localhost:22'],
        ['hostname' => 'app.example.com',  'service' => 'http://localhost:3000'],
        ['hostname' => 'admin.example.com','service' => 'http://localhost:8080',
         'originRequest' => ['noTLSVerify' => true, 'connectTimeout' => '30s']],
        ['service' => 'http_status:404'],  // catch-all must be last
    ],
]);
```

### Stream (Video)

Requires `accountId` in the connector constructor.

```php
$stream = $cf->stream();

$stream->list();
$stream->list(['status' => 'ready', 'search' => 'product demo']);
$stream->get('video-id');
$stream->delete('video-id');

// Initiate a TUS resumable upload — returns a Location header with the upload URL
$response = $stream->initiateUpload(
    maxDurationSeconds: 3600,
    meta: ['name' => 'Product Demo', 'creator' => 'marketing-team'],
);
$uploadUrl = $response->header('Location');
// Then use a TUS client to upload to $uploadUrl
```

### Images

Requires `accountId` in the connector constructor.

```php
$images = $cf->images();

$images->list();
$images->list(page: 2, perPage: 100);
$images->get('image-id');
$images->delete('image-id');

// Upload from file
$images->upload(
    fileContents: file_get_contents('/path/to/photo.jpg'),
    filename: 'product-photo.jpg',
    metadata: ['product_id' => '12345', 'category' => 'electronics'],
    requireSignedUrls: false,
);

// Image variants (transformations)
$images->listVariants();
```

### R2 Object Storage

Requires `accountId` in the connector constructor. Object-level operations (put, get, delete objects) use the S3-compatible API directly.

```php
$r2 = $cf->r2();

// Buckets
$r2->listBuckets();
$r2->listBuckets(['name_contains' => 'prod', 'per_page' => 50]);
$r2->getBucket('my-bucket');
$r2->createBucket('my-bucket');
$r2->createBucket('my-bucket', locationHint: 'WEUR');   // WNAM|ENAM|WEUR|EEUR|APAC|OC
$r2->createBucket('my-bucket', storageClass: 'InfrequentAccess');
$r2->deleteBucket('my-bucket');

// CORS
$r2->getBucketCors('my-bucket');
$r2->putBucketCors('my-bucket', [
    [
        'allowed_origins' => ['https://example.com', 'https://app.example.com'],
        'allowed_methods' => ['GET', 'PUT', 'DELETE'],
        'allowed_headers' => ['*'],
        'expose_headers'  => ['ETag'],
        'max_age_seconds' => 3600,
    ],
]);
```

### Web3 Hostnames

```php
$web3 = $cf->web3('zone-id');

$web3->list();

// Create an Ethereum gateway
$web3->create([
    'name'        => 'gateway.example.com',
    'target'      => 'ethereum',
    'description' => 'Ethereum gateway for NFT site',
]);

// Create an IPFS gateway
$web3->create([
    'name'   => 'ipfs.example.com',
    'target' => 'ipfs',
    'dnslink' => '_dnslink.example.com',
]);

$web3->delete('hostname-id');
```

### Spectrum

```php
$spectrum = $cf->spectrum('zone-id');

$spectrum->list();
$spectrum->list(['direction' => 'desc', 'per_page' => 50]);

// TCP application
$spectrum->create([
    'protocol'       => 'tcp/22',
    'dns'            => ['type' => 'ADDRESS', 'name' => 'ssh.example.com'],
    'origin_direct'  => ['tcp://1.2.3.4:22'],
    'ip_firewall'    => true,
    'proxy_protocol' => 'off',
    'tls'            => 'off',
    'traffic_type'   => 'direct',
]);

// UDP application
$spectrum->create([
    'protocol'      => 'udp/1194',
    'dns'           => ['type' => 'ADDRESS', 'name' => 'vpn.example.com'],
    'origin_direct' => ['udp://10.0.0.1:1194'],
    'argo_smart_routing' => false,
]);

$spectrum->update('app-id', ['origin_direct' => ['tcp://5.6.7.8:22']]);
$spectrum->delete('app-id');
```

### Logpush

Requires `accountId` in the connector constructor.

```php
$logpush = $cf->logpush();

$logpush->list();
$logpush->validateDestination('s3://my-bucket/logs?region=us-east-1');

// Push HTTP request logs to S3
$logpush->create([
    'name'             => 'http-logs-s3',
    'destination_conf' => 's3://my-bucket/http-logs?region=us-east-1',
    'dataset'          => 'http_requests',
    'enabled'          => true,
    'logpull_options'  => 'fields=RayID,ClientIP,ClientRequestMethod,ClientRequestURI,EdgeResponseStatus&timestamps=rfc3339',
    'frequency'        => 'high',  // high|low
]);

// Push to R2
$logpush->create([
    'name'             => 'firewall-events-r2',
    'destination_conf' => 'r2://my-r2-bucket/firewall-events',
    'dataset'          => 'firewall_events',
    'enabled'          => true,
]);

// Push to Splunk
$logpush->create([
    'name'             => 'splunk-integration',
    'destination_conf' => 'splunk://splunk.example.com:8088/services/collector?channel=1234&insecure-skip-verify=false',
    'dataset'          => 'http_requests',
    'enabled'          => true,
]);

$logpush->update(123, ['enabled' => false]);
$logpush->delete(123);
```

### Pages

Requires `accountId` in the connector constructor.

```php
$pages = $cf->pages();

$pages->list();
$pages->get('my-project');

$pages->create([
    'name'              => 'my-project',
    'production_branch' => 'main',
    'build_config'      => [
        'build_command'       => 'npm run build',
        'destination_dir'     => 'dist',
        'root_dir'            => '',
        'web_analytics_tag'   => null,
        'web_analytics_token' => null,
    ],
    'deployment_configs' => [
        'production' => [
            'env_vars' => [
                'API_URL' => ['value' => 'https://api.example.com'],
            ],
        ],
        'preview' => [
            'env_vars' => [
                'API_URL' => ['value' => 'https://staging-api.example.com'],
            ],
        ],
    ],
    'source' => [
        'type'   => 'github',
        'config' => [
            'owner'                         => 'myorg',
            'repo_name'                     => 'my-site',
            'production_branch'             => 'main',
            'pr_comments_enabled'           => true,
            'deployments_enabled'           => true,
            'production_deployments_enabled'=> true,
        ],
    ],
]);

$pages->delete('my-project');

// Deployments
$pages->listDeployments('my-project');
$pages->listDeployments('my-project', ['env' => 'production']);
$pages->deleteDeployment('my-project', 'deployment-id');
```

### Accounts

```php
$cf->accounts()->list();
$cf->accounts()->list(['name' => 'Acme', 'direction' => 'asc']);
$cf->accounts()->get('account-id');
$cf->accounts()->update('account-id', [
    'name'     => 'Acme Corp',
    'settings' => ['enforce_twofactor' => true],
]);

// Members
$cf->accounts()->listMembers('account-id');
$cf->accounts()->getMember('account-id', 'member-id');
$cf->accounts()->addMember('account-id', 'user@example.com', [
    ['id' => 'administrator-role-id'],
]);
$cf->accounts()->updateMember('account-id', 'member-id', [
    'roles' => [['id' => 'developer-role-id']],
]);
$cf->accounts()->removeMember('account-id', 'member-id');

// Roles
$cf->accounts()->listRoles('account-id');
```

### Users

```php
$cf->users()->get();
$cf->users()->update(['first_name' => 'Jane', 'last_name' => 'Doe', 'telephone' => '+1 555-1234']);
$cf->users()->memberships(['status' => 'accepted', 'order' => 'status', 'direction' => 'asc']);
```

## Error Handling

Cloudflare returns structured errors in `result.errors`. You can inspect them directly:

```php
$response = $cf->zones()->get('bad-id');

if ($response->failed()) {
    $errors = $response->json('errors');
    foreach ($errors as $error) {
        echo $error['code'] . ': ' . $error['message'] . PHP_EOL;
    }
}
```

Or use the included exception helper:

```php
use Foundry\Cloudflare\Exceptions\CloudflareException;

if ($response->failed()) {
    throw CloudflareException::fromResponse($response);
}
```

`CloudflareException` exposes `getErrors()` (the raw errors array) and `getResponse()` (the Saloon Response).

## Sending Requests Directly

Every resource is a thin wrapper around individual request classes. You can send any request directly when you need something not covered by a resource method:

```php
use Foundry\Cloudflare\Requests\Zones\ListZones;
use Foundry\Cloudflare\Requests\Dns\CreateDnsRecord;

$response = $cloudflare->send(new ListZones(['status' => 'active']));

$response = $cloudflare->send(new CreateDnsRecord(
    zoneId:  'zone-id',
    type:    'SRV',
    name:    '_sip._tcp',
    content: '0 5060 sip.example.com',
    extra:   ['data' => ['service' => '_sip', 'proto' => '_tcp', 'name' => 'example.com', 'priority' => 10, 'weight' => 0, 'port' => 5060, 'target' => 'sip.example.com']],
));
```

## Mocking in Tests

Use Saloon's built-in `MockClient`:

```php
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Foundry\Cloudflare\CloudflareConnector;
use Foundry\Cloudflare\Requests\Zones\ListZones;
use Foundry\Cloudflare\Requests\Dns\CreateDnsRecord;

$mockClient = new MockClient([
    ListZones::class => MockResponse::make([
        'success' => true,
        'result'  => [
            ['id' => 'abc123', 'name' => 'example.com', 'status' => 'active'],
        ],
        'result_info' => ['page' => 1, 'per_page' => 20, 'total_count' => 1, 'count' => 1],
        'errors'      => [],
        'messages'    => [],
    ]),
    CreateDnsRecord::class => MockResponse::make([
        'success' => true,
        'result'  => ['id' => 'rec-xyz', 'type' => 'A', 'name' => 'www.example.com', 'content' => '1.2.3.4'],
    ], 200),
]);

$cf = new CloudflareConnector('fake-token');
$cf->withMockClient($mockClient);

$zones = $cf->zones()->list()->json('result');
// [['id' => 'abc123', 'name' => 'example.com', 'status' => 'active']]
```

## Pagination

Cloudflare uses page-based pagination on most list endpoints. Use the `result_info` from the response to iterate:

```php
$page = 1;
$allZones = [];

do {
    $response = $cf->zones()->list(['page' => $page, 'per_page' => 50]);
    $body     = $response->json();

    $allZones = array_merge($allZones, $body['result']);

    $totalPages = $body['result_info']['total_pages'];
    $page++;
} while ($page <= $totalPages);
```

Some endpoints (R2, KV keys) use cursor-based pagination:

```php
$cursor = null;
$allKeys = [];

do {
    $response = $cf->workers()->listKvKeys('namespace-id', cursor: $cursor, limit: 1000);
    $body     = $response->json();

    $allKeys = array_merge($allKeys, $body['result']);
    $cursor  = $body['result_info']['cursor'] ?? null;
} while ($cursor !== null);
```

## License

MIT
