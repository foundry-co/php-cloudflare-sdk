<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Attach Custom Domain To Bucket
 */
readonly class R2AddCustomDomainRequest
{
	public function __construct(
		/** Name of the custom domain to be added. */
		public string $domain,
		/** Whether to enable public bucket access at the custom domain. If undefined, the domain will be enabled. */
		public bool $enabled,
		/** Zone ID of the custom domain. */
		public string $zoneId,
		/** An allowlist of ciphers for TLS termination. These ciphers must be in the BoringSSL format. */
		public ?array $ciphers = null,
		/** Minimum TLS Version the custom domain will accept for incoming connections. If not set, defaults to 1.0. */
		public ?\FoundryCo\Cloudflare\Enums\R2AddCustomDomainRequestMinTLS $minTLS = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'domain' => $this->domain,
		    'enabled' => $this->enabled,
		    'zoneId' => $this->zoneId,
		    'ciphers' => $this->ciphers,
		    'minTLS' => $this->minTLS?->value,
		], fn ($v) => $v !== null);
	}
}
