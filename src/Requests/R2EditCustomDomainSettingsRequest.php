<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Configure Custom Domain Settings
 */
readonly class R2EditCustomDomainSettingsRequest
{
	public function __construct(
		/** An allowlist of ciphers for TLS termination. These ciphers must be in the BoringSSL format. */
		public ?array $ciphers = null,
		/** Whether to enable public bucket access at the specified custom domain. */
		public ?bool $enabled = null,
		/** Minimum TLS Version the custom domain will accept for incoming connections. If not set, defaults to previous value. */
		public ?\FoundryCo\Cloudflare\Enums\R2EditCustomDomainSettingsRequestMinTLS $minTLS = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ciphers' => $this->ciphers,
		    'enabled' => $this->enabled,
		    'minTLS' => $this->minTLS?->value,
		], fn ($v) => $v !== null);
	}
}
