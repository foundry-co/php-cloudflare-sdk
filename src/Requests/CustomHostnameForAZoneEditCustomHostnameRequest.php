<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit Custom Hostname
 */
readonly class CustomHostnameForAZoneEditCustomHostnameRequest
{
	public function __construct(
		/** Unique key/value metadata for this hostname. These are per-hostname (customer) settings. */
		public ?array $customMetadata = null,
		/** a valid hostname that’s been added to your DNS zone as an A, AAAA, or CNAME record. */
		public ?string $customOriginServer = null,
		/** A hostname that will be sent to your custom origin server as SNI for TLS handshake. This can be a valid subdomain of the zone or custom origin server name or the string ':request_host_header:' which will cause the host header in the request to be used as SNI. Not configurable with default/fallback origin server. */
		public ?string $customOriginSni = null,
		/** SSL properties used when creating the custom hostname. */
		public mixed $ssl = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'custom_metadata' => $this->customMetadata,
		    'custom_origin_server' => $this->customOriginServer,
		    'custom_origin_sni' => $this->customOriginSni,
		    'ssl' => $this->ssl,
		], fn ($v) => $v !== null);
	}
}
