<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Check target connectivity
 */
readonly class SlurperCheckTargetConnectivityRequest
{
	public function __construct(
		public string $bucket,
		public \FoundryCo\Cloudflare\Responses\SlurperCheckTargetConnectivityRequestSecret $secret,
		public \FoundryCo\Cloudflare\Enums\SlurperCheckTargetConnectivityRequestVendor $vendor,
		public ?\FoundryCo\Cloudflare\Enums\SlurperCheckTargetConnectivityRequestJurisdiction $jurisdiction = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'bucket' => $this->bucket,
		    'secret' => $this->secret->toArray(),
		    'vendor' => $this->vendor->value,
		    'jurisdiction' => $this->jurisdiction?->value,
		], fn ($v) => $v !== null);
	}
}
