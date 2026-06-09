<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DevicesPoliciesFallbackDomainsItem
{
	public function __construct(
		/** The domain suffix to match when resolving locally. */
		public string $suffix,
		/** A description of the fallback domain, displayed in the client UI. */
		public ?string $description = null,
		/** A list of IP addresses to handle domain resolution. */
		public ?array $dnsServer = null,
	) {
	}
}
