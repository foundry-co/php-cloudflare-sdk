<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Custom Hostname
 */
readonly class CustomHostnameForAZoneCreateCustomHostnameRequest
{
	public function __construct(
		/** The custom hostname that will point to your hostname via CNAME. */
		public string $hostname,
		/** Unique key/value metadata for this hostname. These are per-hostname (customer) settings. */
		public ?array $customMetadata = null,
		/** SSL properties used when creating the custom hostname. */
		public mixed $ssl = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'hostname' => $this->hostname,
		    'custom_metadata' => $this->customMetadata,
		    'ssl' => $this->ssl,
		], fn ($v) => $v !== null);
	}
}
