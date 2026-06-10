<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Check domain availability
 */
readonly class RegistrarDomainDiscoveryCheckRequest
{
	public function __construct(
		/**
		 * List of fully qualified domain names (FQDNs) to check for availability. Each domain must include the extension.
		 * - Minimum: 1 domain
		 * - Maximum: 20 domains per request
		 * - Domains on unsupported extensions are returned with `registrable: false` and a `reason` field
		 * - Malformed domain names (e.g., missing extension) may be omitted from the response
		 */
		public array $domains,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'domains' => $this->domains,
		], fn ($v) => $v !== null);
	}
}
